<?php

App::uses('Sanitize', 'Utility');
App::uses('Proceso', 'Model');
App::uses('User', 'Model');
App::uses('Mensaje', 'Mail.Model');

class EnviarMensajesShell extends AppShell {

    public $uses = array('Proceso');

    public function main() {
        $this->enviar_mensajes();
    }

    private function enviar_mensajes() {
        
        //busco mensajes pendientes de envio.
        $mensaje = new Mensaje();     
        $mensajes_pendientes = $mensaje->getMensajesPendientes();
        
        //recorro mensajes y envío.
        foreach($mensajes_pendientes as $mensaje_pendiente){            
            $mensaje->enviar($mensaje_pendiente);              
        }
        
    }

}
