<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Request
{
private $_Controlador;
private $_metodo;
private $_argumentos;

public function __construct() {
    if(isset($_GET['url'])){
        $url = filter_input (INPUT_GET, 'url', FILTER_SANITIZE_URL);
        $url = explode('/' , $url);
        $url = array_filter($url);
    }
    
    $this->_Controlador = array_shift($url);
    $this->_metodo = array_shift($url);
    $this->_argumentos = ($url);
    
    if (!$this->_Controlador){
        $this->_Controlador = DEFAULT_CONTROLLER;
        
        
    }
    
    if(!$this->_metodo){
        $this->_metodo = 'index';
    }
    
    if (!isset($this->_argumentos)){
         $this->_Controlador = array();
    }

}
public function getControlador()
        {
    return $this->_Controlador;
        }
        public function getmetodo()
        {
    return $this->_metodo;
}
public function getArgs()
        {
    return $this->_argumentos;
    {
        
    }
}
}

?>