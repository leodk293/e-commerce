<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include_once("header.php") ?>

    <div class="every-products">
        <h1 style="font-family:sans-serif">All products</h1>
        <select name="" id="">
            <option value="">Default Shorting</option>
            <option value="">Short by Price</option>
            <option value="">Short by Popularity</option>
            <option value="">Short by Rating</option>
            <option value="">Short By Sale</option>
        </select>
    </div>

    <div style="margin-top: 60px;">
        <?php include_once("product.php") ?>
        <div style="margin-top:50px">
        <?php include_once("lastestProduct.php") ?>
        </div> 
    </div>

    <div class="number">
        <p>1</p>
        <p>2</p>
        <p>3</p>
        <p>4</p>
    </div>

    <?php include_once("footer.php") ?>




</body>

</html>