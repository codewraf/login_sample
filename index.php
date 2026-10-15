<?php 
    include __DIR__ . ('/includes/config.php');
    session_start();
    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = addslashes($_POST['uname']);
        $pword = addslashes($_POST['pword']);

        $sql = mysqli_query($conn, "SELECT * FROM accounts WHERE username='$username' AND password='$pword'");
        $row = mysqli_fetch_array($sql);
        $count = mysqli_num_rows($sql);

        if($count == 1){
            $_SESSION['username'] = $username;
            $_SESSION['accesslevel'] = $row[3];
            header("location: main.php");
            exit();
        }else{
            $error = "Invalid username/password credentials. Try again!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
	<title>Login Sample</title>
</head>
<style type="text/css">
    * {
        font-family: arial;
    }
    a {
        font-size: 8pt;
    }
</style>
<body>
<div class="container mt-4">
    <?php if($error != ""): ?>
        <p class="text-danger text-center"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="" method="post">
    	<table cellpadding="2" cellspacing="2" align="center">
            <tr>
                <td colspan="2"><h2 align="center">Login Here</h2></td>
            </tr>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pword" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="login" value="Log-in">
                </td>
            </tr>
            <tr>
                <td align="right"><a href="signup.php">Sign-Up</a> | </td>
                <td><a href="#">Forgot Password?</a></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>