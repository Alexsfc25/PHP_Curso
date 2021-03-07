<?php

interface Ordenador {

    public function encender();

    public function apagar();

    public function reiniciar();

    public function desfragmentar();

    public function detectarUSB();
}

class MSI implements Ordenador {

    public $modelo;

    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function apagar() {
        echo 'Apagando PC' . "<br/>";
    }

    public function desfragmentar() {
        echo 'Desfragmentando PC' . "<br/>";
    }

    public function detectarUSB() {
        echo 'Detectando USB' . "<br/>";
    }

    public function encender() {
        echo 'Encendiendo PC' . "<br/>";
    }

    public function reiniciar() {
        echo 'Reiniciando PC' . "<br/>";
    }

}

$pc = new MSI();
var_dump($pc);
$pc->setModelo('GF63');
echo $pc->getModelo() . "<br/>";
$pc->encender();
$pc->reiniciar();
$pc->detectarUSB();
$pc->desfragmentar();
$pc->apagar();
