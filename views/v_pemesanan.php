<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    <b>INPUT NAMA PELANGGAN</b>
			  </div>

			  <div class="card-body">
			   <form action="<?php echo base_url('c_pemesanan/inputPelanggan')  ?>" method="POST">
   					<div class="form-group">
	      				<label for="nama">Nama Pelanggan</label>
					      <input type="text" name="nama" class="form-control" id="nama">
					      <small class="form-text text-danger"><?= form_error('nama'); ?></small>
				    </div>
				     <button type="submit" class="btn btn-primary float-right">Input</button>
				</form>
			  </div>
			</div>
		</div>
	</div>

</div>