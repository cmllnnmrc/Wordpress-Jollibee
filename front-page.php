<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile;
    else :
        echo "no more post";
    endif;

?>

<!-- <section class="food py--3">
    <div class="container">
        <div class="food__header flex justify--between align--center">
            <h2>Best Seller</h2>
            <span></span>
            <a href="<?php echo site_url('/best-seller')?>">View All</a>
        </div>
    </div>
    <div class="container with--overflow">
        <div class="food__wrapper">
            <div class="food__slider" id="bestseller">

            <?php
                $bestSeller = new WP_Query(
                    array(
                        'post_type' => 'foods',
                        'meta_query' => array(
                            array(
                                'key'       => 'category',
                                'value'     => 'Best Seller',
                                'compare'   => 'LIKE',
                            )
                        )
                    )
                )
            ?>

            <?php if($bestSeller->have_posts()) : while($bestSeller->have_posts()) : $bestSeller->the_post(); ?>

            <div class="food__slider__wrapper">
                <div class="inner">
                    <figure>
                        <img src="<?php echo get_field('image'); ?>" alt="" />
                    </figure>
                    <div class="content bg--accent text--center clr--light">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    </div>
                    <div class="price">
                        <p>Start at <br /><span><?php the_field('price'); ?></span></p>
                    </div>
                </div>
                <button class="btnAddtoCart"><i class="fa-solid fa-cart-shopping"></i>Add to Cart</button>
            </div>

            <?php endwhile;
                else: echo "<h1>No more Jollibee for you!</h1>";
                endif;
                wp_reset_postdata();
            ?>
    </div> 
</section>

<section class="food py--3">
    <div class="container">
        <div class="food__header flex justify--between align--center">
            <h2>Chicken Joy</h2>
            <span></span>
            <a href="<?php echo site_url('/chicken-joy')?>">View All</a>
        </div>
    </div>
    <div class="container with--overflow">
        <div class="food__wrapper">
            <div class="food__slider" id="chickenjoy">

            <?php
                $chickenJoy = new WP_Query(
                    array(
                        'post_type' => 'foods',
                        'meta_query' => array(
                            array(
                                'key'       => 'category',
                                'value'     => 'Chicken Joy',
                                'compare'   => 'LIKE',
                            )
                        )
                    )
                )
            ?>

            <?php if($chickenJoy->have_posts()) : while($chickenJoy->have_posts()) : $chickenJoy->the_post(); ?>

            <div class="food__slider__wrapper">
                <div class="inner">
                    <figure>
                        <img src="<?php echo get_field('image'); ?>" alt="" />
                    </figure>
                    <div class="content bg--accent text--center clr--light">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    </div>
                    <div class="price">
                        <p>Start at <br /><span><?php the_field('price'); ?></span></p>
                    </div>
                </div>
            </div>

            <?php endwhile;
                else: echo "<h1>No more Jollibee for you!</h1>";
                endif;
                wp_reset_postdata();
            ?>
    </div>
</section>

<section class="food py--3">
    <div class="container">
        <div class="food__header flex justify--between align--center">
            <h2>Yam Burger</h2>
            <span></span>
            <a href="<?php echo site_url('/yam-burger')?>">View All</a>
        </div>
    </div>
    <div class="container with--overflow">
        <div class="food__wrapper">
            <div class="food__slider" id="yamburger">

            <?php
                $yamBurger = new WP_Query(
                    array(
                        'post_type' => 'foods',
                        'meta_query' => array(
                            array(
                                'key'       => 'category',
                                'value'     => 'Yam Burger',
                                'compare'   => 'LIKE',
                            )
                        )
                    )
                )
            ?>

            <?php if($yamBurger->have_posts()) : while($yamBurger->have_posts()) : $yamBurger->the_post(); ?>

            <div class="food__slider__wrapper">
                <div class="inner">
                    <figure>
                        <img src="<?php echo get_field('image'); ?>" alt="" />
                    </figure>
                    <div class="content bg--accent text--center clr--light">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    </div>
                    <div class="price">
                        <p>Start at <br /><span><?php the_field('price'); ?></span></p>
                    </div>
                </div>
            </div>

            <?php endwhile;
                else: echo "<h1>No more Jollibee for you!</h1>";
                endif;
                wp_reset_postdata();
            ?>
    </div>
</section>

<section class="food py--3">
    <div class="container">
        <div class="food__header flex justify--between align--center">
            <h2>Breakfast</h2>
            <span></span>
            <a href="<?php echo site_url('/breakfast')?>">View All</a>
        </div>
    </div>
    <div class="container with--overflow">
        <div class="food__wrapper">
            <div class="food__slider" id="breakfast">

            <?php
                $breakfast = new WP_Query(
                    array(
                        'post_type' => 'foods',
                        'meta_query' => array(
                            array(
                                'key'       => 'category',
                                'value'     => 'Breakfast',
                                'compare'   => 'LIKE',
                            )
                        )
                    )
                )
            ?>

            <?php if($breakfast->have_posts()) : while($breakfast->have_posts()) : $breakfast->the_post(); ?>

            <div class="food__slider__wrapper">
                <div class="inner">
                    <figure>
                        <img src="<?php echo get_field('image'); ?>" alt="" />
                    </figure>
                    <div class="content bg--accent text--center clr--light">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    </div>
                    <div class="price">
                        <p>Start at <br /><span><?php the_field('price'); ?></span></p>
                    </div>
                </div>
            </div>

            <?php endwhile;
                else: echo "<h1>No more Jollibee for you!</h1>";
                endif;
                wp_reset_postdata();
            ?>
    </div>
</section>

<section class="food py--3">
    <div class="container">
        <div class="food__header flex justify--between align--center">
            <h2>Dessert</h2>
            <span></span>
            <a href="#">View All</a>
        </div>
    </div>
    <div class="container with--overflow">
        <div class="food__wrapper">
            <div class="food__slider" id="dessert">

            <?php
                $dessert = new WP_Query(
                    array(
                        'post_type' => 'foods',
                        'meta_query' => array(
                            array(
                                'key'       => 'category',
                                'value'     => 'Dessert',
                                'compare'   => 'LIKE',
                            )
                        )
                    )
                )
            ?>

            <?php if($dessert->have_posts()) : while($dessert->have_posts()) : $dessert->the_post(); ?>

            <div class="food__slider__wrapper">
                <div class="inner">
                    <figure>
                        <img src="<?php echo get_field('image'); ?>" alt="" />
                    </figure>
                    <div class="content bg--accent text--center clr--light">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    </div>
                    <div class="price">
                        <p>Start at <br /><span><?php the_field('price'); ?></span></p>
                    </div>
                </div>
            </div>

            <?php endwhile;
                else: echo "<h1>No more Jollibee for you!</h1>";
                endif;
                wp_reset_postdata();
            ?>
    </div>
</section> -->

<div class="cart">
    <div>
        <h2>Cart</h2>
        <button class="cartClose"><i class="fas fa-times"></i></button>
        <div class="cart__wrapper"></div>
    </div>
    <ul>
        <li>Total</li>
        <li id="total"></li>
    </ul>
</div>

<?php get_footer(); ?>