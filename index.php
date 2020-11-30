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
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

<body>
    <div class="container"><br>
        <h1 class="text-center">Form Data</h1>
        <form  method="post" action="insert.php">
            <div class="row">
                <div class="col-6">
                    <label for="">Fist Name</label>
                    <input type="text" class="form-control" id="fname" required placeholder="Enter Fist Name" name="fname">
                </div>
                <div class="col-6">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" required placeholder="Enter Last Name" name="lname" id="lname">
                </div><br><br>
                <div class="col-6">
                    <label for="">Email ID</label>
                    <input type="text" class="form-control" required placeholder="Enter Email" name="email" id="email">
                </div>
                <div class="col-6">
                    <label for="birthday">Birthday:</label>
                    <input type="date" class="form-control" required name="dob">
                </div>
                <div class="radio col-6">
                    <label for="">Gender</label><br>
                    <label><input type="radio" name="gender" value="male" checked> Male</label>
                    <label><input type="radio" name="gender" value="female" > Female</label>
                    <label><input type="radio" name="gender" value="others" > Others</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 text-center">Submit</button>
        </form>
    </div>

</body>

</html>



   
