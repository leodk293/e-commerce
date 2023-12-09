<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="styles.css">
    <script src="app.js" defer></script>
</head>

<body>
    <div class="container" style="background: linear-gradient(45deg, pink, hsl(6deg 60% 96.08%)); padding:30px;">
        <?php include("header.php") ?>

        <div class="workout">
            <div class="text">
                <h1>Give Your workout<br> A New Style !</h1>
                <p>Success isn't about always about greatness, is's about consistency. Consistent<br> hard works gains success.
                    Greatness will come.
                </p>
                <button>Explore Now</button>
            </div>
            <img src="images/image1.png" alt="">
        </div>

    </div>

    <div class="images">
        <img src="images/category-1.jpg" alt="">
        <img src="images/category-2.jpg" alt="">
        <img src="images/category-3.jpg" alt="">
    </div>

    <div class="products">
        <div class="text">
            <h1>Featured Products</h1>
            <div class="line"></div>
        </div>
        <?php include_once("product.php") ?>
    </div>

    <div class="container-lastest-product">
        <div class="text">
            <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Lastest Products</h1>
            <div class="line"></div>
        </div>

        <?php include_once("lastestProduct.php") ?>
    </div>

    <div class="smart-band">
        <img src="images/exclusive.png" alt="">
        <div class="smart-band-description">
            <p>Exclusively available on RedStore</p>
            <h1>Smart Band 4</h1>
            <p>The Mi Smart Band 4 features at 39.9% (than Mi Band 3) AMOLED color<br />full-touch display with ajustable
                brightness so everything is clear as can be.
            </p>
            <button type="button">Buy Now</button>


        </div>
    </div>

    <div class="testimonials">
        <div class="tes">
            <img style="width: 60px; object-fit: cover;" src="images/thumbs-up-regular.svg" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis totam, perspiciatis quo labore aut atque.
                Quia eaque doloribus iste aliquam eum odio at minus dicta distinctio excepturi,
                modi natus voluptate.
            </p>
            <div class="stars">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-regular.svg" alt="">
            </div>
            <img src="images/user-1.png" alt="">
            <h2>Sean Parker</h2>
        </div>
        <div class="tes">
            <img style="width: 60px; object-fit: cover;" src="images/thumbs-up-regular.svg" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis totam, perspiciatis quo labore aut atque.
                Quia eaque doloribus iste aliquam eum odio at minus dicta distinctio excepturi,
                modi natus voluptate.
            </p>
            <div class="stars">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-regular.svg" alt="">
            </div>
            <img src="images/user-2.png" alt="">
            <h2>Mike Smith</h2>
        </div>
        <div class="tes">
            <img style="width: 60px; object-fit: cover;" src="images/thumbs-up-regular.svg" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis totam, perspiciatis quo labore aut atque.
                Quia eaque doloribus iste aliquam eum odio at minus dicta distinctio excepturi,
                modi natus voluptate.
            </p>
            <div class="stars">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-solid.svg" alt="">
                <img src="images/star-regular.svg" alt="">
            </div>
            <img src="images/user-3.png" alt="">
            <h2>Mabel Jow</h2>
        </div>
    </div>

    <div class="payment-card">
        <img src="images/logo-paypal.png" alt="">
        <img src="images/logo-coca-cola.png" alt="">
        <img src="images/logo-oppo.png" alt="">
        <img src="images/logo-philips.png" alt="">
        <img src="images/logo-godrej.png" alt="">
    </div>

    <?php include_once("footer.php") ?>

</body>

</html>