<?php
$resultDados = new Conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM produtos');
?>

<div class="text-center">
    <h5>PRODUTOS</h5>

    <div class="container">


        <div class="row">
            <?php foreach ($dados as $dadosProdutos) { ?>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://placehold.it/286x180" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $dadosProdutos['nome'] ?> </h5>
                            <p class="card-text"> <?php echo $dadosProdutos['descricao'] ?> <br> <?php echo $dadosProdutos['preco'] ?> </p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>



            <?php } ?>
        </div>


    </div>


    <br><br><br><br>


</div>