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
                                <option value="0">Profile </option>
                                <option value="cart.php?halaman1">My Cart</option>
                                <option value="order.php?halaman2">My Order</option>
                                <option value="product_Admin.php?halaman3">Product</option>
                                <option value="order_admin.php?halaman4">Order</option>
                                <option value="user_admin.php?halaman5">User</option>
                            </select>
                        </form>

                        <?php

                        if (isset($_GET["halaman1"])) { header ("location:cart.php");}
		
                        elseif(isset($_GET["halaman2"])){ header ("location:order.php");}
                        
                        ?>
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
        <h3 class="text-center">Add Product</h3>
        <form action="product_tambah_proses.php" method="POST" enctype="multipart/form-data">
            <div class="row g-5 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Nama</label>
                </div>
                <div class="col-auto" style="width: 69%;">
                    <input name="nama_produk" type="text" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-5  align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Harga</label>
                </div>
                <div class="col-auto" style="width: 68%;">
                    <input type="number" name="harga_produk" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-4  align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Kategori</label>
                </div>
                <div class="col-auto" style="width: 70%;">
                    <select name="kategori_produk" class="btn text-bg-light" style="width:92%;">
                        <option value=""> </option>
                        <option value="aksesoris">aksesoris</option>
                        <option value="console">console</option>
                        <option value="game">game</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row g-5  align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Foto</label>
                </div>
                <div class="col-auto" style="width: 68%;">
                    <input type="file" name="foto_produk" class="form-control">
                </div>
            </div>
            <br>
            <button type=" submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>