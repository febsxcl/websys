<?php 
include 'server.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"></head>

</head>
<body>
    <div class="container">
        <h1>Registration</h1>
        <form action="server.php" method = "POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="passord" name="password" class="form-control" placeholder = "Enter Password">
            </div> <br>
                <div class="d-flex flex-row-reverse">
                <input type="submit" name="Submit" class="btn btn-outline-success" value="Register">
                <input type="submit" name="Cancel" class="btn btn-outline-danger" value="Cancel">
            </div>
        </form>
    </div>
</body>
</html>