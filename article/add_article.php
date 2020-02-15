<!doctype html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<?php include '/var/www/html/project/CMSAdminDashboard/tmp/link.php'; ?>
</head>
<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
		<?php 
			include '/var/www/html/project/CMSAdminDashboard/tmp/header.php'; 
			include '/var/www/html/project/CMSAdminDashboard/tmp/themeSettings.php';
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
												<label for="exampleEmail11" class="">Title</label>
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-tag"></i></span></div>
													<input placeholder="title here..." type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="position-relative form-group">
												<label for="exampleEmail11" class="">Category</label>
												<div class="input-group p-2">
													<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-database"></i></span></div>
													<select class="category-select2 py-1">
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
										<div class="col-md-8">
											<label>Date</label>
											<div class="input-group date" data-provide="datepicker">
											  <input type="text" class="form-control">
											  <div class="input-group-addon">
											    <span class="glyphicon glyphicon-th"></span>
											  </div>
											</div>
										</div>
										<div class="col-md-4">
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
