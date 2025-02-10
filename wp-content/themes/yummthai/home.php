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
    <?php
    $selected_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';

    $args = [
        'post_type' => 'post',
        'posts_per_page' => 14,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    ];

    if (!empty($selected_category) && $selected_category !== 'all') {
        $args['category_name'] = $selected_category;
    }

    $query = new WP_Query($args);
    $posts = $query->posts;
    $categories = get_categories();
    ?>

    <div class="category">
        <a href="?category=all">
            <span class="<?= $selected_category === 'all' || $selected_category === '' ? 'active' : '' ?>"
                data-filter="all">
                <?php
                if (pll_current_language() === 'ru') {
                    echo esc_html__('Все', 'textdomain');
                } else {
                    echo esc_html__('All', 'textdomain');
                }
                ?>
            </span>
            <a />
            <?php foreach ($categories as $category): ?>
                <a href="?category=<?= esc_attr($category->slug); ?>">
                    <span data-filter="<?= esc_attr($category->slug); ?>"
                        class="<?= $selected_category == esc_attr($category->slug) ? 'active' : '' ?>">
                        <?= esc_html($category->name); ?>
                    </span>
                </a>
            <?php endforeach; ?>
    </div>


    <div class="news">
        <div class="top-news">
            <div class="row">
                <?php
                for ($i = 0; $i < min(2, count($posts)); $i++):
                    $post = $posts[$i];
                    $categories = get_the_category($post->ID);
                    ?>
                    <div class="col-md-6">
                        <a class="item-top" href="<?php echo get_permalink($post->ID); ?>"
                            data-category="<?php echo esc_attr($categories[0]->slug); ?>">
                            <div class="img">
                                <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                            </div>
                            <div class="desc">
                                <h6><?php echo get_the_title($post->ID); ?></h6>
                                <div class="info">
                                    <span>
                                        <i>
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                                alt="image">
                                        </i>
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </span>
                                    <span><?php echo get_the_date('j F', $post->ID); ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="row">
            <?php
            for ($i = 2; $i < count($posts); $i++):
                $post = $posts[$i];
                $categories = get_the_category($post->ID);
                ?>
                <div class="col-md-4 col-sm-6">
                    <a href="<?php echo get_permalink($post->ID); ?>" class="item"
                        data-category="<?php echo esc_attr($categories[0]->slug); ?>">
                        <div class="img">
                            <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                        </div>
                        <div class="desc">
                            <h6><?php echo get_the_title($post->ID); ?></h6>
                            <p><?php echo get_the_excerpt($post->ID); ?></p>
                            <div class="info">
                                <span>
                                    <i>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg' ?>"
                                            alt="image">
                                    </i>
                                    <?php echo esc_html($categories[0]->name); ?>
                                </span>
                                <span><?php echo get_the_date('j F', $post->ID); ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>

        <div class="pagination">
            <?php
            echo paginate_links([
                'total' => $query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                // 'prev_text' => '&laquo;',
                'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow-left-short.svg" alt="Prev">',
                // 'next_text' => '&raquo;',
                'next_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow-right-short.svg" alt="Prev">',
            ]);
            ?>
        </div>
    </div>

    <?php wp_reset_postdata(); ?>

    <!-- Тут должен быть слайдер над футером 
    <div class="cards-wrap">

    </div>
     -->
</main>

<?php
get_footer();
?>