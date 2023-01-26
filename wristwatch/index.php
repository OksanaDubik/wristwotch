<?php
include 'page/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.cdnfonts.com/css/post-no-bills-jaffna" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Playfair+Display:wght@600;700&display=swap"
          rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <title>Wristwatch</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles.scss">
</head>
<body>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="header__communication">
                <a href="tel:8(812)123-45-67" class="header__tel" aria-label="phone"></a>
                <span class="header__text">
                    8 (812) 123-45-67&nbsp;&nbsp;| Работаем 7&nbsp;&nbsp;дней в&nbsp;&nbsp;неделю&nbsp;&nbsp;| 9:00&nbsp;&mdash;&nbsp; 18:00
                </span>
            </div>
            <div class="header__login">
                <a href="#" class="header__input" aria-label="login-registration"></a>
                <span class="header__text">Войти&nbsp;/ Регистрация</span>
            </div>
            <form class="registration" action="action_page.php">
                <div class="registration__container">
                    <div class="header__form">
                        <h4>Регистрация</h4>
                        <button class="close">X</button>
                    </div>

                    <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
                    <hr>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Введите адрес электронной почты" name="email" required>

                    <label for="psw"><b>Пароль</b></label>
                    <input type="password" placeholder="Ввести пароль" name="psw" required>

                    <label for="psw-repeat"><b>Ввести пароль повторно</b></label>
                    <input type="password" placeholder="Ввести пароль повторно" name="psw-repeat" required>
                    <hr>

                    <p>Создавая учетную запись, вы соглашаетесь с нашими <a href="#">условиями</a></p>
                    <button type="submit" class="registerbtn">Регистрация</button>
                </div>

                <div class="registration__container signin">
                    <p>У вас уже есть аккаунт? <a href="#">Войти</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="header__logo ">
        <div class="container">
            <a class="link__logo" aria-label="logo">PORTEN</a>
            <details class="header__logo__reset">
                <summary>
                    <img src="images/header__navigation/menu.svg">
                </summary>
                <ul class="header__logo__menu">
                    <li class="list_reset"><a href="#" class="link__comment link__set"
                                              aria-label="comments">Понравилось</a></li>
                    <li class="list_reset"><a href="#" class="link__private link__set" aria-label="personal Area">личный
                            кабинет</a></li>
                    <li class="list_reset"><a href="#" class="link__tuning link__set" aria-label="sorting">настройки</a>
                    </li>
                </ul>
            </details>
            <a style="display: none" href="https://www.flaticon.com/ru/free-icons/" title=" иконки"> иконки от Google -
                Flaticon</a>

            <ul class="navigation__search">
                <li class="list_reset list__navigation">
                    <button class="link__basket btn__reset " aria-label="basket">
                        <img src="images/header__navigation/basket.svg" class="link__set" alt="basket">
                    </button>
                </li>
                <li class="list_reset list__navigation">
                    <button class="link__search btn__reset " aria-label="search">
                        <img src="images/header__navigation/search.svg" class="link__set" alt="">
                    </button>
                </li>
            </ul>
            <ul class="navigation">
                <li class="list_reset list__navigation"><a href="#" class="link__comment link__set"
                                                           aria-label="comments">Понравилось</a>
                </li>
                <li class="list_reset list__navigation"><a href="#" class="link__private link__set"
                                                           aria-label="personal Area">личный
                        кабинет</a>
                </li>
                <li class="list_reset list__navigation"><a href="#" class="link__tuning link__set" aria-label="sorting">настройки</a>
                </li>
                <li class="list_reset list__navigation">
                    <button class="link__basket btn__reset  btn__basket" aria-label="basket"><img
                                src="images/header__navigation/basket.svg" alt="basket"></button>
                </li>
                <li class="list_reset list__navigation">
                    <button class="link__search btn__reset btn__search" aria-label="search"><img
                                src="images/header__navigation/search.svg" alt=""></button>
                </li>
            </ul>
            <div class="cartContents__closed">

                <div class="nameProduct">наименование</div>
                <div class="amountContent">
                    <div class="add">+</div>
                    <div class="amount">0</div>
                    <div class="remove">-</div>
<div class="price">0</div>
                </div>
                <div class="sumTotal">0</div>
                <button class="closedBasket">X</button>
            </div>
        </div>
    </div>

