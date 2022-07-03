<?php require_once 'php_action/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>PHP CRUD</title>

	<style type="text/css">
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}


		#hello {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 40px;
            background: red;
        }

	</style>


<meta charset="utf-8">
<title>School Educational Free HTML5 Website Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="/LIBRARY%20MANAGEMENT%20SYSTEM/library/index.php">Home</a></li> 
						<li><a href="/LIBRARY%20MANAGEMENT%20SYSTEM/library/ADD/index">Add Book</a></li>
						<li><a href="/LIBRARY%20MANAGEMENT%20SYSTEM/library/ADD/index">Remove Book</a></li>
                        <li class="active"><a href="/LIBRARY%20MANAGEMENT%20SYSTEM/library/ISSUE/PHP_CRUD/index">Issue Book</a></li>
                        <li><a href="/LIBRARY%20MANAGEMENT%20SYSTEM/library/MEMBERSHIP/PHP_CRUD/index">Membership</a></li>
                        <li><a href="/LIBRARY%20MANAGEMENT%20SYSTEM/admin/">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
   
   <div class="manageMember">
	<a href="create.php"><button type="button" class="btn btn-primary">Add Member</button></a>
	<table class="table table-dark">
		<thead>
			<tr>
				<th>Name</th>
				<th>Book name</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM issue WHERE active = 1";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['fname']." ".$row['lname']."</td>
						<td>".$row['bookname']."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'><button type='button' class='btn btn-primary'>Edit</button></a>
							<a href='remove.php?id=".$row['id']."'><button type='button' class='btn btn-primary'>Remove</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>

<div id="hello">
	<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
                  </div>
	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>