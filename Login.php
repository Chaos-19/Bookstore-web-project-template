
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="chaos">
  <title>Register</title>
  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">
  <!-- custom css -->
  <link rel="stylesheet" href="style.css">
  <?php
  $user = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if (isset($_POST['submit'])) {
    if (!empty($email) && !empty($password)) {
      header("");
    } else {
      $message[] = "Wrong password or email please try again!";
    }
  }
  ?>
</head>

<body>
  <?php if (!empty($message)) {
    $name = "kalkidan";
    foreach ($message as $message) {
      echo '
     <div class="alert alert-danger alert-dismissible position-fixed top-0 w-100 fade show"><strong>' .
      $message .
      '</strong>
   <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
    </div>';
    }
  } ?>

  <section class="vh-100">
    <div class="container py-4 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-sm-9 col-md-8 col-lg-5 border border p-3 text-center shadow">
          <h1 class="text-capitalize text-white">Login</h1>
          <form method="post">
            <div class="form-group form-floating">
              <input type="email" class="form-control" name="email" placeholder="Email" />
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-group form-floating">
            <input type="password" class="form-control" placeholder="password" name="password" />
          <label for="floatingInput">password</label>
        </div>
        <div class="form-group">
          <select class="form-select" aria-label="user role">
            <option selected>user</option>
            <option>Admin</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary py-3 w-100" value="Login" name="submit" />
      </div>
      <div class="mb-3 link">
        doesn't have an account ? <a href="./Signup.php" class="btn btn-link btn-lg">Sign Up</a>
      </div>
    </form>
  </div>
</div>
</div>
</section>
<script src="bootstrap.bundle.min.js"></script>
</body>

</html>