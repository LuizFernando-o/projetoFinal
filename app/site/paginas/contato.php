<div class="container-fluid">
    <br><br>
    <h1 class="text-center text-light font-weight-bold display-4">Contato</h1>
    <br>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="?pg=cad_mensagem" method="POST">
                <div class="form-group w-100">
                    <label for="nome">Nome:</label>
                    <input required type="text" class="form-control" name="nome" id="nome" placeholder="ex.: Luiz Fernando Leite">
                </div>
                <div class="form-group w-100">
                    <label for="email">Email:</label>
                    <input required type="email" class="form-control" name="email" id="email" placeholder="ex.: example@mail.com">
                </div>
                <!-- <><><><><><><><><><><><><><><><><><><><><><><> -->
                <div class="text-center">

                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" name="cat" id="option1" autocomplete="off" value="elogios" checked> Elogios
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="cat" id="option2" autocomplete="off" value="vendas"> Vendas
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="cat" id="option3" autocomplete="off" value="reclamacoes"> Reclamações
                        </label>
                    </div>

                </div>
                <!-- <><><><><><><><><><><><><><><><><><><><><><><> -->
                <div class="form-group w-100">
                    <label for="msg">Mensagem:</label>
                    <textarea required type="text" class="form-control" name="msg" id="msg" placeholder="Digite sua mensagem aqui!" rows="4" cols="40"></textarea>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-success w-25">Enviar  <span class="luiz-compass"></span> </button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
    <br><br><br><br><br>