
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Project</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="margin:100px;">
<?php
if(isset($_POST['add'])){
    echo $name= $_POST['name']."<br>";
    echo $email= $_POST['email']."<br>";
    echo $cell= $_POST['cell']."<br>";
    echo $uname= $_POST['uname'];
    $msg="";
    if (empty($name) || empty($email) || empty($cell) || empty($uname)) {
        $msg ="<p class=\"alert alert-warning alert-dismissible\" role=\"alert\">All fields are required !<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </p>";
        } else {
        $msg ="<p  class=\"alert alert-success alert-dismissible\" role=\"alert\">Data table! <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></p>";
    }
}

?>
    <div class="wrap shadow w-50">
        <div class="card">
            <div class="card-body">
                <h2>Sign up</h2>
                <?php
                  if(isset($msg)){
                      echo $msg;
                  }
            
                
                ?>
                <form action=" " method="POST">
                    <div class="form-group">
                    <label for=""> Name</label>
                     <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                    <label for="">Email</label>
                     <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                    <label for="">Cell</label>
                     <input type="text" class="form-control" name="cell">
                    </div>
                    <div class="form-group">
                    <label for="">Username</label>
                     <input type="text" class="form-control" name="uname">
                    </div>
                    <div class="form-group">
                   
                     <input type="submit" class="btn btn-primary mt-3" name="add" value="submit">
                    </div>

                </form>

            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>