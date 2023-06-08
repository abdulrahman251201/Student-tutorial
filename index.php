<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://sd.alharaki.sch.id/wp-content/uploads/2021/02/2-1024x638.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container-box">
        <div class="container-isi">
             <?php if(isset($_GET['pesan'])) { ?>
                <div class="alert alert-danger">
                  <?php echo $_GET['pesan'];  ?>
                </div>
             <?php } ?>
            <form action="aksi_login.php" method="post">
                <label for="">Username :</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
                <label for="">Password :</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <br>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   
  </body>
</html>