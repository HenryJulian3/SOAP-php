<?php

// Clase que define el servicio SOAP
class HelloWorldService {

   /**
    * Función para devolver un mensaje de "Hola Mundo".
    * @param string $name Nombre del usuario.
    * @return string Mensaje de saludo.
    */
   public function sayHello($name) {
       return "Hola Mundo, $name!";
   }
}

// Crear el servidor SOAP
$options = [
    'uri' => 'http://localhost/soap'
];
$server = new SoapServer(null, $options);

// Establecer la clase que maneja las solicitudes
$server->setClass('HelloWorldService');

// Manejar la solicitud SOAP
$server->handle();
