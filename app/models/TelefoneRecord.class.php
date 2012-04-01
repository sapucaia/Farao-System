<?php

class TelefoneRecord extends ManipulaBanco {

    private $telefones;

    public function cadastrar($telefone) {
        $dados['tipo'] = $telefone->getTipo();
        $dados['ddd'] = $telefone->getDdd();
        $dados['numero'] = $telefone->getNumero();
        return $this->salvar($dados);
    }

    public function listar() {
        $criteria = new TCriteria();
        $t = $this->selecionarColecao($criteria);

        for ($i = 1; $i <= count($t['IDTELEFONE']); $i++) {
            $this->telefones[$i] = new Telefone($t['IDTELEFONE'][1],
                            $t['TIPO'][1],
                            $t['DDD'][1],
                            $t['NUMERO'][1]);
        }
        return $this->telefones;
    }

    public function getTelefone($idTelefone) {
        $criteria = new TCriteria();
        $criteria->add(new TFilter('idTelefone', '=', $idTelefone));
        $t = $this->selecionarColecao($criteria);
        $telefone = new Telefone($t['IDTELEFONE'][1],
                        $t['TIPO'][1],
                        $t['DDD'][1],
                        $t['NUMERO'][1]);
        return $telefone;
    }

}

?>
