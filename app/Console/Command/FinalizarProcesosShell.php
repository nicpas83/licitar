<?php

class FinalizarProcesosShell extends AppShell {

    public $uses = array('Proceso', 'Mail.Mensaje', 'User');

    public function main() {
        
        $this->finalizar_procesos();
    }

    private function finalizar_procesos() {
        (new Proceso())->updateAll(['Proceso.estado' => "'Finalizado'"], ['fecha_fin' => date('Y-m-d'), 'Proceso.estado' => 'Activo']);

        //busco los usuarios a los que hay que enviar mail.
        $usuarioIds = (new Proceso())->find('list', [
            'fields' => ['user_id'],
            'conditions' => ['fecha_fin' => date('Y-m-d'), 'estado' => 'Finalizado']
        ]);

        $usuarios = (new User())->find('all', [
            'conditions' => ['User.id' => $usuarioIds],
            'recursive' => -1
        ]);

        //recorro usuarios y envio mensaje en cola..
        $mensaje = new Mensaje();
        $tipo_mensaje = "Compra Finalizada";
        $asunto = "Proceso de Compra Finalizado. Conocé los resultados aquí.";
        $url = FULL_BASE_URL . "/mis_compras_finalizadas/";

        foreach ($usuarios as $usuario) {
            $user_id = $usuario['User']['id'];
            $hash = md5("UserHash-" . $user_id);

            $cuerpo = "<h3>Hola " . $usuario['User']['username'] . " </h3>";
            $cuerpo .= "<p>Para consultar tus compras finalizadas entrá en el siguiente enlace. </p>";
            $cuerpo .= "</br>";
            $cuerpo .= "<a href='" . $url . $hash . "' target='_blank'>" . $url . "</a>";
            $cuerpo .= "</br>";
            $cuerpo .= "<p>Saludos! </p>";
            $cuerpo .= "<p>Wadaboo.com </p>";

            $destinatario = $usuario['User']['email'];

            $mensaje->encolar($tipo_mensaje, $asunto, $cuerpo, $destinatario, $user_id);
        }
    }

}
