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
class EnderecosRecord extends ManipulaBanco {

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
        $dados['idEndereco'] = $endereco['idEndereco'];
        $dados['logradouro'] = $endereco['logradouro'];
        $dados['fkIdTipoLogradouro'] = $endereco['fkIdTipoLogradouro'];
        $dados['bairro'] = $endereco['bairro'];
        $dados['cep'] = $endereco['cep'];
        $dados['complemento'] = $endereco['complemento'];
        $dados['fkIdCidade'] = $endereco['fkIdCidade'];
        return $this->cadastrar($endereco);
    }

}

?>
