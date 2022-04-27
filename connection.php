<?php
include_once 'conf.php';
if (isset($_POST['submit'])) {
  $email = $student_id = $password = $cpassword = "";
  $email = 'qwe@gmail.com';
  $student_id = 456;
  $p = '789456';
  $password = md5($p);
  
  
  $que = "SELECT count(id) as po, student_id FROM users WHERE email='$email';";
  $results = $pdo->query($que);
  foreach ($results as $row) {
    echo '<p>' .$row['po']." ". $row['student_id'] . '</p>';
  }
  $idco = $row['po']+1;
  $que = "INSERT INTO users (id, student_id, email, password)
            //VALUES ('$idco','$student_id', '$email', '$password')";
  $results = $pdo->query($que);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Exampl@hotcookie.com" name="email" value="<?php //echo $email; ?>" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="john" name="student_id" value="<?php //echo $student_id; ?>" required>
      <label for="floatingInput">Student ID</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?php //echo $password; 
                                                                                                                      ?>" required>
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="cpassword" value="<?php //echo $cpassword; 
                                                                                                                        ?>" required>
      <label for="floatingPassword">Confirm Password</label>
      <button class="w-100 btn btn-lg btn-mycolorpic" type="submit" name="submit">Sign In</button>
    </div>
  </form>
</body>

</html>