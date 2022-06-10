<?php
include 'db.php';
session_start();
if (isset($_POST["add"])) {
    $check = 0;
    foreach ($_SESSION['cart'] as $cart_item) {
        $keys = array_keys($cart_item);
        if ($_POST["hidden_id"] == $cart_item["hidden_id"]) {
            $check = 1;
        }
    }
    if ($check == 0) {
        $count = count($_SESSION["cart"]);
        $item_array = array(
            'id' => $_GET["id"],
            'hidden_id' => $_POST["hidden_id"],
            'name' => $_POST["hidden_name"],
            'price' => $_POST["hidden_price"],
            'quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][$count] = $item_array;
    }
    echo '<script>window.location="accessoriesShop.php"</script>';
}


if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $key => $value) {
            if ($value["hidden_id"] == $_GET["hidden_id"]) {
                unset($_SESSION["cart"][$key]);
                echo '<script>window.location="accessoriesShop.php"</script>';
            }
        }
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "deleteAll") {
        unset($_SESSION["cart"]);
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="styles/add.css">

    <style>


    </style>

    <link rel="shortcut icon" href="img/logo.png"/>
    <title>NBAlatest- Accessories </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
    <style>
        .table-bordered {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table-bordered tr:nth-child(even) {
            background-color: #f2f2f2;
        }


        .table-bordered th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #263238;
            color: white;
        }

        input[type=submit] {
            width: 150px;
            background: #263238;
            color: #fff;
            border: 1px solid #eee;
            border-radius: 20px;
            box-shadow: 5px 5px 5px #eee;
            text-shadow: none;
        }

        input[type=submit]:hover {
            background: #476575;
            color: #fff;
            border: 1px solid #eee;
            border-radius: 20px;
            box-shadow: 5px 5px 5px #eee;
            text-shadow: none;
        }

        .product {
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }

        table, th, tr {
            text-align: center;
        }

        table th {
            background-color: #efefef;
        }

        .title2 {
            text-align: center;
            color: #263238;
            font-weight: bolder;
            background-color: #efefef;
            padding: 2%;
        }

        #fixedheight {
            table-layout: fixed;
        }

        #fixedheight td {
            width: 25%;
        }

        #fixedheight td div {
            height: 500px;
            overflow: hidden;
        }

        .card {
            display: table;
        }

        .container {
            width: 100%;
            display: table-cell;
            vertical-align: bottom;
            text-align: right;
        }

        img {
            max-width: 350px;
        }

    </style>
</head>
<body>
<div class="header">
    <h2 class="logo zoomIn" ; style="text-transform: none;">NBAlatest - Accessories</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
    </label>


    <ul class="menu">
        <?php
        if (isset($_SESSION["emailA"])) {
            ?>
            <a href="index.php">Home</a>
            <a style="border-bottom: white 2px solid;" href="admindashboard.php">Dashboard</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">
                    <a href="accessoriesShop.php">Accessories</a>
                    <a href="shirtsShop.php">Shirts</a>
                    <a href="shortsShop.php">Shorts</a>
                </div>
            </div>

            <a href="logout.php">Logout</a>
            <?php
        } elseif (isset($_SESSION['email'])) {

            ?>
            <a style="border-bottom: white 2px solid;" href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">
                    <a href="accessoriesShop.php">Accessories</a>
                    <a href="shirtsShop.php">Shirts</a>
                    <a href="shortsShop.php">Shorts</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content">
                    <center><a href="#"><img src="img/equipments/1.png" alt="image from database" height="120px"
                                             style="border-radius:50%"></a></center>
                    <a href="update.php">Update Account</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
            <?php
        } else {
            ?>
            <a style="border-bottom: white 2px solid;" href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">
                    <a href="accessoriesShop.php">Accessories</a>
                    <a href="shirtsShop.php">Shirts</a>
                    <a href="shortsShop.php">Shorts</a>
                </div>
            </div>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>

        <?php } ?>
    </ul>
</div>

<?php
$query = "SELECT * FROM accessories ORDER BY id ASC ";
$result = mysqli_query($con, $query);
echo '<br>';
$row = 0;
$column = 0;
echo '<table border=1 width="100%" id="fixedheight"> <tr><th style="width:33.3%"></th>
    <th style="width:33.3%"></th>
    <th style="width:33.3%"></th>
  </tr>';
while ($row = mysqli_fetch_assoc($result)) {
    if ($column == 0) {
        echo '<tr style="line-height: 40px">';
    }
    if (($column == 3) && ($row = 0)) {
        echo '<td>acontent</td></tr><tr style="line-height: 40px">'; // output special content, start new row
    }
    echo '<td>
            <div class="card">
            <img src="img/accessories/' . $row['name'] . '.png" alt="ks">
            <div class = "container">
                <h2>' . $row['actual_name'] . '  $' . $row['price'] . '</h2>
                <form method="post" action="accessoriesShop.php?action=add&id=" ' . $row["id"] . ' >
                <input type="hidden" name="hidden_id" value=" ' . $row["id"] . '">
                <input type="hidden" name="hidden_name" value=" ' . $row["actual_name"] . '">
                <input type="hidden" name="hidden_price" value="' . $row["price"] . '">
                <input type="text" name="quantity" class="form-control" value="1">
                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                </form>
              </div>
            </div>
            </td>';
    $column++;
    if ($column >= 3) {
        $row++;
        echo '</tr>';
        $column = 0;
    }
}
echo '</table>';
?>
<h3 class="title2">Shopping Cart Details</h3>
<div class="table-responsive">
    <table class="table-bordered">
        <tr>
            <th style="width:30%">Product Name</th>
            <th style="width:10%">Quantity</th>
            <th style="width:10%">Price Details</th>
            <th style="width:10%">Total Price</th>
            <th style="width:17%">Remove Item</th>
        </tr>

        <?php
        if (!empty($_SESSION["cart"])) {
            $total = 0;
            foreach ($_SESSION["cart"] as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value["name"]; ?></td>
                    <td><?php echo $value["quantity"]; ?></td>
                    <td>$ <?php echo $value["price"]; ?></td>
                    <td>
                        $ <?php echo number_format($value["quantity"] * $value["price"], 2); ?></td>
                    <td><a href="accessoriesShop.php?action=delete&hidden_id=<?php echo $value["hidden_id"]; ?>"><span
                                    class="text-danger">Remove Item</span></a></td>

                </tr>
                <?php
                $total = $total + ($value["quantity"] * $value["price"]);
            }
            ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <th align="right">$ <?php echo number_format($total, 2); ?></th>
                <td><a href="accessoriesShop.php?action=deleteAll"><span>Remove All Items</span></a></td>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>

</html>