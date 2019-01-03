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
							<form action="" method="POST">
								<fieldset>
									<div class="form-group">
										<label>Başlıq</label>
										<input class="form-control" placeholder="Başlıq" type="text" value="<?=$pageInfo[0]->title;?>" name="title">
									</div>
									<div class="form-group">
										<label>Haqqımızda</label>
										<textarea class="form-control" placeholder="Haqqımızda" rows="3" name="description"><?=$pageInfo[0]->description;?></textarea>
									</div>
								</fieldset>
								<div>
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-save"></i>
										Yadda saxla
									</button>
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