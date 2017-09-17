<!DOCTYPE html>
<html lang="en">

    <?php include("utils/parts/header.php"); ?>
    <body>

        <?php
        $order = new Order();
        //$order->set_values($_POST['inputCredentials'], $_POST['inputAddress'], $_POST['inputFlavour'], $_POST['inputAmount']);
        //$order->push_order();
        ?>

        <?php include("utils/parts/navbar.php"); ?> 
        <?php include("utils/parts/feature.php"); ?> 
        <?php include("utils/parts/potion_desc.php"); ?> 
        <?php include("utils/parts/order_form.php"); ?> 
        <?php include("utils/parts/footer.php"); ?> 

        <?php include("utils/parts/scripts.php"); ?> 
        <script type="text/javascript" src="style/js/potion_desc_gear.js"></script>
    </body>
</html>


