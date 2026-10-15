<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
	<title>Sign Up</title>
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
    <form action="signup_code.php" method="post">
        <table cellpadding="4" cellspacing="4" align="center">
            <tr>
                <td colspan="2"><h2 align="center">Create Account</h2></td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="txtFullname" required></td>
            </tr>
            <tr>
                <td>Birthdate:</td>
                <td><input type="date" name="txtBirthdate" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="txtEmail" required></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="txtUsername" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="txtPassword" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnRegister" value="Register">
                    <a href="index.php">Back to Login</a>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>