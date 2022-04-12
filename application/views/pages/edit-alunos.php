    
	
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     

			<div class="col-md-12">
					<?php echo form_open_multipart('dashboard/update/'.$alunos['id']); ?>	   
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	  				<h1 class="h2"> <i class="bi bi-person-plus"></i> Editar Aluno</h1>
	  				<h1 class="h2"></h1>
      				</div>

					
					<div class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="hidden" name="captcha">
							<input type="hidden" name="id_usuario" value="<?php echo $alunos['id'];?>">
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"  value="<?php echo $alunos["nome"]?>" > 
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="endereco">Endereço</label>
							<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereco"  required value="<?php echo $alunos["endereco"]?>"> 
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						<label for="foto">Escolha uma foto de Perfil:</label>
						<br>
						
						<input type="file" id="foto" name="foto" accept="image/png, image/jpeg, image/jpg" value="">
					  
					</div>
					</div>
					


					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url()?>dashboard" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
<br>