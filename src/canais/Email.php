<?php

namespace App\Canais;

use App\Interfaces\IMensagem;

class Email implements IMensagem {
    public function enviar(): string
    {
        return 'Envio de mensagem via E-mail!';
    }
}