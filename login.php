<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
    <h2>Masuk</h2>
    <form action="proses_login.php" method="post">
        <table cellpadding="5">
            <tr>
                <th colspan="2" align="left">Username</th>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="username"></td>
            </tr>
            <tr>
                <th align="left" colspan="2">Password</th>
            </tr>
            <tr>
                <td colspan="2"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td align="left"><a href="regis.php">Registrasi</a></td>
                <td align="right"><input type="submit" name="submit" value="Masuk"></td>
            </tr>
        </table>
    </form>
</body>
</html>