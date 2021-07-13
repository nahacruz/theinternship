<!DOCTYPE html>
<html>

 <?php require('php_mysql.php') ?>
<head>
	<meta charset="utf-8">
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'form.php'; 

	  $users = $mysqli_connection->query("SELECT users.ID,users.NAME,users.PHONE_NUMBER,users.EMAIL_ADDRESS,districts.NAME AS district_name FROM users,districts WHERE users.DISTRICT_ID = districts.ID");

	?>

    <main class="py-4">
        <div class="container">

        	<h2>List of Users</h2>
        	<hr>

        	<table class="table table-striped table-hover">
        		<thead>
        			<th>ID</th>
        			<th>NAME</th>
        			<th>PHONE</th>
        			<th>EMAIL</th>
        			<th>DISTRICT OF ORIGIN</th>
        		</thead>

        		<tbody>     			
        			
        		</tbody>
        	</table>


        </div>

    </main>
</body>
</html>