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

    <br>
    <h1 class="text-center mt-5 text-danger">Histori Pembelian</h1>
    <table class="table table-secondary table-hover table-lg mt-1" style="font-size: 1rem;">
        <?php
            if(isset($_GET['message']))
            {
                if($_GET['message'] == "hapus_berhasil")
                {
                    echo "hapus item berhasil";
                }
            }
        ?>
        <thead style="font-size: 0.8rem;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NO HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Total Harga</th>
                <th scope="col" colspan="2">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
                        include 'koneksi.php';
                        
                        $i=0;

                        $sql	= "SELECT * FROM shipping";
                        $query	= mysqli_query($connect, $sql);
                        
                        while ($data = mysqli_fetch_array($query)) {
                            $i++;
                            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['no_hp']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['total_harga']; ?></td>
                <td><a href="order_detail.php?id=<?= $data['id_shipping']; ?>"><button
                            class="btn btn-sm btn-outline-warning" type="submit">Item</button></a></td>
                <td><a href="order_hapus.php?delete=<?= $data['id_shipping']; ?>"><button
                            class="btn btn-sm btn-outline-danger" type="submit">Delete</button></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>