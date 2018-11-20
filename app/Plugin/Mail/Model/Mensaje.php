<?php

App::uses('AppModel', 'Model');
App::import('Lib', 'PHPMailer/PHPMailerAutoload');

class Mensaje extends AppModel {

    public $tablePrefix = 'mail_';
    public $useTable = 'mensajes';
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

        $this->create();
        $this->save($data);
    }

    public function getMensajesPendientes() {
        return $this->find('all', ['conditions' => ['estao' => 'Pendiente'], 'recursive' => -1]);
    }

    public function enviar($mensaje) {

        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.zoho.com';                        // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'mensajes@wadaboo.com';             // SMTP username
        $mail->Password = '$Mensajes16947';                   // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom('mensajes@wadaboo.com', 'Mailer');
        $mail->addAddress($mensaje['Mensaje']['destinatario']);     // Add a recipient Name is optional
        $mail->addReplyTo('mensajes@wadaboo.com', 'Consultas');

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $mensaje['Mensaje']['asunto'];
        $mail->Body = $mensaje['Mensaje']['cuerpo'];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) {
            echo 'El mensaje no pudo ser enviado.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Mensaje enviado exitosamente.';
        }
    }

}
