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

    <div class="row text-bg-dark text-center p-3 mt-4 position-absolute top-50 start-50 translate-middle"
        style="border-radius: 10%;">
        <div class="col-sm-auto">
            <?php
            if(isset($_GET['message']))
            {
                if($_GET['message'] == "failed")
                {
                    echo "Login gagal. Username atau Password salah";
                }
                else if($_GET['message']=="register_admin_berhasil")
                {
                    echo "Tambah user berhasil!";
                }
            }
        ?>

            <h2>User</h2>

            <a href="user_admin_tambah.php" class="btn text-bg-success">Tambah Data</a>
            <br>
            <table class="table table-dark table-hover table-lg">
                <thead>
                    <tr>
                        <th scope="col">Id User</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
                        <th scope="col" colspan="2">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('koneksi.php');
                        
                        $i=0;

                        $sql	= "SELECT * FROM user";
                        $query	= mysqli_query($connect, $sql);
                        
                        while ($data = mysqli_fetch_array($query)) {
                            $i++;
                            ?>
                    <tr>
                        <td><?= $data['id_user']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['password']; ?></td>
                        <td><?= $data['level']; ?></td>
                        <td><a href="user_admin_edit.php?edit=<?= $data['id_user']; ?>"><button
                                    class="btn btn-sm btn-outline-light" type="submit">Edit</button></a></td>
                        <td><a href="user_admin_hapus.php?delete=<?= $data['id_user']; ?>"><button
                                    class="btn btn-sm btn-outline-danger" type="submit">Delete</button></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>