<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $request = $this->getRequest();
        $request->getPost()->toArray();
        $post = $request->getPost()->toArray();

        $post['nome']='Jefferson';
//        /print_r($retorno['data']);

        $retorno['data'] = array(
            'empresa'             => $this->manipularNomeEmpresa($post),
            'nomeUsuarioA2'       => $this->manipularNomeUsuarioA2($post),
            'nomeUsuarioDigitado' => $this->manipularNomeUsuarioDigitado($post),
            'telefone'            => $this->manipularTelefone($post),
            'modulo'              => $this->manipularModulo($post)
        );

        $viewModel = new ViewModel($retorno);

        return $viewModel;
    }


    private function manipularNomeEmpresa(array $data)
    {
        if(isset($data['empresa'])):
            return $data['empresa'];
        else:
            return "Não identificado";
        endif;
    }
    private function manipularNomeUsuarioA2(array $data)
    {
        if(isset($data['nomeUsuarioA2'])):
            return $data['nomeUsuarioA2'];
        else:
            return "Usuario : Não identificado";
        endif;
    }

    private function manipularNomeUsuarioDigitado(array $data)
    {
        if(isset($data['nomeUsuarioDigitado'])):
            return $data['nomeUsuarioDigitado'];
        else:
            return "Usuario digitado : Não identificado";
        endif;
    }

    private function manipularTelefone(array $data)
    {
        if(isset($data['telefone'])):
            return $data['telefone'];
        else:
            return "Telefone : Não identificado";
        endif;
    }
    private function manipularModulo(array $data)
    {
        if(isset($data['modulo'])):
            return $data['modulo'];
        else:
            return "Modulo : Não identificado";
        endif;
    }
}
