<?php $this->load->view('admin/components/header_view');?>

<div class="page-content">
	<div class="row">
		<div class="col-md-2">
			<?php $this->load->view('admin/components/left_view');?>
		</div>
		<div class="col-md-10">
			<!-- <form action=""> -->
				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
							<div class="panel-heading">
								<div class="panel-title">Məhsullar</div>
								
								<div class="panel-options">
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Ad</th>
										<th>Kateqoriya</th>
										<th>Dəyiş</th>
										<th>Sil</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($products as $index => $product):?>
									<tr>
										<td><?=++$index;?></td>
										<td><?=$product->title?></td>
										<td><?=$product->name;?></td>
										<td>
											<a href="<?=base_url() . 'xadmin/products/'.$product->id.'/edit';?>" class="btn btn-primary">
												Dəyiş
											</a>
										</td>
										<td>
											<a href="<?=base_url() . 'xadmin/products/'.$product->id.'/remove';?>"class="btn btn-danger" onclick="if(confirm('Kateqoriya və məhsulları silinsin?')){window.location = ''}">
												Sil
											</a>
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
					<div class="col-md-12">
						<a href="products/add" class="btn btn-primary">
							Əlavə et
						</a>
					</div>
					<div class="col-md-1">
					</div>
				</div>
			<!-- </form> -->
		</div>
	</div>
</div>
<?php 
$this->load->view('admin/components/footer_view');
?>