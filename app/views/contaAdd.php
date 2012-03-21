<!--<form action='app/controllers/ClientesController.class.php?acao=cadastrar' method='post' name='clienteAdd'>
<input type='text' name='nomeCliente'/>
<input type='text' name='emailCliente'/>
<input type='submit' value='OK'/>
</form>-->



<form action='../controllers/ContaController.class.php?acao=cadastrarConta' method='post' name='contaAdd'>
    Data vencimento: <input type='text' name='dataVencimento'/><br/>    
    Data Pagamento:<input type='text' name='dataPagamento'/><br/>    
    Status:<input type='text' name='status'/><br/>    
    Descrição:<input type='text' name='descricao'/><br/>    
    Valor:<input type='text' name='valor'/><br/>    
    <input type='submit' value='OK'/>
</form>  