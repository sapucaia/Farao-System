<?php

class RepresentanteTelefoneRecord extends ManipulaBanco {

    public function cadastrar($dados) {
        return $this->salvar($dados);
    }
    
    

    public function selecionarTelefonesPorRepresentante($idRepresentante) {
        $criteria = new TCriteria();
        $criteria->add(new TFilter('fkidrepresentante', '=', $idRepresentante));
        $c = $this->selecionarColecao($criteria);
        for ($i = 1; $i <= count($c['FKIDREPRESENTANTE']); $i++) {
            $telefonesRecord = new TelefoneRecord();
            $t = $telefonesRecord->getTelefone($c['FKIDTELEFONE'][$i]);
            $telefoneRepresentante[$i] = $t;
        }
        return $telefoneRepresentante;
    }

}

?>