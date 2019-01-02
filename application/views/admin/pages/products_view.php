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
						<fieldset>
							<div>
								<h4>Kateqoriya seç</h4>
								<p>
									<select class="selectpicker">
										<option>TV</option>
										<option>Lepka</option>
									</select>
								</p>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-2 control-label" for="text-field">Məhsul adı</label>
							<div class="col-md-10">
								<input class="form-control" placeholder="Məhsul adı" type="text">
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- <fieldset> -->
							<div class="form-group">
								<label class="col-md-2 control-label">məhsul şəkili</label>
								<div class="col-md-10">
									<input type="file" class="btn btn-default" id="exampleInputFile1">
									<p class="help-block">
										məhsul şəkili seçin.
									</p>
								</div>
							</div>
						<!-- </fieldset> -->
					</div>
					<div class="col-md-6">

						<div class="form-group">
							<label class="control-label col-md-2" for="appendprepend">Qiymət</label>
							<div class="col-md-10">
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group">
											<span class="input-group-addon">AZN</span>
											<input class="form-control" id="appendprepend" type="text">
											<span class="input-group-addon">.00</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-11">
						<div class="form-actions">
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-primary" type="submit" style="float: right;">
										<i class="fa fa-save"></i>
										Yadda saxla
									</button>
								</div>
							</div>
						</div>
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