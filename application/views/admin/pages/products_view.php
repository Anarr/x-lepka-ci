<?php $this->load->view('admin/components/header_view');?>

<div class="page-content">
	<div class="row">
		<div class="col-md-2">
			<?php $this->load->view('admin/components/left_view');?>
		</div>
		<div class="col-md-10">
			<form action="">
				<div class="row">
					<div class="col-md-12">
						<a href="products/add" class="btn btn-primary">
							Əlavə et
						</a>
					</div>
					<div class="col-md-1">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
$this->load->view('admin/components/footer_view');
?>