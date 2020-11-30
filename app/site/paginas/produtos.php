<?php
$resultDados = new Conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM produtos');
?>

<div class="text-center">
    <h5>PRODUTOS</h5>

    <div class="container">


        <div class="row">
            <?php foreach ($dados as $dadosProdutos) {
                $cont = 0; ?>

                <div class="col">
                    <div class="card my-3" style="width: 18rem;">
                        <img class="card-img-top" src="https://placehold.it/286x180" alt="Imagem de capa do card">
                        <div class="card-body">
                            <p class="card-text"> <?php echo $dadosProdutos['nome'] ?> <br> <?php echo $dadosProdutos['descricao'] ?> </p>
                            <h5 class="card-title"> <?php echo $dadosProdutos['preco'] ?> </h5>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>

                <?php $cont++; ?>
                <?php if ($cont == 2) { ?>
        </div>
        <div class="row">

        <?php $cont = 0;
                } ?>




    <?php } ?>
        </div>


    </div>


    <br><br><br><br>


</div>