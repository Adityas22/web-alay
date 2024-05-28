<!DOCTYPE html>
<html lan <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link rel="stylesheet" href="../style.css">
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
                                <option value="my_cart.php">My Cart</option>
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

    <center>
        <div class="container-fluid bg-secondary mt-4 pt-1" style="padding: 50px;">
            <center>
                <div class="row">
                    <?php
                                include('koneksi.php');
                                
                                $i=0;
                                $sql    = "SELECT * FROM produk WHERE kategori_produk = 'console'";
                                $query  = mysqli_query($connect, $sql);
                                if(mysqli_num_rows($query) > 0)
                                {
                                    while($data = mysqli_fetch_array($query))
                                    {
                                        ?>
                    <div class="col-md-3 mt-5">
                        <div class="card bg-secondary" style="width: 17rem; height: 17rem; border:none;">
                            <form method="post"
                                action="../page/my_cart.php?action=add&id=<?php echo $data['id_produk']; ?>">
                                <img src="../img/<?= $data['foto_produk'] ?>" class="card-img-top card-img-bottom"
                                    style="width: 30%; height: 30%;">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $data['nama_produk'] ?></h4>
                                    <p class="card-text text-dark">Rp <?= $data['harga_produk'] ?></p>
                                </div>
                                <input type="hidden" name="hidden_nama" value="<?= $data['nama_produk'] ?>" />
                                <input type="hidden" name="hidden_harga" value="<?= $data['harga_produk'] ?>" />
                                <input type="number" name="jumlah" value="1" style="width: 20%; height: 10%;"
                                    class="form-control text-center">
                                <br>
                                <input name="add_to_cart" type="submit"
                                    class="btn btn-warning btn-block btn-outline-light" value="Add to Cart">
                                <br>
                            </form>
                        </div>
                    </div>
                    <?php
                    }
                }
            ?>

                </div>
            </center>
        </div>
    </center>

</body>

</html>

<head>