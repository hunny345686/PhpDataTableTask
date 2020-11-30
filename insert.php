<?php 

	$mysql_hostname="localhost" ; 
	$mysql_user="root" ; 
	$mysql_password="" ; 
	$mysql_database="task" ;

    $con = mysqli_connect( $mysql_hostname, $mysql_user, $mysql_password, $mysql_database );

    if(isset($_POST['fname'])){

    	$fname= $_POST['fname'];
    	$lname= $_POST['lname'];
    	$email= $_POST['email'];
    	$gender = $_POST['gender'];
    	$dob = $_POST['dob'];
    }

   $sql= "INSERT INTO `datatable`(`fname`, `lname`, `email`, `gender`, `dob`) VALUES ('$fname','$lname','$email','$gender','$dob')";
   $res = mysqli_query($con,$sql);
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></script>
   <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<!--    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</head>

<body>

	<?php

 
 $result = mysqli_query($con,"SELECT * FROM `datatable`");

 ?>
 <div class="container"><br>
 	<h2 class="text-center">All Records</h2><br>
 	<button class="btn btn-info float-right" id="btnExport">Downlod PDF</button>
		<table id="table_id" class="display table table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>fname</th> 
				<th>lname</th>
				<th>email</th>
				<th>Date Of Birth</th>
				<th>gender</th>
			</tr>
        </thead>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
        	<td><?= $row['fname'] ?></td>
        	<td><?= $row['lname'] ?></td>
        	<td><?= $row['email'] ?></td>
        	<td><?= $row['dob'] ?></td>
        	<td><?= $row['gender'] ?></td>	
        </tr>
     <?php } ?>
    </table>
    </div>

 <script>
	$(document).ready(function(){
		$("#table_id").DataTable();
	})

        $("body").on("click", "#btnExport", function () {
            html2canvas($('#table_id')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("customer-details.pdf");
                }
            });
        });
  
</script>

</body>

</html>
