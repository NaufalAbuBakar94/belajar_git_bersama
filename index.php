<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Mini Project</title>
    <link rel="stylesheet" href="style/style.css">
    <style type="text/css">
    /* .style1{
        color:#FFFFFF;
        font-style:italic;
    } */

    </style>
</head>
<body>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>
        <br/>
        <br/>
    </p>
    <center>
        <h2>LOGIN MINI PROJECT</h2>
    </center>
    <div class="login">
        <form action="login_admin.php" method="post" onsubmit="return validasi()">
            <div>
                <label for="user">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" value="login" class="tombol">
                <a href="register.php">Registrasi Account</a>
            </div>
        </form>
    </div>
</body>
<script type="text/javascript">
function validasi(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username != "" && password != "") {
        return true;
    } else {
        alert("Username dan Password harus di isi !");
        return false;
    }
}
</script>
</html>