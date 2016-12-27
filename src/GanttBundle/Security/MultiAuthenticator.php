<?php
namespace GanttBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authentication\SimpleFormAuthenticatorInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Doctrine\ORM\EntityManager;
use GanttBundle\Helper\SidingHelper;

class MultiAuthenticator implements SimpleFormAuthenticatorInterface
{
    private $encoder;
    private $entityManager;

    public function __construct(UserPasswordEncoderInterface $encoder, EntityManager $entityManager, SidingHelper $siding)
    {
        $this->encoder = $encoder;
        $this->entityManager = $entityManager;
        $this->siding = $siding;
    }

    public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
    {
        try {
            $user = $userProvider->loadUserByUsername($token->getUsername());
        } 
        catch (UsernameNotFoundException $e) {

            $siding = $this->siding;

            $rut = $siding->authenticate($token->getUsername(), $token->getCredentials());

            if($rut > 0) //si es siding
            {
                $em = $this->entityManager;
                $user = $em->getRepository('GanttBundle:User')->findOneByRut($rut);

                if(!is_null($user))
                {
                    return new UsernamePasswordToken(
                        $user,
                        $user->getPassword(),
                        $providerKey,
                        $user->getRoles()
                    );
                }
                else
                {
                    $data = $this->siding->getUserData($rut);
                    $user = $em->getRepository('GanttBundle:User')->createFromSidingData($data, $em);

                    return new UsernamePasswordToken(
                        $user,
                        $user->getPassword(),
                        $providerKey,
                        $user->getRoles()
                    );
                }
            } 
            throw new CustomUserMessageAuthenticationException('Las credenciales presentadas no son válidas');
        }

        $passwordValid = $this->encoder->isPasswordValid($user, $token->getCredentials());

        if ($passwordValid) {
            return new UsernamePasswordToken(
                $user,
                $user->getPassword(),
                $providerKey,
                $user->getRoles()
            );
        }

        // CAUTION: this message will be returned to the client
        // (so don't put any un-trusted messages / error strings here)
        throw new CustomUserMessageAuthenticationException('Las credenciales presentadas no son válidas');
    }

    public function supportsToken(TokenInterface $token, $providerKey)
    {
        return $token instanceof UsernamePasswordToken
            && $token->getProviderKey() === $providerKey;
    }

    public function createToken(Request $request, $username, $password, $providerKey)
    {
        return new UsernamePasswordToken($username, $password, $providerKey);
    }
}