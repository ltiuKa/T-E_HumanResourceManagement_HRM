<?php 



// create session
session_start();

// connect database
include('../config.php');

if(isset($_SESSION['username']) && isset($_SESSION['level']))
{
	header("Location: index.php");
}
else
{

	if(isset($_POST['login']))
	{
		// array error
		$error = array();
		// array success
		$success = array();
		// showMess
		$showMess = false;

		// validate form 
		if(empty($_POST['email']))
		{
			$error['email'] = 'Bạn chưa nhập <b> email </b>';
		}

		if(empty($_POST['password']))
		{
			$error['password'] = 'Bạn chưa nhập <b> mật khẩu </b>';
		}

		if(!$error)
		{	
			
			$email = $_POST['email'];
			$password = md5($_POST['password']);

			// check user
			$check = "SELECT email, mat_khau, quyen, truy_cap FROM tai_khoan WHERE email = '$email'";
			$result = mysqli_query($conn, $check);
			$row = mysqli_fetch_array($result);
			$level = $row['quyen'];

			if(mysqli_num_rows($result) == 1)
			{
				if($row['mat_khau'] == $password)
				{
					$showMess = true;
					// create var session username
					$_SESSION['username'] = $email;
					// create var session level
					$_SESSION['level'] = $level;

          // set access
          $access = $row['truy_cap'] + 1;
          $update = "UPDATE tai_khoan SET truy_cap = $access WHERE email = '$email'";
          mysqli_query($conn, $update); 

					$success['mess'] = 'Đăng nhập thành công';
					header("Refresh: 1; index.php?p=index&a=statistic");
				}
				else
				{
					$error['check'] = 'Nhập sai <b> mật khẩu </b>. Vui lòng thử lại';
				}
			}
			else
			{
				$error['check'] = 'Nhập sai <b> email </b>. Vui lòng thử lại';
			}
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../dist/images/logo.jpg" type="image/x-icon"/>
  <title>Login to Account | HRM System</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../dist/css/glassmorphism.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="main-container">
  <div class="logo-container">
    <img src="../dist/images/logoHRM_lg.png" alt="HRM Logo" class="main-logo">
  </div>
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php">Login to Account</a>
    </div>
    <div class="login-box-body">
      <?php
        // show error
        if(isset($error))
        {
          if($showMess == false)
          {
            echo "<div class='alert alert-danger'>";
            foreach ($error as $err)
            {
              echo $err . "<br/>";
            }
            echo "</div>";
          }
        }

        // show success
        if(isset($success))
        {
          if($showMess == true)
          {
            echo "<div class='alert alert-success'>";
            foreach ($success as $suc)
            {
              echo $suc . "<br/>";
            }
            echo "</div>";
          }
        }
      ?>

      <form method="POST">
        <div class="form-group">
          <label>Username</label>
          <input type="email" class="form-control" placeholder="Enter username" name="email" required
          value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter password" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Log in</button>
      </form>

      <div class="forgot-password">
        <a href="#"></a>
      </div>
     
    </div>
  </div>
</div>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php 
 } 
//  end check session
?>