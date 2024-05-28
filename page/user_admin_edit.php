<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <strong><a class="navbar-brand" href="#">Game Store!</a>
                </strong>
                <strong>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="console.php">Console</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="accesory.php">Accesory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="game.php">Game</a>
                        </li>
                    </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form method="POST" action="">
                            <select name="profile"
                                onChange="document.location.href=this.options[this.selectedIndex].value;"
                                class="text-bg-dark border border-dark mt-2" style="opacity:0.7;"
                                aria-label=".form-select example">
                                <option value="">Profile </option>
                                <option value="cart.php">My Cart</option>
                                <option value="order.php">My Order</option>
                                <option value="product_Admin.php">Product</option>
                                <option value="order_admin.php">Order</option>
                                <option value="user_admin.php">User</option>
                            </select>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            </strong>
        </div>
    </nav>


    <div class="text-bg-dark p-3 position-absolute top-50 start-50 translate-middle mt-4" style="border-radius: 5%;">
        <h3 class="text-center">User Account</h3>
        <form action="user_admin_edit_proses.php" method="POST">
            <?php
                        include('koneksi.php');

                        $id = $_GET['edit'];

                        $sql	= "SELECT * FROM user WHERE id_user='$id'";
                        $query	= mysqli_query($connect, $sql);
                        
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
            <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Username</label>
                </div>
                <div class="col-auto" style="width: 68%;">
                    <input name="username" type="text" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-3  align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Password</label>
                </div>
                <div class="col-auto" style="width: 70%;">
                    <input type="text" name="password" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-5  align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Level</label>
                </div>
                <div class="col-auto" style="width: 70%;">
                    <select name="level" class="btn text-bg-light" style="width:106%;">
                        <option value=""> </option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                </div>
            </div>
            <br>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>