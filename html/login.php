<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <form name="loginfrm" action="login_do.php" method="post" >
      <span style="font-size:7em;"><i class="fa fa-lock deep-purple-text"></i></span>
      <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      
       <input name="username" type="text" required="required" class="form-control" placeholder="Username" />

      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" required="required" class="form-control" placeholder="Password" required>
      

      <button class="btn btn-deep-purple " type="submit" name="submit" value="Login">Sign in</button>

      </form>

  </body>
</html>
