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
        <h2>SILAHKAN ISI DATA DENGAN BENAR!!!</h2>
    </center>
    <div class="login">
        <form action="simpan_data.php" method="post" onsubmit="return validasi()">
            <div>
                <label for="nama">Nama Lengkap:</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div>
                <label for="user">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" value="Register" class="tombol">
                <a href="index.php">Login</a>
            </div>
        </form>
    </div>
</body>

</html>