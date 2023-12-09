<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="styles.css">
    <script src="app.js" defer></script>
</head>
<body>
    <?php include_once("header.php") ?>

    <div class="product-added-to-card">
        <div class="table-info">
            <p>Product</p>
            <p>Quantiy</p>
            <p>Subtotal</p>
        </div>
        <div class="features">
            <div class="image-added" style="position:relative;left:65px;">
                <img style="width: 100px;object-fit:cover;" src="images/gallery-1.jpg" alt="">
                <div class="text">
                    <p>Red Printed T-Shirt</p>
                    <p>Price: $50</p>
                    <p class="remove" style="cursor:pointer; color:red">Remove</p>
                </div>
            </div>

            <p style="position:relative; left:-100px;border:1px solid #111;padding:10px;height:40px; width: 60px; text-align:center"  class="qty">2</p>
            <p style="position:relative; left:-90px" class="cost">$100</p>
            
        </div>

        <div class="features-2">
            <div class="image-added" style="position:relative;left:60px;">
                <img style="width: 100px;object-fit:cover;" src="images/gallery-2.jpg" alt="">
                <div class="text">
                    <p>Red Printed T-Shirt</p>
                    <p>Price: $50</p>
                    <p class="remove" style="cursor:pointer;color:red">Remove</p>
                </div>
            </div>

            <p style="position:relative; left:-100px;border:1px solid #111;padding:10px;height:40px; width: 60px; text-align:center"  class="qty">1</p>
            <p style="position:relative; left:-90px;" class="cost">$50</p>
            
        </div>

        <div class="sub-total">
            <div style="border:1px solid salmon;border-radius:50px; background-color:salmon;padding:5px; width:300px;"></div>
            <div class="price">
                <p>Subtotal</p>
                <p>$150</p>
            </div>
            <div class="price">
                <p>Taxe</p>
                <p>$35</p>
            </div>
            <div class="price">
                <p>Total</p>
                <p>$185</p>
            </div>
        </div>
        <button>Proceed to checkout</button>
    </div>

    <?php include_once("footer.php") ?>


    
</body>
</html>