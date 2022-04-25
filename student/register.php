<?php 
include '../config.php'; 
//error_reporting(0);
$email = $student_id = $password = $cpassword = "";
if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $student_id = $_POST['student_id'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (student_id, email, password)
					VALUES ('$student_id', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<?php
require_once('../inc/header.php');
?>

<body class="hold-transition login-page">
  <section class="login mb-5 p-5 text-center bg-light bg-image" style="
      background-image: url('img/lg-back.webp');
      background-size: cover;
      height: 800px;
    ">

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3">Student Registration</h1>
          <p class="col-lg-10 fs-4">Sign up to start your session</p>
        </div>

        <div class="col-md-10 mx-auto col-lg-5">
          <form action="" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Exampl@hotcookie.com" name="email" value="<?php echo $email; ?>" required>
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3"> 
              <input type="text" class="form-control" id="floatingInput" placeholder="john" name="student_id" value="<?php echo $student_id; ?>" required>
              <label for="floatingInput">Student ID</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
              <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3"> 
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="cpassword" value="<?php echo $cpassword; ?>" required>
              <label for="floatingPassword">Confirm Password</label>
            </div>
            <!--<div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>-->
            <button class="w-100 btn btn-lg btn-mycolorpic" type="submit" name="submit">Sign In</button>
            <hr class="my-4">
            <small class="text-muted">
              <p>Have an account ?
              <a class="align-content-start text-mycolorpic" href="http://localhost/Project_I_Public/student/login.php">LogIn Here</a></p>
              <a href="http://localhost/Project_I_Public/portal.php">Go Back</a>
            </small>
          </form>
        </div>
      </div>
    </div>

    </div>

  </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>