


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"> <i class="bi bi-journal-bookmark-fill"></i>Dashboard</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url() ?>dashboard/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Aluno</a>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2"> <i class="bi bi-pencil"></i> Alunos</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Endereço</th>
          <th>Detalhes</th>
          <th>Ações</th>
          
			</thead>
			<tbody>
        <?php foreach($alunos as $aluno): ?>
        <tr>
          <td> <?= $aluno['id'] ?></td>
          <td> <?= $aluno['nome'] ?></td>
          <td> <?= $aluno['endereco'] ?></td>
         
          <td>

        <a href="<?=base_url()?>dashboard/visualizar/<?=$aluno['id']?>" type="button" class="btn btn-outline-primary">Visualizar</a>           
       
        
          </td>
           
        
          <td>
                <a href="<?= base_url()?>dashboard/edit/<?=$aluno['id']?>" class="btn btn primary btn-sm btn-warning" ><i class="fa fa-pencil"></i></a>
                <a href="javascript:goDelete(<?=$aluno['id']?>)" class="btn btn primary btn-sm btn-danger" "><i class="fa fa-trash"></i></a>
                        
          </td>
         
        </tr>
          <?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>

<script>
      function goDelete(id){
        var url = "dashboard/delete/"+id;

        if(confirm("Tem certeza que deseja apagar esse item?")){
            window.location.href = url;
        
          }else{

            alert("Registro não alterado.");
            return false;
        }
    }


   

  $('#myModal').modal({backdrop:'static',keyboard:false});

</script>

