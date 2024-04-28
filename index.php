<?php

    require_once("config/connect.php");

    $result = mysqli_query($connect, "SELECT * FROM items");
    if (!$result) {
        die('Ошибка запроса');
    }

    $rows = mysqli_fetch_all($result);


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Интернет магазин</title>
		<link rel="stylesheet" href="./css/main.css" />
	</head>
	<body>
<div class="tagline">

    <img class="tagline__icon" src="./img/tagline/ticket-percent.svg" alt="ticket-percent">

    <div class="tagline__desc">
        Скидка 30% по всему магазину — время ограничено!
        
    </div>

    <a href="#" class="tagline__link">
        Делайте покупки сейчас -прямо сейчас
        <img src="./img/tagline/arrow-right.svg" alt="arrow-right">
    </a>


    <button class="tagline__close">
        <img src="./img/tagline/close.svg" alt="Close">
    </button>
</div>


<?php include './public_html/header.php'; ?>

<section class="hero">
    <div class="hero__container">
        <div class="hero__content">

            <h1 class="hero__title">
                Наслаждайтесь
                <br><span>потрясающим</span> звучанием музыки
            </h1>

            <div class="hero__desc">
                <p>Наслаждайтесь музыкой так, как никогда раньше</p>
            </div>

            <div class="hero__link">
                <a href="#arrivals" class="btn ">КУПИТЬ</a>
            </div>
        </div>
    </div>
</section>

<section class="arrivals" id="arrivals">
    <div class="container">
        <div class="arrivals__row">

            <div class="arrivals__title">
                <h2 class="headline-4">
                    Новые товары
                </h2>
            </div>

            <div class="arrivals__dots">
                <!-- <div class="dots">
                    <div class="dot dot--active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div> -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>

    <div class="container-right">
        <div class="arrivals__slider">
		
		

<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

    <?php foreach($rows as $products ){ ?>
        <!-- Slides -->
        <div class="swiper-slide">
            <article class="card">

                <div class="card__picture">
                    <!-- srcset="./img/arrivals/01.jpg@2x.jpg 2x" -->
                    <img src="<?= $products[3] ?>" alt="Headphones">
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
                            <img src="./img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="./img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="./img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="./img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="./img/arrivals/Star Icon.svg" alt="star">

                        </div>

                        <div class="card__title">
                            <?= $products[1] ?>
                        </div>

                        <div class="card__price">
                            <?= $products[2] ?>.99$
                        </div>
                </div>

                <a href="#!" class="card__link"></a>

            </article>
        </div>

        <?php } ?>
    </div>
    <!-- If we need pagination -->
    <!-- <div class="swiper-pagination"></div> -->
</div>

<!-- 3:47:00 -->

        </div>
    </div>
</section>

<!-- 4:16:31 -->
		
<section class="collection">
    <div class="container">

        <div class="collection__title">
            <h2 class="headline-4">Коллекция магазина</h2>
        </div>

        <div class="collection__grid">
            <div class="plate plate--tall plate--01">

                <div class="plate__content">
                    <h3 class="plate__title"> Наушники</h3>
                    <a href="public/collection.php" class="plate__link">Коллекция<img src="./img/collection/arrow-right.svg" alt=""></a>
                </div>

            </div>

            <div class="plate plate--02">

                <div class="plate__content">
                    <h3 class="plate__title"> Наушники-вкладыши</h3>
                    <a href="public/collection.php" class="plate__link">Коллекция <img src="./img/collection/arrow-right.svg" alt=""></a>
                </div>

            </div>

            <div class="plate plate--03">

                <div class="plate__content">
                    <h3 class="plate__title"> Акссесуары</h3>
                    <a href="public/collection.php" class="plate__link">Коллекция <img src="./img/collection/arrow-right.svg" alt=""></a>
                </div>

            </div>
        </div>

    </div>

</section>




<div class="bestseller" id="bestseller">
    <div class="container">
        <div class="bestseller__title">
            <h2 class="headline-4">Топ продаж</h2>
        </div>

        <div class="bestseller__cards">

        <?php foreach($rows as $best) {?>
            <article class="card">

                <div class="card__picture">
                    <img src="<?= $best[3]; ?>"  alt="Headphones">
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

                        
                            <img src="./img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="./img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="./img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="./img/arrivals/Star Icon.svg" alt="star">
                        
                            <img src="./img/arrivals/Star Icon.svg" alt="star">
                        

                    </div>

                    <div class="card__title">
                        <?= $best[1]; ?>
                    </div>

                    <div class="card__price">
                        $<?= $best[2]; ?>
                    </div>
                </div>

                <a href="#!" class="card__link"></a>

            </article>    

            <?php } ?>

        </div>
    </div>
</div>

<section class="promotion" id="promotion_rem">
    <div class="promotion__container">
        <div class="promotion__content">

            <div class="promotion__desc">
                <p class="promotion__taglin">PROMOTION</p>
                <h2 class="promotion__title">Hurry up! 40% OFF</h2>
                <div class="promotion__text">
                    <p>Thousands of high tech are waiting for you</p>
                </div>  
            </div>

            <div class="promotion__timer"> 
                <p class="promotion__expire">Offer expires in:</p> 
                <div class="timer" id="timer_rem">
    <div class="timer__el">
        <div class="timer__value" id="days"></div>
        <div class="timer__desc"> Days</div>
    </div>

    <div class="timer__el">
        <div class="timer__value" id="hours"></div>
        <div class="timer__desc"> Hours</div>
    </div>

    <div class="timer__el">
        <div class="timer__value" id="minutes"></div>
        <div class="timer__desc"> Minutes</div>
    </div>

    <div class="timer__el">
        <div class="timer__value" id="seconds"></div>
        <div class="timer__desc"> Seconds</div>
    </div>

</div>

<!-- 6:25:32 -->
                


            </div> 

            <div class="promotion__btn">
                <a href="" class="promotion__link btn btn--small">Shop now</a>
            </div>


        </div>
    </div>
</section>

<section class="values">
    <div class="container">
        <div class="values__row">
            <div class="value">

                <img class="value__img" src="./../../img/info-card/shipping.svg" alt="">
                <h4 class="value__title">Free Shipping</h4>
                <p class="value__desc">Order above $200</p>

            </div>

            <div class="value">

                <img class="value__img" src="./../../img/info-card/finance.svg" alt="">
                <h4 class="value__title">Free Shipping</h4>
                <p class="value__desc">Order above $200</p>

            </div>

            <div class="value">

                <img class="value__img" src="./../../img/info-card/lock.svg" alt="">
                <h4 class="value__title">Free Shipping</h4>
                <p class="value__desc">Order above $200</p>

            </div>

            <div class="value">

                <img class="value__img" src="./../../img/info-card/call.svg" alt="">
                <h4 class="value__title">Free Shipping</h4>
                <p class="value__desc">Order above $200</p>

            </div>
        </div>
    </div>
</section>

<section class="newsletter">
    <div class="newsletter__content">
        <h2 class="newsletter__title headline-4">Join Our Newsletter</h2>
        <p class="newsletter__desc">Sign up for deals, new products and promotions</p>


        <form action="vendor/create_email.php" class="form-newsletter" method="post">
            <img src="./../img/newsletter/Union.svg" alt="">
            <input type="text" class="form-newsletter__input" placeholder="example123@gmail.com" id="email" name="email" required>
            <button type="submit" class="form-newsletter__submit">Signup</button>
        </form>


    </div>
</section>




<?php include './public_html/footer.php'; ?>


    <script src="./js/index.bundle.js"></script>
    <script src="./js/index.js"></script>
	</body>
</html>