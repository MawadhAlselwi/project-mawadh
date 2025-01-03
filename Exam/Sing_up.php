
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">      
    <link rel="stylesheet" href="Sing_up.css">
    <title>Sing up</title>
</head>
<body>
    <h2 class="container md-1 pt-1">Sign up</h2><br>
    <form action="CreateCount.php" method="POST" class="container pt-3 col-md-3 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">  

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
<div class="mb-2">
      <label for="name" class="form-lable">Name</label><br>
      <input type="text" class="from-control rounded-2 " id="name" name="name" placeholder="Enter your name" >
    </div>

    <div class="mb-2">
      <label for="exampleInputPasswor1" class="form-lable">Password</label><br>
      <input type="password" class="from-control rounded-2" id="exampleInputPasswor1" name="password" placeholder="Enter your password">
    </div>
    <div class="mb-2">
      <label for="password" class="form-lable">Confirm Password</label><br>
      <input type="password" class="rom-control rounded-2" id="password" name="C_Pass" placeholder="Enter Confirm Password" >
    </div>

    <div class="mb-2">
      <label for="email" class="form-lable">Email</label><br>
      <input type="email" class="from-control rounded-2" id="email" name="email" placeholder="Enter your email" >
    </div>

    <div class="mb-2">
      <label for="phone" class="form-lable">Phone</label><br>
      <input type="text" class="from-control rounded-2 " id="phone" name="phone" placeholder="Enter your phone" >
    </div>  

    <div class="from-check ">
      <input type="radio" class="from-check-input pt-2 col-md-3 " id="flexRadioDefault1" name="gender" value="Male" checked>
      <label  for="flexRadioDefault1" class="from-check-label pt-2 col-md-3 ">Male</label>
    </div>

    <div class="from-check">
      <input type="radio" class="from-check-input pt-2 col-md-2" id="flexRadioDefault2" name="gender" value="Female"  checked>
      <label for="flexRadioDefault2" class="from-check-label pt-2 col-md-3">Female</label>
    </div>

      <button type="submit" class="rounded-4 col-md-10 py-1 " data-bs-toggle="modal" data-bs-target="#exampleModa">  Sign up  </button><br>
      
      <div class="text-center">
      <label class="nav-link py-3">Already have an account? <a href="Sing_in.php">Login</a> </label>

    </div>
</form>    
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
