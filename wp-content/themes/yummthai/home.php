<?php
/*
    Template name: Главная страница
*/
get_header();
?>

<div class="head">
    <img class="main-img" src="<?php echo the_field('main_image') ?>" alt="image" />
    <img class="decor left" src="<?php echo the_field('left_decor') ?>" alt="image" />
    <img class="decor right" src="<?php echo the_field('right_decor') ?>" alt="image" />
    <div class="inner">
        <h1><?php echo the_field('head_title') ?></h1>
        <p>
            <?php echo the_field('head_description') ?>
        </p>
    </div>
</div>

<main class="container-fluid main">
    <div class="category">
        <span class="active">All</span>
        <span>Phuket</span>
        <span>Bangkok</span>
        <span>Phuket</span>
        <span>Samui</span>
    </div>

    <div class="news">
        <div class="top-news">
            <div class="row">
                <div class="col-md-6">
                    <a class="item-top" href="#">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/item-top.jpg' ?>"
                                alt="image" />
                        </div>
                        <div class="desc">
                            <h6>
                                Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                                Стоит Посетить
                            </h6>
                            <div class="info">
                                <span>
                                    <i>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                            alt="image">
                                    </i>
                                    Пхукет
                                </span>
                                <span> 2 июля </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a class="item-top" href="#">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/item-top.jpg' ?>" alt="" />
                        </div>
                        <div class="desc">
                            <h6>
                                Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                                Стоит Посетить
                            </h6>
                            <div class="info">
                                <span>
                                    <i>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                            alt="image">
                                    </i>
                                    Пхукет
                                </span>
                                <span> 2 июля </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-12">
                <h3>Популярные статьи</h3>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#" class="item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                    </div>
                    <div class="desc">
                        <h6>
                            Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
                            Стоит Посетить
                        </h6>
                        <p>
                            Откройте для себя Таиланд: от оживленных городов до уединенных
                            пляжей. Исследуйте культурные достопримечательности, природные
                            чудеса и приключения, которые ждут вас в этой удивительной
                            стране.
                        </p>
                        <div class="info">
                            <span>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                        alt="image">
                                </i>
                                Пхукет
                            </span>
                            <span> 2 июля </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <nav aria-label="navigation">
        <ul class="pagination">
            <li class="page-item arrow">
                <a class="page-link" href="#" aria-label="Previous">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 19L5 12L12 5" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item arrow">
                <a class="page-link" href="#" aria-label="Next">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 5L19 12L12 19" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

    <div class="cards-wrap">
        <h3>Туры и экскурсии по теме</h3>
        <div class="cards">
            <div class="item">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>"
                                    alt="image" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"> <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>"
                                    alt="image" /> </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>"
                                    alt="image" /> </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-right.svg' ?>" alt="image">
                    </div>
                    <div class="swiper-button-prev">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-left.svg' ?>" alt="image">
                    </div>
                </div>
                <a href="#" class="desc">
                    <span class="location">
                        <i>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                alt="image">
                        </i>
                        Пхукет
                    </span>
                    <h6>Као-Лак: бухта Пханг-Нга и остров Джеймса Бонда на лодке</h6>
                    <div class="bottom">
                        <div class="desc-item">
                            Adult:
                            <span>2600 ฿</span>
                        </div>
                        <div class="desc-item">
                            Children 3-11:
                            <span>2200 ฿</span>
                        </div>
                        <div class="desc-item">
                            <p>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/star.svg' ?>"
                                        alt="image">
                                </i>
                                4.86
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"> <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>"
                                    alt="" /> </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>"
                                    alt="" /> </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-right.svg' ?>" alt="image">
                    </div>
                    <div class="swiper-button-prev">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-left.svg' ?>" alt="image">
                    </div>
                </div>
                <a href="#" class="desc">
                    <span class="location">
                        <i>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                alt="image">
                        </i>
                        Пхукет
                    </span>
                    <h6>Као-Лак: бухта Пханг-Нга и остров Джеймса Бонда на лодке</h6>
                    <div class="bottom">
                        <div class="desc-item">
                            Adult:
                            <span>2600 ฿</span>
                        </div>
                        <div class="desc-item">
                            Children 3-11:
                            <span>2200 ฿</span>
                        </div>
                        <div class="desc-item">
                            <p>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/star.svg' ?>"
                                        alt="image">
                                </i>
                                4.86
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"> <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>"
                                    alt="" /> </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>"
                                    alt="" /> </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-right.svg' ?>" alt="image">
                    </div>
                    <div class="swiper-button-prev">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-left.svg' ?>" alt="image">
                    </div>
                </div>
                <a href="#" class="desc">
                    <span class="location">
                        <i>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                alt="image">
                        </i>
                        Пхукет
                    </span>
                    <h6>Као-Лак: бухта Пханг-Нга и остров Джеймса Бонда на лодке</h6>
                    <div class="bottom">
                        <div class="desc-item">
                            Adult:
                            <span>2600 ฿</span>
                        </div>
                        <div class="desc-item">
                            Children 3-11:
                            <span>2200 ฿</span>
                        </div>
                        <div class="desc-item">
                            <p>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/star.svg' ?>"
                                        alt="image">
                                </i>
                                4.86
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"> <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>"
                                    alt="" /> </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg' ?>"
                                    alt="" /> </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-right.svg' ?>" alt="image">
                    </div>
                    <div class="swiper-button-prev">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-left.svg' ?>" alt="image">
                    </div>
                </div>
                <a href="#" class="desc">
                    <span class="location">
                        <i>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                alt="image">
                        </i>
                        Пхукет
                    </span>
                    <h6>Као-Лак: бухта Пханг-Нга и остров Джеймса Бонда на лодке</h6>
                    <div class="bottom">
                        <div class="desc-item">
                            Adult:
                            <span>2600 ฿</span>
                        </div>
                        <div class="desc-item">
                            Children 3-11:
                            <span>2200 ฿</span>
                        </div>
                        <div class="desc-item">
                            <p>
                                <i>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/star.svg' ?>"
                                        alt="image">
                                </i>
                                4.86
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>