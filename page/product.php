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
                <strong><a class="navbar-brand" href="home_admin.php">Game Store!</a>
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
                                <option value="product.php">Product</option>
                                <option value="order.php">Order</option>
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

    <div class="col mt-5"><br></div>

    <center>
        <div class="row text-bg-dark text-center container-lg mt-3 p-3 my-md-4 bd-layout" style="border-radius: 5%;">
            <div class="col-sm-auto">
                <br>
                <h2>PRODUK</h2>
                <br>
                <a href="product_tambah.php" class="btn text-bg-success">Tambah Data</a>
                <br>
                <table class="table table-dark table-hover table-md">
                    <thead>
                        <tr>
                            <th scope="col">Id produk</th>
                            <th scope="col">nama</th>
                            <th scope="col">kategori</th>
                            <th scope="col">harga</th>
                            <th scope="col">foto</th>
                            <th scope="col" colspan="2">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php' ;
                        
                        $i=0;

                        $sql	= "SELECT * FROM produk";
                        $query	= mysqli_query($connect, $sql);
                        
                        while ($data = mysqli_fetch_array($query)) {
                            $i++;
                            ?>
                        <tr>
                            <td><?= $data['id_produk']; ?></td>
                            <td><?= $data['nama_produk']; ?></td>
                            <td><?= $data['kategori_produk']; ?></td>
                            <td><?= $data['harga_produk']; ?></td>
                            <td><img src="../img/<?= $data['foto_produk']; ?>" alt="" style="width: 15%; height: 15%">
                            </td>
                            <td><a href=" product_edit.php?edit=<?= $data['id_produk']; ?>"><button
                                        class="btn btn-sm btn-outline-light" type="submit">Edit</button></a></td>
                            <td><a href="product_hapus.php?delete=<?= $data['id_produk']; ?>"><button
                                        class="btn btn-sm btn-outline-danger" type="submit">Delete</button></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </center>

</body>

</html>