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
    private $apellido
    private $email;
    private $telefono
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
        public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
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
        public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
        /**
     * @return mixed
     */
        public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * @param mixed $asunto
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
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
        $email_a = "jboneiformacion@jboneweb.com";
        /*Asunto del correo electrónico*/
        $email_sujeto = "Mensaje de página web jboneweb.com";

        $email_mensaje = "Nombre: " . $this->nombre . "\n";
        $email_mensaje = "Apellido: " . $this->apellido . "\n";
        $email_mensaje .= "Email: " . $this->email . "\n";
        $email_mensaje = "Telefono: " . $this->telefono . "\n";
        $email_mensaje = "Asunto: " . $this->asunto . "\n";
        $email_mensaje .= "Mensaje: " . $this->mensaje;

        $headers = "De: ". $this->email . "\r\n" . "Responder a: ". $this->email . "\r\n" . 'X-Mailer: PHP/' . phpversion();

        mail($email_a, $email_sujeto, $email_mensaje, $headers);
    }

}