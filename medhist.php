<DOCTYPE html>
    <head>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

    
  
    
    



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> CareKonnect </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
       <a href="admin-panel.php"><button class="btn btn-primary" style="color:white;">Go Back</button></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  </head>
    <body>
    <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">File Name</th>
                    <th scope="col">blood</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Height</th>
                    <th scope="col">Report Date</th>
                  </tr>
                </thead>
                <tbody>
<?php
$con=mysqli_connect("localhost","root","","myhmsdb");
if(isset($_GET['id']))
	{
		$q = "SELECT * FROM med WHERE pid='".$_GET['id']."'";
        
//Check for connection error
    $result = $con->query($q);
while($row = $result->fetch_object()){
  $pdf = $row->FileName;
    $blood = $row->Blood;
    $weight = $row->Weight;
    $height = $row->Height;
    $rd=$row->report_date;
  $path='./report/';
  ?>
    <tr>
        <td><a href="<?php echo $path.$pdf; ?>" target="_blank"><?php echo $pdf;?></a></td>
        <td><?php echo $blood; ?></td>
        <td><?php echo $weight; ?></td>
        <td><?php echo $height; ?></td>
        <td><?php echo $rd; ?></td>
    </tr>
<!-- <iframe src="<?php echo $path.$pdf;?>" width="90%" height="500px">
</iframe> -->
  <?php
}

}
?>
<a href="admin-panel.php"><button class="btn btn-primary" style="color:white;">Go Back</button></a>
		
</body>
</html>