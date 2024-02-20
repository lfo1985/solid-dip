<?php

namespace App;

use App\Interfaces\IMensagem;

class Mensageiro {

    private $canal;

    public function __construct(IMensagem $canal)
    {
        $this->canal = $canal;
    }

    public function enviar(){
        return $this->canal->enviar();
    }

}