<?php

require_once __DIR__.'/vendor/autoload.php';

use App\Canais\Email;
use App\Canais\SMS;
use App\Mensageiro;

$enviaEmail = new Mensageiro(new Email);
$enviaSMS = new Mensageiro(new SMS);

print_r($enviaEmail->enviar());
print_r($enviaSMS->enviar());