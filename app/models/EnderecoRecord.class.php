<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnderecoRecord
 *
 * @author wallace
 */
class EnderecoRecord extends ManipulaBanco {

    private $enderecos;

    public function listar() {
        $criteria = new TCriteria;
        $aux = $this->selecionarColecao($criteria);

        for ($i = 1; $i <= count($aux['IDENDERECO']); $i++) {
            $this->enderecos[$i] = new Enderecos($aux['IDENDERECO'][$i],
                            $aux['LOGRADOURO'][$i],
                            $aux['FKIDTIPOLOGRADOURO'][$i],
                            $aux['BAIRRO'][$i],
                            $aux['CEP'][$i],
                            $aux['COMPLEMENTO'][$i],
                            $aux['FKIDCIDADE'][$i]);
        }
        return $this->enderecos;
    }

    public function cadastrar($endereco) {

        $dados['logradouro'] = $endereco->getLogradouro();
        $dados['fkIdTipoLogradouro'] = $endereco->getFkIdTipoLogradouro();
        $dados['bairro'] = $endereco->getBairro();
        $dados['cep'] = $endereco->getCep();
        $dados['complemento'] = $endereco->getComplemento();
        $dados['fkIdCidade'] = $endereco->getFkIdCidade();
        return $this->salvar($dados);
    }

    public function getEndereco($idEndereco) {
        $criteria = new TCriteria();
        $criteria->add(new TFilter('idEndereco', '=', $idEndereco));
        $e = $this->selecionarColecao($criteria);
        $endereco = new Endereco($e['IDENDERECO'][1],
                        $e['LOGRADOURO'][1],
                        $e['FKIDTIPOLOGRADOURO'][1],
                        $e['BAIRRO'][1],
                        $e['CEP'][1],
                        $e['COMPLEMENTO'][1],
                        $e['FKIDCIDADE'][1]);
        return $endereco;
    }

}

?>
