<?php include('server.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>HealthCare Chatbot</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/login.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="login.php" method="post">
    <img class="mb-4" src="images/robot.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <!-- Display Validation errors over here -->
    <?php include('errors.php'); ?>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email1" value="<?php echo $email; ?>">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd1" value="<?php echo $password; ?>">
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
    <br><p class="text-center">Don't have an account? <a href="register.php">Register</a> </p>
    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="scripts/login.js"></script>
</body>

</html>
