<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">      
    <link rel="stylesheet" href="Sing_up.css">
    <title>Login</title>
</head>
<body>
    <h2 class="container col-md-2 py-5">Sign in</h2><br>
<form action="register_singin.php" method="POST" class="container pt-2 col-md-3 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">  

<div class="card-body">
       <?php if (isset($_GET['error'])): ?>
        <div class= "my-2 rounded-5  alert alert-danger">
        <?php echo htmlspecialchars($_GET['error'])?>
           </div>
       <?php endif; ?>
          <?php if (isset($_GET['success'])): ?>
  <div class= "  my-2 rounded-5 alert alert-success">
    <?php echo htmlspecialchars($_GET['success'])?>
    </div>
    <?php endif; ?>

    </div>

<div class="mb-3">
  
      <label for="email" class="form-lable">Email</label><br>
      <input type="email" class="from-control rounded-2 " id="email" name="email" placeholder="Enter your email" >
    </div>

    <div class="mb-3">
      <label for="exampleInputPasswor1" class="form-lable">Password</label><br>
      <input type="password" class="from-control rounded-2" id="password" name="password" placeholder="Enter your Password">
    </div>
 
      <button type="submit" name="submit" value="submit" class="rounded-4 col-md-10 py-1 "  >  Login  </button><br>
</form>    
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
