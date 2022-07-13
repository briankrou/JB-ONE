<?php
/**
 * Created by PhpStorm.
 * User: Javier Crowley
 * Date: 7/30/2017
 * Time: 10:45 p.m.
 */

class Mail
{
    private $nombre;
    private $email;
    private $mensaje;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * @param mixed $mensaje
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function enviar()
    {
        $email_a = "javiergv1024@gmail.com";
        /*Asunto del correo electrónico*/
        $email_sujeto = "Mensaje de página web Máster Color JF";

        $email_mensaje = "Nombre: " . $this->nombre . "\n";
        $email_mensaje .= "Email: " . $this->email . "\n";
        $email_mensaje .= "Mensaje: " . $this->mensaje;
        $email_mensaje .= "Mensaje: " . $this->telefono;

        $headers = "De: ". $this->email . "\r\n" . "Responder a: ". $this->email . "\r\n" . 'X-Mailer: PHP/' . phpversion();

        mail($email_a, $email_sujeto, $email_mensaje, $headers);
    }

}