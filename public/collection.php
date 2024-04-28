<?php

    require_once("../config/connect.php");

    $result = mysqli_query($connect, "SELECT * FROM `collection`");
    if (!$result) {
        die('Ошибка запроса');
    }

    $rows = mysqli_fetch_all($result);

    // $bestseller = mysqli_query($connect, 'SELECT * FROM `best_seller`');
    // $bestseller_res = mysqli_fetch_all($bestseller);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/collection.css">
    <title>Коллекция</title>
</head>
<body>
    <?php include '../public_html/header.php'; ?>

    <div class="bestseller" id="bestseller">
    <div class="container">
        <div class="bestseller__title">
            <h2 class="headline-4">Коллекция</h2>
        </div>

        <div class="bestseller__cards">

        <?php foreach($rows as $best) {?>
            <article class="card">

                <div class="card__picture">
                    <img src=".<?= $best[3]; ?>"  alt="Headphones">
                    <div class="card__new">НОВОЕ</div>
                    <div class="card__fav">
                        <button class="btn-fav">
                            <!-- <img src="./img/arrivals/Shape.svg" alt="favorite"> -->
                            <svg class="btn-fav__svg" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.577 3.76422C10.2546 4.07365 9.74548 4.07365 9.42304 3.76422L8.84604 3.2105C8.17068 2.56239 7.25832 2.16667 6.25004 2.16667C4.17897 2.16667 2.50004 3.8456 2.50004 5.91667C2.50004 7.90219 3.57486 9.54171 5.1265 10.8888C6.67947 12.237 8.53621 13.1312 9.64558 13.5876C9.87754 13.683 10.1225 13.683 10.3545 13.5876C11.4639 13.1312 13.3206 12.237 14.8736 10.8888C16.4252 9.54171 17.5 7.90218 17.5 5.91667C17.5 3.8456 15.8211 2.16667 13.75 2.16667C12.7418 2.16667 11.8294 2.56239 11.154 3.2105L10.577 3.76422ZM10 2.00798C9.0268 1.074 7.70545 0.5 6.25004 0.5C3.2585 0.5 0.833374 2.92512 0.833374 5.91667C0.833374 11.2235 6.64199 14.1542 9.01153 15.1289C9.64968 15.3914 10.3504 15.3914 10.9885 15.1289C13.3581 14.1542 19.1667 11.2235 19.1667 5.91667C19.1667 2.92512 16.7416 0.5 13.75 0.5C12.2946 0.5 10.9733 1.074 10 2.00798Z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="card__btn">
                        <button class="btn btn--small btn--widht">В корзину</button>
                    </div>
                </div>

                <div class="card__desc">
                    <div class="card__rating">

                        
                            <img src="../img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="../img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="../img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="../img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="../img/arrivals/Star Icon.svg" alt="star">
                        

                    </div>

                    <div class="card__title">
                        <?= $best[1]; ?>
                    </div>

                    <div class="card__price">
                        $<?= $best[2]; ?>.49
                    </div>
                </div>

                <a href="#!" class="card__link"></a>

            </article>    

            <?php } ?>

        </div>
    </div>
</div>

    <?php include '../public_html/footer.php'; ?>
</body>
</html>