

/*
* To change this template, choose Tools | Templates
* and open the template in the editor.
*/

<form action='../controllers/FornecedorController.class.php?acao=cadastrarFornecedor' method='post' name='fornecedorAdd'>
    <input type="text" name="[fornecedor][razaoSocial]"/>
    <input type="text" name="[fornecedor][nomeFantasia]"/>
    <input type="text" name="[fornecedor][cnpj]"/>
    <input type="text" name="[endereco][logradouro]"/>
    <input type="text" name="[endereco][bairro]"/>
    <input type="text" name="[endereco][cep]"/>
    <input type="text" name="[endereco][complemento]"/>
    <!--add apenas um endereco, atualizacaoes posteriores p\ varios enderecos!!!!! -->





    <input type='submit' value='OK'/>
</form>
