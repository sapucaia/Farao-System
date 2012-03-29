<?php

/*
 * @ Caique Pires
 * 
 */

class Representante{
    
    private $idRepresentante;
    private $nomeRepresentante;
    private $email;
    
    public function __construct($idRepresentante = '', $nomeRepresentante = '', $email = '') {
        $this->idRepresentante = $idRepresentante;
        $this->nomeRepresentante = $nomeRepresentante;
        $this->email = $email;
    }
    
    public function getIdRepresentante() {
        return $this->idRepresentante;
    }

    public function setIdRepresentante($idRepresentante) {
        $this->idRepresentante = $idRepresentante;
    }

    public function getNomeRepresentante() {
        return $this->nomeRepresentante;
    }

    public function setNomeRepresentante($nomeRepresentante) {
        $this->nomeRepresentante = $nomeRepresentante;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


}

?>
