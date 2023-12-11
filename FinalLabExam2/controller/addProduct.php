<?php
require_once "../model/productModel.php";
require_once('../controller/sessionCheck.php');



if (isset($_POST["submit"])) {
  
    $productName = $_REQUEST["productName"];
    $productPrice = $_REQUEST["productPrice"];
    $productQuantity = $_REQUEST["productQualtity"];
        $status = product($productName, $productPrice,$productQuantity);
        if ($status) {
?>
            <center>
                <?php echo "Adding Product Completed "; ?>
            </center>
        <?php
        } else {
            echo "RFailed";
        }
    }

?>


?>

<html lang="en">

<head>
    <title>Registration</title>
    <script src="../js/addProductCheck.js"></script>
</head>

<body>
    <form method="post"  onsubmit="return productCheck()">

        <table width="100%" height="100%">
            <tr>
                <td align="center" valign="middle">
                    <table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <td colspan="2" align="center">
                                <h2>Registration</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>Product Name:</td>
                            <td><input type="text" name="productName" id="productName" value=""></td>
                        </tr>
                       
                        <tr>
                            <td>ProductPrice</td>
                            <td><input type="text" name="productPrice" id="productPrice" value=""></td>
                        </tr>
                        <tr>
                            <td>Product Quantity</td>
                            <td><input type="number" name="productQualtity" id="productQualtity" value=""><b></td>
                        </tr>

                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="submit" value="Submit"> <br>
                                <a href="../view/seller.php">Go home</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
if ($_SESSION['userName'] == 'admin') { ?>
    <a href="../view/admin.php"><h4>Go back</h4></a>
<?php }

else if ($_SESSION['userName'] == 'seller') { ?>
    <a href="../view/seller.php"><h4>Go back</h4></a>
<?php }
 else { ?>
    <a href="../view/buyer.php"><h4>Go back</h4></a>
<?php } ?>
