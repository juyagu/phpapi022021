<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

class ClienteGoogle
{
    function getDatosCliente()
    {
        $access_token = $_SESSION['token'];
        $url = 'https://www.googleapis.com/gmail/v1/users/me/profile';
        $info = gService(0, "https://www.googleapis.com/gmail/v1/users/me/profile", array("Authorization: Bearer $access_token"), 0);
        return $info;
    }
    function sendMessage($service, $userId, $message) {
        try {
          $mensaje = new Google_Service_Gmail_Message();
          $mensaje->setRaw($message);
          $envio = $service->users_messages->send($userId, $mensaje);
          //print 'Message with ID: ' . $envio->getId() . ' sent.';
          return $envio->getId();
        } catch (Exception $e) {
          print 'An error occurred: ' . $e->getMessage();
        }
      }
}
