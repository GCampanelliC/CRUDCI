    
	
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     

			<div class="col-md-12">
				   <?php echo form_open_multipart('dashboard/upload'); ?>
					<div class="help-block with-errors d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	  				<h1 class="h2"> <i class="bi bi-person-plus"></i> Novo Aluno</h1>
	  				<h1 class="h2"></h1>
      				</div>

					
					<div class="col-md-6">
						<div class="help-block with-errors form-group">
							<label for="nome">Nome</label>
							<input value="" type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required="true"> 
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="endereco">Endereço</label>
							<input value="" type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereco"  required=""> 
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						<label for="foto">Escolha uma foto de Perfil:</label>
						<br>
						
						<input value="" type="file" id="foto" name="foto" accept="image/png, image/jpeg, image/jpg" required="true">
					  
					</div>
					</div>
					
                    

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url()?>dashboard" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					
				</form>
			</div>

    </main>
  </div>
</div>
<br>