</header>
<main>
    <section class="intel">
        <div class="container">
            <div class="intel__block">
                <div class="intel__logo">
                    <h1 class="intel__title">porten</h1>
                    <!--                    <hr>-->
                    <h3 class="intel__subtitle">санкт-петербург</h3>
                </div>
                <p class="intel__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus interdum purus,
                    est
                    tortor pulvinar ut&nbsp;in. Fringilla a&nbsp;diam enim sed justo, sed iaculis sagittis. Tortor id&nbsp;eu&nbsp;interdum
                    nec ut&nbsp;iaculis. Penatibus ullamcorper ultricies morbi ipsum sem metus pharetra, mi. Tortor nibh
                    magna feugiat id&nbsp;nunc, dui nisl viverra.
                </p>
            </div>
        </div>
    </section>
    <section class="intel__season">
        <div class="intel__season__left">
            <h2 class="season__title__left">сезон 2020/21</h2>
            <hr>
            <div class="season__cards">
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;TIMER</h4>
                   <div class="catalog__prices" data-price ="165000">
                       <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                   </div>
                </div>
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;JEWELRY1</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;BELTS</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intel__season__right" style="background-image: url(images/catalog/catalog.jpg);">
            <h2 class="season__title__right">Новая коллекция</h2>
            <hr>
            <form class="intel__form" action="page/new.html" target="_blank">
                <button class="intel__btn btn__reset btn__intel__reset">Каталог</button>
            </form>

        </div>
    </section>
    <section class="collection">
        <div class="collection__img"></div>
        <div class="collection__intel">
            <h2 class="collection__title">коллекция 2018</h2>
            <hr>

            <p class="collection__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non rutrum ornare
                ut&nbsp;mattis
                habitant dui arcu. Sagittis amet nunc ut&nbsp;neque quis nibh arcu. Vivamus vestibulum nisi et&nbsp;venenatis
                sed scelerisque magna consectetur. Amet convallis quis gravida facilisis vulputate. Faucibus
                facilisi
                habitasse ipsum interdum dictum aliquet. Velit quis ullamcorper pulvinar nulla malesuada integer.
                Aenean
                praesent viverra nulla nullam natoque volutpat curabitur auctor. Viverra viverra ullamcorper
                scelerisque
                risus dignissim egestas. Id&nbsp;aliquam a&nbsp;aliquam egestas leo orci pharetra sed diam.
            </p>

            <form class="intel__form" action="page/new.html" target="_blank">
                <button class="intel__btn btn__reset  ">посмотреть коллекцию</button>
            </form>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <h2 class="news__title">новые поступления</h2>
            <hr>
            <div class="news__cards">
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;ATHOS</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;ATHOS</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;ATHOS</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;ATHOS</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;ATHOS</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;ATHOS</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;ATHOS</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">165&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
                <div class="catalog__card">
                    <div class="product__image">
                        <img src="images/cards/watch.png" alt="product image">
                    </div>
                    <h4 class="catalog__name">Louis XVI&nbsp;ATHOS</h4>
                    <div class="catalog__prices">
                        <p class="catalog__price">265&nbsp;000 </p> <p>&nbsp;руб.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>

    <section class="footer__brands">
        <div class="container">
            <h2 class="footer__title">наши бренды</h2>
            <hr>
            <ul>
                <li class="logo__brands list_reset"><img src="images/benefits/brands.svg" alt="photo brand"></li>
                <li class="logo__brands list_reset"><img src="images/benefits/brands.svg" alt="photo brand"></li>
                <li class="logo__brands list_reset"><img src="images/benefits/brands.svg" alt="photo brand"></li>
                <li class="logo__brands list_reset"><img src="images/benefits/brands.svg" alt="photo brand"></li>
            </ul>
        </div>
    </section>
    <section class="subscribe">
        <div class="container">
            <div class="group__subscribe">
                <h4>О магазине</h4>
                <p class="descr__subscribe">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi&nbsp;semper
                    viverra nunc cursus tortor lectus nunc nulla nibh. Egestas amet consectetur vel vitae aliquam dictum
                    suspendisse. Lobortis eget consequat, tellus et&nbsp;et&nbsp;sed turpis. Pretium quisque vitae,
                    amet, porttitor odio ultricies massa pharetra leo. Et&nbsp;ipsum urna fames in&nbsp;sit mi&nbsp;ultrices
                    nisi, nunc.
                </p>
            </div>
            <div class="group__subscribe">
                <h4>Категории</h4>
                <div class="subscribe__btn">

                    <button data-url="page/new.html" class="btn__subscribe btn__reset">часы</button>
                    <button data-url="page/new.html" class="btn__subscribe btn__reset">браслеты</button>
                    <button data-url="page/new.html" class="btn__subscribe btn__reset">ремни</button>
                    <button data-url="page/new.html" class="btn__subscribe btn__reset">ювелирные изделия</button>
                    <button data-url="page/new.html" class="btn__subscribe btn__reset">запонки</button>
                </div>
            </div>
            <div class="group__subscribe">
                <h4>РАссылка</h4>
                <p class="distrib">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi&nbsp;semper viverra
                    nunc cursus tortor lectus nunc nulla nibh.
                </p>
                <div class="btns__distrib">
                    <form method="post" action="page/email.php">
                        <input class="mail__btn" placeholder="Ваша почта" type="email" name="address">
                        <button class="btn__distrib btn__reset" type="submit">ПОДПИСАТЬСЯ</button>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            <p class="copyright__text">&copy;&nbsp;2020 Все права защищены</p>
            <p class="copyright__info">Сделано Figma.info</p>
        </div>
    </section>

</footer>


<script src="script.js"></script>

</body>
</html>