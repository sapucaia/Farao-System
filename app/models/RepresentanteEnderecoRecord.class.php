<?php

class RepresentanteEnderecoRecord extends Manipulabanco {

    public function cadastrar($dados) {
        return $this->salvar($dados);
    }

    public function selecionarEnderecosPorRepresentante($idRepresentante) {
        $criteria = new TCriteria();
        $criteria->add(new TFilter('fkidrepresentante', '=', $idRepresentante));
        $c = $this->selecionarColecao($criteria);
        for ($i = 1; $i <= count($c['FKIDREPRESENTANTE']); $i++) {
            $enderecosRecord = new EnderecoRecord();
            $e = $enderecosRecord->getEndereco($c['FKIDENDERECO'][$i]);
            
            $enderecoRepresentante[$i] = $e;
        }
        return $enderecoRepresentante;
    }

}

?>