<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>View Your Courses</title>
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    	<link href="<?php echo base_url(); ?>css/bespoke.css" rel="stylesheet">
	</head>
	<body>
		<?php
			include 'nav.php';
		?>
		<div class="container">
	      <div class="page-header">
	        <h2>View Your Courses</h2>
	      </div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!--PULL THE PAWPRINT OF THE TEACHER AND USE TO 
						PULL THE INFO FROM THE DATABASE ABOUT WHAT
						CLASS THE TEACHER IS TEACHING-->
                    <table class="table table-hover table-striped">
                    <thead>
                    	<tr>
                    		<th>Action</th>
                    		<th>Course Name</th>
                    		<th>Semester</th>
                    	</tr>
                    </thead>
                    <tbody>
				<?php
					if(isset($courses)) {
  				   	foreach ($courses as $row) {
						echo '<tr>';
		         		echo '<td>';
		         		echo'<form action = "'.base_url().'index.php/preferenceByCourseController/index/'.$row->course_id.'">';
						echo '<button class="btn btn-default"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> View</button>';
					   	echo '</td>';
					    echo '<td>'.$row->course_name.'</td>';
					    echo '<td>'.$row->semester.'</td>';
	                    echo '</tr>';
	                    echo '</form>';
				    }
				   } else {
				   	echo '<p>You have no courses</p>';
				   }
				?>
					</tbody>
                    </table>
				</div><!--col-md-12-->
			</div><!--row-->
		</div><!--container-->
		
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	 <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	</body>
</html>