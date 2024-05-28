<?php 
include 'koneksi.php';

if(isset($_POST["add_to_cart"]))
{

	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "id_produk");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'id_produk'			=>	$_GET["id"],
				'nama_produk'		=>	$_POST["hidden_nama"],
				'harga_produk'		=>	$_POST["hidden_harga"],
				'jumlah_produk'		=>	$_POST["jumlah"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo "Item Already Added";
		}
	}
	else
	{
		$item_array = array(
			'id_produk'			=>	$_GET["id"],
			'nama_produk'		=>	$_POST["hidden_nama"],
			'harga_produk'		=>	$_POST["hidden_harga"],
			'jumlah_produk'		=>	$_POST["jumlah"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $data)
		{
			if($data["id_produk"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
			}
		}
	}
}

?>

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



    <div class="m-3 pt-5 mt-3">
        <center>
            <h1>KERANJANG PEMBELI</h1>
        </center>
        <br>
        <table class=" table table-secondary table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Sub Totoal</th>
                    <th scope="col" colspan="2">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
					if(!empty($_SESSION["shopping_cart"]))
					{ $i=0;
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $data)
						{ $i++;
					?>
                <tr>

                    </form>
                    <td><?= $i ?></td>
                    <td><?= $data['nama_produk'] ?></td>
                    <td><?= $data['harga_produk'] ?></td>
                    <td><?= $data['jumlah_produk'] ?></td>
                    <td>Rp <?php echo number_format($data['jumlah_produk'] * $data['harga_produk'], 2);?></td>
                    <td><a href="../page/my_cart.php?action=delete&id=<?= $data['id_produk']; ?>">
                            <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button></a>
                    </td>
                </tr>
                <?php
                    $total = $total + ($data['jumlah_produk'] * $data['harga_produk']);
                        }
                ?>
                <tr>
                    <td colspan="4" align="right">Total</td>
                    <td>Rp <?php echo number_format($total, 2); ?></td>
                    <input type="hidden" name="hidden_total" value="<?= $total ?>" />
                    <td><a href="../page/shipping.php?total=<?php echo $total; ?>"><button
                                class="btn btn-sm btn-outline-light bg-primary" type="submit">Checkout</button></a></td>
                    </td>
                </tr>
            </tbody>
            <?php
					}
					?>
        </table>

    </div>

</body>

</html>