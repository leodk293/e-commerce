<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="app.js" defer></script>
</head>

<body>
    <?php include_once("header.php") ?>

    <div class="container-product-info">
        <div class="models">
            <img src="images/buy-1.jpg" alt="">
            <div class="mdls">
                <img src="images/gallery-1.jpg" alt="" image-id="1">
                <img src="images/gallery-2.jpg" alt="" image-id="2">
                <img src="images/gallery-3.jpg" alt="" image-id="3">
                <img src="images/gallery-4.jpg" alt="" image-id="4">
            </div>
        </div>

        <div class="text-info">
            <p>Home / T-Shirt</p>
            <h1 style="font-size:40px;">Red Printed T-Shirt By HRX</h1>
            <p>$50.00</p>
            <select style="width: 180px;border:1px solid orange; padding:5px" name="" id="">
                <option value="">Select Size</option>
                <option value="">XXl</option>
                <option value="">XL</option>
                <option value="">Large</option>
                <option value="">Medium</option>
                <option value="">Small</option>
            </select>
            <div class="add">
                <input type="number" value="1">
                <button>Add To Card</button>
            </div>
            <h2>Products Details</h2>
            <p style="width:400px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Laudantium aut accusamus itaque inventore aliquid velit facere saepe ipsum quod
                tenetur. Corporis, suscipit. Enim error delectus doloribus natus beatae molestias fugit.
            </p>
        </div>
    </div>

    <div class="related-products">
        <h1>Related Products</h1>
        <p>View more</p>
    </div>

    <div style="margin-top:50px;">
        <?php include_once("lastestProduct.php") ?>
    </div>

    <?php include_once("footer.php") ?>

</body>

</html>