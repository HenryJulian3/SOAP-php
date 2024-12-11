<?php

// Definición de la información básica de la API con @OA\Info
/**
 * @OA\Info(title="SOAP Hello World", version="1.0.0")
 */

// Definir el servicio SOAP con las anotaciones necesarias
/**
 * @OA\PathItem(
 *     path="/soap_hello"
 * )
 */
class HelloWorldService {
    /**
     * @OA\Operation(
     *     summary="Say Hello",
     *     operationId="sayHello",
     *     @OA\Parameter(
     *         name="name",
     *         in="query",
     *         description="Your name",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Returns a greeting message"
     *     )
     * )
     */
    public function sayHello($name) {
        return "Hola Mundo, $name!";
    }
}
