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
										<th>Kateqoriyanı Dəyiş</th>
										<th>Kateqoriyanı sil</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($categories as $index => $category):?>
									<tr>
										<td><?=++$index;?></td>
										<td><?=$category->name;?></td>
										<td>
											<form action="?<?=$index?>" method="GET">
												<button class="btn btn-primary">
													Dəyiş
												</button>
											</form>
										</td>
										<td>
											<button class="btn btn-danger" onclick="if(confirm('Kateqoriya və məhsulları silinsin?')){window.location = '?delete-id=<?=$index?>'}">
												Sil
											</button>
										</td>
									</tr>
								<?php endforeach;?>
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
						<form class="form-inline" role="form" method="POST">

							<fieldset>
								<div class="form-group col-sm-6">
									<label class="sr-only" for="exampleInputEmail2"></label>
									<input name="name" class="form-control" id="exampleInputEmail2" placeholder="Kateqoriya Adı">
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
$this->load->view('admin/components/footer_view');
?>