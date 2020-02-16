<!doctype html>
<html lang="en">
<head>
	<title>Article | Add</title>
	<?php include '/var/www/html/project/CMSAdminDashboard/tmp/link.php'; ?>
</head>
<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar">
		<?php 
			include '/var/www/html/project/CMSAdminDashboard/tmp/header.php'; 
		?>        
		<div class="app-main">
			<?php include '/var/www/html/project/CMSAdminDashboard/tmp/sidebar.php'; ?>
			<div class="app-main__outer">
				<div class="app-main__inner">
					<div class="app-page-title">
						<div class="page-title-wrapper">
							<div class="page-title-heading">
								<div class="page-title-icon">
									<i class="pe-7s-news-paper icon-gradient bg-mean-fruit">
									</i>
								</div>
								<div>Add Article
								</div>
							</div>    
						</div>
					</div> 
						<div class="main-card mb-3 card">
							<div class="card-body"><h5 class="card-title">Post Article</h5>
								<form class="" method="post" action="#">
									<div class="form-row">
										<div class="col-md-6">
											<div class="position-relative form-group">
												<label for="titled" class="">Title</label>
												<div class="input-group">
													<div class="input-group-prepend"><label for="titled" class="input-group-text"><i class="fas fa-tag"></i></label></div>
													<input placeholder="title here..." type="text" class="form-control" id="titled">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="position-relative form-group">
												<label for="categorid" class="">Category</label>
												<div class="input-group p-2">
													<div class="input-group-prepend"><label for="categorid" class="input-group-text"><i class="fas fa-database"></i></label></div>
													<select id="categorid" class="category-select2 py-1">
														<?php $x=1; for ($i=0; $i < 100; $i++) { ?>
															<option>Select2 <?= $x++ ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="position-relative form-group">
										<label for="exampleAddress" class="">Content <i class="fas fa-filter"></i></label>
										<form method="post">
										  <textarea id="summernote" name="editordata"></textarea>
										</form>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											<label for="datepicker">Date</label>
											<div class="input-group">
												<input type="text" id="datepicker" size="30" placeholder="Day, dd M, yyyy"></p>
												<div class="input-group-prepend"><label for="datepicker" class="input-group-text"><i class="fas fa-calendar"></i></label></div>
											</div>
										</div>
										<div class="col-md-6 text-center">
											<label>Upload Image</label>
											<div class="position-relative form-group">
												<div class="fileinput fileinput-new" data-provides="fileinput">
												  <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
												  <div>
												    <span class="btn btn-outline-secondary btn-file">
												      <span class="fileinput-new">Select image</span>
												      <span class="fileinput-exists">Change</span>
												      <input type="file" name="...">
												    </span>
												    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
												  </div>
												</div>
											</div>
										</div>
										<div class="col-md-12 text-center">
											<a class="btn btn-lg btn-shadow btn-warning" href="index.php"><i class="fas fa-angle-double-left"></i> BACK</a>
											<button type="submit" class="btn btn-lg btn-primary"> POST <i class="fas fa-paper-plane"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
				<?php include '/var/www/html/project/CMSAdminDashboard/tmp/footer.php'; ?>   
			</div>
			<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		</div>
	</div>
	<?php include '/var/www/html/project/CMSAdminDashboard/tmp/script.php';  ?>
</body>
</html>
