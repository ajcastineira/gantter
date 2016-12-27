<?php

namespace GanttBundle\Helper;

use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManager;
/* USAGE
$helper = $this->get('GanttBundle.helper.siding');
$result = $helper->getUserData(18635105);
$result = $helper->studentHasClass(18635105, "IIC1062");
$result = $helper->getCurrentCredits(18635105);
$result = $helper->isRegularStudent(18635105);
*/
/**
 * Siding helper.
 *
 */
class SidingHelper
{
    private $SOAP;
    private $entityManager;
    private $container;

    public function __construct(EntityManager $entityManager, ContainerInterface $container) {
        $this->entityManager = $entityManager;
        $this->container = $container;
        $uri = $this->container->getParameter( 'wsdl_uri' );
        $authentication = $this->container->getParameter( 'wsdl_auth' );
        $login = $this->container->getParameter( 'wsdl_login' );
        $password = $this->container->getParameter( 'wsdl_password' );
        $cache = $this->container->getParameter( 'wsdl_cache' );
        
        $params = array(
            'authentication'        => $authentication,
            'login'                 => $login,
            'password'              => $password,
            'cache_wsdl'            => $cache
        );
                
        $this->SOAP = new \SoapClient($uri, $params);
    }

    /*
    Valida si el par login/pass suministrado es válido para ingresar al SIDING. Parameters: string $login   Login a validar. string $password   Pass a validar. Returns: integer    RUN del usuario asociado, si el par login/pass suministrado es válido para ingresar al SIDING, o 0 si el usuario no existe o el par login/pass no es válido.
    */
    public function authenticate($login, $password) {
        try {
            $data = $this->SOAP->autenticar($login, $password);
        }
        catch(\SoapFault $soapFault) {
            return 0;
        }
        
        return $data;
    }
    
    /*
    Retorna la información del usuario con el RUN dado. Parameters: integer $run    RUN del usuario consultado. Returns: mixed[]    Arreglo con información del usuario con el RUN dado. Throws: SoapFault  Si el RUN dado no corresponde a un usuario válido.
    */
    public function getUserData($rut) {        
        try {
            $data = $this->SOAP->get_datos($rut);
        } catch(\Exception $e) {
            return 0;
        }
        
        if(!$data->run) {
            return 0;
        }
                        
        $image_path = "https://intrawww.ing.puc.cl/siding/datos/fotos/publicas/";
        $first = explode(",",$data->telefonos);

        $user = array(
            'rut' => $data->run,
            'name' => utf8_encode(ucwords(strtolower(utf8_decode($data->nombre)))),
            'lastname' => utf8_encode(ucwords(strtolower(utf8_decode($data->apellido_paterno)))),
            'secondLastname' => utf8_encode(ucwords(strtolower(utf8_decode($data->apellido_materno)))),
            'rol' => $data->rol,
            'department' => $data->departamentos,
            'photo' => $image_path . $data->foto_publica,
            'mail' => $data->email,
            'phoneNumber' => $first[0]
        );
        
        return $user;
    }
}













