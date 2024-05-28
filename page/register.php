<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login!</title>
</head>

<body>
    <div class="banner">
        <video autoplay loop muted>
            <source src="../video/index.mp4" type="">
        </video>
    </div>
    <div class="text-bg-dark p-3 position-absolute top-50 start-50 translate-middle"
        style="opacity:0.9; border-radius: 20px;">
        <?php
            if(isset($_GET['message']))
            {
                if($_GET['message'] == "failed")
                {
                    echo "Login gagal. Username atau Password salah";
                }
                else if($_GET['message']=="logout")
                {
                    echo "Anda telah berhasil Logout";
                }
                else if($_GET['message']=="belum_login")
                {
                    echo "Anda harus login terlebih dahulu untuk mengakses halaman ini";
                }
                else if($_GET['message']=="register_gagal")
                {
                    echo "Username sudah dipakai, silakan coba lagi!";
                }
            }
        ?>
        <form action="register_proses.php" method="POST" class="">
            <h1>Register Page</h1>
            <hr width="100%">
            <div>
                <input name="username" type="username" class="form-control" placeholder=" Masukkan username" required
                    required>
            </div>
            <br>
            <div>
                <input name="password" type="password" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <br>
            <button name="submit" class="btn btn-dark btn-block btn-outline-light" value="submit"
                style="width: 100%;">Register</button>
            <center>
                <p class=" ">Sudah punya akun? <a href="login.php">login!</a></p>
            </center>
    </div>
</body>

</html>