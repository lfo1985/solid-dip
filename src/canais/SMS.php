<?php

namespace App\Canais;

use App\Interfaces\IMensagem;

class SMS implements IMensagem {
    public function enviar(): string
    {
        return 'Envio de mensagem via SMS!';
    }
}