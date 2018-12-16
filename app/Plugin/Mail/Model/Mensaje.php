<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once(ROOT . DS . 'vendors' . DS . 'autoload.php');

class Mensaje extends AppModel {

    public $tablePrefix = 'mail_';
    public $useTable = 'mensajes';
    public $plugin = 'Mail';
    public $belongsTo = array(
        'User' => [
            'className' => 'User',
            'foreignKey' => 'user_id'
        ],
    );

    public function encolar($tipo_mensaje, $asunto, $cuerpo, $destinatario, $user_id) {
        $data = [
            'Mensaje' => [
                'tipo_mensaje' => $tipo_mensaje,
                'asunto' => $asunto,
                'cuerpo' => $cuerpo,
                'destinatario' => $destinatario,
                'user_id' => $user_id,
                'estado' => 'Pendiente'
            ]
        ];
//        debug($data);die;

        $this->create();
        if ($this->save($data, ['callbacks' => false])) {
            return true;
        } else {
            return false;
        }
    }

    public function getMensajesPendientes() {
        return $this->find('all', ['conditions' => ['estado' => 'Pendiente'], 'recursive' => -1]);
    }

    public function enviar($mensaje) {

        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'mensajes@wadaboo.com';             // SMTP username
            $mail->Password = '$Mensajes16947';                   // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            //Recipients
            $mail->setFrom('mensajes@wadaboo.com', 'Wadaboo');
            $mail->addAddress($mensaje['Mensaje']['destinatario']);     // Add a recipient Name is optional
            $mail->addReplyTo('mensajes@wadaboo.com', 'Consultas');

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = $mensaje['Mensaje']['asunto'];
            $mail->Body = $mensaje['Mensaje']['cuerpo'];
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
            $this->updateAll([
                'Mensaje.estado' => "'Enviado'"
                    ], [
                'Mensaje.id' => $mensaje['Mensaje']['id'],
            ]);
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }

}
