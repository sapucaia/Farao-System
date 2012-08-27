<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class RepresentanteRecord extends ManipulaBanco {

    private $representantes;

    public function listar() {
        $criteria = new TCriteria();
        $r = $this->selecionarColecao($criteria);

        for ($i = 1; $i <= count($r['IDREPRESENTANTE']); $i++) {
            $this->representantes[$i] = new Representante($r['IDREPRESENTANTE'][$i],
                            $r['NOMEREPRESENTANTE'][$i],
                            $r['EMAIL'][$i]);
        }

        return $this->representantes;
    }

    public function selecionarRepresentantePorId($idRepresentante) {
        $criteria = new TCriteria();
        $criteria->add(new TFilter('idrepresentante', '=', $idRepresentante));
        $r = $this->selecionarColecao($criteria);
        $representante = new Representante($r['IDREPRESENTANTE'][1],
                        $r['NOMEREPRESENTANTE'][1],
                        $r['EMAIL'][1]);

        return $representante;
    }

    public function selecionarRepresentantePorNome($nomeRepresentante) {
        $criteria = new TCriteria();
        $criteria->add(new TFilter('nomerepresentante', 'LIKE', $nomeRepresentante));
        $r = $this->selecionarColecao($criteria);
        for ($i = 1; $i <= count($r['IDREPRESENTANTE']); $i++) {
            $this->representantes[$i] = new Representante($r['IDREPRESENTANTE'][$i],
                            $r['NOMEREPRESENTANTE'][$i],
                            $r['EMAIL'][$i]);
        }

        return $this->representantes;
    }

    public function selecionarRepresentantePorEmail($email) {
        $criteria = new TCriteria();
        $criteria->add(new TFilter('email', 'LIKE', $email));
        $r = $this->selecionarColecao($criteria);
        for ($i = 1; $i <= count($r['IDREPRESENTANTE']); $i++) {
            $this->representantes[$i] = new Representante($r['IDREPRESENTANTE'][$i],
                            $r['NOMEREPRESENTANTE'][$i],
                            $r['EMAIL'][$i]);
        }

        return $this->representantes;
    }

    public function cadastrar($representante) {
        $dados['nomeRepresentante'] = $representante->getNomeRepresentante();
        $dados['email'] = $representante->getEmail();

        return $this->salvar($dados);
    }

    public function editar($representante) {
        $dados['nomeRepresentante'] = $representante->getNomeRepresentante();
        $dados['email'] = $representante->getEmail();
        
        return $this->atualizar($dados, $representante->getIdRepresentante());
    }

}

?>
