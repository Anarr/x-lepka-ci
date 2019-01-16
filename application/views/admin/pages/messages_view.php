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
											<th>Nömrə</th>
											<th>Mesaj</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mahmud</td>
											<td>Pirmemmedov</td>
											<td style="max-width: 400px;">
												<p style="height: 100px;max-width: 400px; overflow-y: scroll;padding:5px 10px;">
													Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id culpa vel accusamus veniam sint reprehenderit iste optio quas ab quo laudantium ipsum quae adipisci blanditiis dicta reiciendis corrupti, asperiores iure!
												</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-12">
						<a href="products/add" class="btn btn-primary">
							Əlavə et
						</a>
					</div>
					<div class="col-md-1">
					</div>
				</div> -->
			<!-- </form> -->
		</div>
	</div>
</div>
<?php 
$this->load->view('admin/components/footer_view');
?>