<?php $this->load->view('admin/components/header_view');?>

<div class="page-content">
	<div class="row">
		<div class="col-md-2">
			<?php $this->load->view('admin/components/left_view');?>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Kateqoriyalar</div>
							
							<div class="panel-options">
							</div>
						</div>
		  				<div class="panel-body">
		  					<table class="table table-striped">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>Kateqoriya Adı</th>
				                </tr>
				              </thead>
				              <tbody>
							  	<tr>
				                  <td>1</td>
				                  <td>Tv LG LED</td>
				                </tr>
								<tr>
				                  <td>2</td>
				                  <td>Tv Samsung LED</td>
				                </tr>
				              </tbody>
				            </table>
		  				</div>
		  			</div>			
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">

					<div class="content-box-header">
						<div class="panel-title">Kateqoriya əlavə et</div>
						
						<div class="panel-options">
						</div>
					</div>
					<div class="content-box-large box-with-header">
						<form class="form-inline" role="form">
						
							<fieldset>
								<div class="form-group col-sm-6">
									<label class="sr-only" for="exampleInputEmail2"></label>
									<input type="category_name" class="form-control" id="exampleInputEmail2" placeholder="Kateqoriya Adı">
								</div>
								<button type="submit" class="btn btn-primary">
									Əlavə et
								</button>
							</fieldset>
							
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php 
//$this->load->view('admin/components/footer_view');
?>