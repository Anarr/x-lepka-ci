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
							<div class="panel-title">Haqqımızda</div>
							
							<div class="panel-options">
							</div>
						</div>
						<div class="panel-body">
							<form action="">
								<fieldset>
									<div class="form-group">
										<label>Başlıq</label>
										<input class="form-control" placeholder="Başlıq" type="text">
									</div>
									<div class="form-group">
										<label>Haqqımızda</label>
										<textarea class="form-control" placeholder="Haqqımızda" rows="3"></textarea>
									</div>
								</fieldset>
								<div>
									<div class="btn btn-primary">
										<i class="fa fa-save"></i>
										Yadda saxla
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
$this->load->view('admin/components/footer_view');
?>