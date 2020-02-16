<!doctype html>
<html lang="en">
<head>
	<title>Article</title>
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
								<div>Articles
								</div>
							</div>    
						</div>
					</div> 
					<a class="btn btn-lg btn-info mb-3" href="add_article.php"><i class="fas fa-plus icon-gradient bg-asteroid"></i></a>
						<div class="main-card mb-3 card">
							<div class="card-body"><h5 class="card-title">Articles List</h5>
								<table id="table_id" class="display">
							    <thead>
						        <tr>
					            <th style="width: 20px">No</th>
					            <th>Title</th>
					            <th>Category</th>
					            <th>Author</th>
					            <th>Upload Date</th>
					            <th>Action</th>
						        </tr>
							    </thead>
							    <tbody>
							    	<?php 
							    	$no = 1;
							    	$no1 = 1;
							    	$no2 = 1;
							    	$no3 = 1;
							    	$no4 = 2100;
							    	for ($i=0; $i < 100; $i++) { 
							    	?>
							    	<tr>
							    		<td class="text-center"><?= $no++ ?></td>
							    		<td>Title <?= $no1++ ?></td>
							    		<td><p class="badge badge-success">Category <?= $no2++ ?></p></td>
							    		<td>Author<?= $no3++ ?></td>
							    		<td>01 - 01 - <?= $no4-- ?></td>
							    		<td>
							    			<a href="" class="btn btn-sm btn-warning"><i class="fas fa-cog"></i></a>
							    			<a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
							    		</td>
							    	</tr>
							    	<?php
							    	}
							    	 ?>
							    </tbody>
								</table>
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
