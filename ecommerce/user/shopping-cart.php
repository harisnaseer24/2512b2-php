<?php
session_start();
include_once("./components/header.php");
include_once("../config/connection.php");

?>
<!-- Header Area End Here -->
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">

                        <?php
                        if (!isset($_SESSION['role'])  || $_SESSION['role'] != 'user') {
                            echo "<h1> No data to show. Please Login first</h1>";
                        } else {
                        ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="li-product-remove">remove</th>
                                        <th class="li-product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="li-product-price">Unit Price</th>
                                        <th class="li-product-quantity">Quantity</th>
                                        <th class="li-product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    $user_id = $_SESSION['user_id']; //2

                                    $getCartData = "SELECT * FROM `cart` as c INNER JOIn products as p on c.product_id=p.product_id where user_id=$user_id";

                                    $getCartDataResult= mysqli_query($conn,$getCartData);

                                    if (mysqli_num_rows($getCartDataResult) ==0) {
                                       echo "<h2>No Product found in cart</h2>";
                                    } else {

                                    while($row = mysqli_fetch_assoc($getCartDataResult)){

                                  
                                        ?>
 <tr>
                                        <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                        <td class="li-product-thumbnail"><a href="#"><img src="../admin/uploads/<?= $row['image'] ?>" alt="Li's Product Image" height="70"></a></td>
                                        <td class="li-product-name"><a href="#"><?= $row['title'] ?> </a></td>
                                        <td class="li-product-price"><span class="amount"><?= $row['price'] ?></span></td>
                                        <td class="quantity">
                                            <label>Quantity</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box"  type="text" value="<?= $row['qty']?>">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount"><?= $row['total'] ?></span></td>
                                    </tr>

                                        <?php
                                        
                                    }  }
                                    

                                    ?>
                                   

                                </tbody>
                            </table>

                        <?php
                        }
                        ?>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div>
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Update cart" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>$130.00</span></li>
                                    <li>Total <span>$130.00</span></li>
                                </ul>
                                <a href="#">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Shopping Cart Area End-->
<?php
include_once("./components/footer.php");

?>