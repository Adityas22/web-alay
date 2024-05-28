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
                <strong><a class="navbar-brand" href="home.php">Game Store!</a>
                </strong>
                <strong>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="console.php">Console</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="accessory.php">Accessory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="game.php">Game</a>
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
                                <option value="0">Profile </option>
                                <option value="cart.php">My Cart</option>
                                <option value="order.php">My Order</option>
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

    <div class="text-bg-secondary p-5 position-absolute top-50 start-50 translate-middle">
        <h3 class="text-center">Shipping</h3>
        <form action="shipping_proses.php" method="post">
            <?php $total_harga=$_GET['total']; 
            
            ?>
            <input type="hidden" name="total" value="<?php echo $total_harga; ?>">
            <div class="row g-4 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Nama</label>
                </div>
                <div class="col-auto" style="width: 70%;">
                    <input name="nama" type="text" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-4  align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">No HP</label>
                </div>
                <div class="col-auto" style="width: 70%;">
                    <input type="text" name="no_hp" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-4  align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Alamat</label>
                </div>
                <div class="col-auto" style="width: 70%;">
                    <input type="text" name="alamat" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-4  align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Harga Total</label>
                </div>
                <div class="col-auto" style="width: 40%;">
                    <?php echo $total_harga; ?>
                </div>
            </div>
            <br>
            <button type=" submit" class="btn btn-primary">Konfirm</button>
        </form>
    </div>


</body>

</html>