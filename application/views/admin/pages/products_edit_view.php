<?php $this->load->view('admin/components/header_view');?>

<div class="page-content">
	<div class="row">
		<div class="col-md-2">
			<?php $this->load->view('admin/components/left_view');?>
		</div>
		<div class="col-md-10">
		<?php echo validation_errors(); ?>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-12">
						<fieldset>
							<div>
								<h4>Kateqoriya seç</h4>
								<p>
									<select class="selectpicker" name="category_id">
									<?php foreach($categories as $category):?>
										<?php
											$selected = '';
											if ($product->category_id == $category->id) {
												$selected = 'selected';
											}
										?>
										<option value="<?=$category->id;?>" <?=$selected;?>><?=$category->name;?></option>
									<?php endforeach;?>									
									</select>
								</p>
							</div>
						</fieldset>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-2 control-label" for="text-field">Məhsul adı</label>
								<div class="col-md-10">
									<input class="form-control" placeholder="Məhsul adı" type="text" value="<?=$product->title;?>" name="title">
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6" style="text-align: center;">
							<img src="<?=base_url(). 'uploads/products/'.$product->photo;?>" alt="xudaferin lepka product" style="height:150px;">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<!-- <fieldset> -->
								<div class="form-group">
									<label class="col-md-2 control-label">məhsul şəkili</label>
									<div class="col-md-10">
										<div class="row">
											<div class="col-sm-12">
												<div class="input-group">
													<input type="file" class="btn btn-default" id="exampleInputFile1" name="photo">
													<p class="help-block">
														məhsul şəkili seçin.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							<!-- </fieldset> -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">

							<div class="form-group">
								<label class="control-label col-md-2" for="appendprepend">Qiymət</label>
								<div class="col-md-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="input-group">
												<span class="input-group-addon">AZN</span>
												<input class="form-control" id="appendprepend" type="text" value="<?=$product->price;?>" name="price">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-2 control-label" for="textarea">Məhsul haqqında</label>
								<div class="col-md-10">
									<textarea name="description" class="form-control" placeholder="Məhsul haqqında" rows="4"><?=$product->description;?></textarea>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-2 control-label">Əsas Sehifədə görünsün</label>
								<div class="col-md-10">
									<label class="checkbox-inline">
										<input type="checkbox" <?=$product->checked;?> name="show_home_page">
										İşarələ
									</label>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-2 control-label">Hal hazırda:</label>
								<div class="col-md-10">
									<label class="checkbox-inline">
										<input type="radio" name="in_stock" value="0" <?php if($product->in_stock==0):?>checked<?php endif;?>>
										Anbarda
									</label>
									<label class="checkbox-inline">
										<input type="radio" name="in_stock" value="1" <?php if($product->in_stock==1):?>checked<?php endif;?>>
										Sifarişlə
									</label>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="form-actions">
								<!-- <div class="row"> -->
									<div class="col-md-12">
										<button class="btn btn-primary" type="submit" style="float: left;">
											<i class="fa fa-save"></i>
											Yadda saxla
										</button>
									</div>
								<!-- </div> -->
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