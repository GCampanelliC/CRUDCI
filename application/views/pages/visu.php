<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"> </i>Informações</h1>
        </div>


        <div class="form-group">

            <div class="col-md-8">

                <h1>Nome: <?= $alunos['nome'] ?></h1>

            </div>

            <div class="col-md-12">

           <img src="<?php echo base_url().$alunos['foto']?>" width="400px" height="400px"><img>

            </div>

            <div class="col-md-8">

                <h5>Endereço: <?= $alunos['endereco'] ?></h5>

            </div>

           
        </div>


        <div class="col-md-12 style=" style="padding: 20px;">
            <a href="<?= base_url() ?>dashboard" class="btn btn-success btn-xs"> Voltar ao Dashboard</a>
           
        </div>
    </div>
    <main>