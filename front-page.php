<?php
/**
 * The template for displaying the landing page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anthonys
 */

get_header();
?>

<div class="blur"></div>

<img class=" leaf leaf-1" src="<?= get_template_directory_uri()?>/img/leaf.png" alt="A basil leaf">
<img class=" leaf leaf-2" src="<?= get_template_directory_uri()?>/img/leaf-right.png" alt="A basil leaf">
<img class=" leaf leaf-3" src="<?= get_template_directory_uri()?>/img/leaf.png" alt="A basil leaf">

<section class="hero">
    <div class="container">
        <h2>Make your awesome recipes more awesome</h2>
        <p>A home-sweet-home for your tasty treats. Share your finger-licking recipes with our community and we will make it better than ever!</p>
        <button>Get Started</button>
    </div>
    <img class="salad-bowl" src="<?= get_template_directory_uri()?> /img/salad-bowl.webp" alt="A healthy salad bowl">
</section>

<section class="fun">
    <div class="fun-bg"></div>
    <div class="container">
        <h2>We put the fun in <span>Fondue</span></h2>
        <p>Not just your regular blogging site. Participate in exciting food quizzes and get a chance to win a food hamper from Anthony!</p>
        <button>Win Exciting Gifts</button>
        <div class="relative">
            <img class="soup-bowl" src="<?= get_template_directory_uri()?>/img/soup-bowl.webp" alt="A bowl of soup with soup spilling out in a curved shaped.">
            <span class="bowl-shadow"></span>
        </div>
    </div>
</section>

<section class="featured relative">
    <div class="featured-bg"></div>
    <div class="container">
        <?php 
           $args = array(
            'post_type' => 'featured_recipe',
            'posts_per_page' => 1,
           );

           $featured_recipe = new WP_Query($args);

           if($featured_recipe->have_posts()):
                $featured_recipe->the_post();
                // var_dump($featured_recipe);

                $name = get_field('recipe_name');
                $content = get_field('recipe_content');
                $image = get_field('image');
                $size = 'full';
        ?>
        <h2>Featured recipe of the week</h2>
        <p><?= $content; ?></p>
        <button>Try it now!</button>
        <?php
            if($image) {
                echo wp_get_attachment_image($image, $size, false, array('class' => 'thali'));
            };
        ?>
        <svg class="curved-text" viewBox="0 0 300 300">
        <path id="curve" d="M73.2,148.6c4-6.1,59-87.2,162-86.04c100.17,1.08,153.72,81.27,157.59,87.3"/>
        <text width="500">
            <textPath alignment-baseline="top" xlink:href="#curve">
            <?= $name; ?>
                </textPath>
            </text>
        </svg>
        <!-- <img class="thali" src="<?= get_template_directory_uri() ?>/img/paneer-dish.webp" alt="A thali of panner butter masala served with naan and onions."> -->
        <?php
            wp_reset_postdata();
        ?>
        <?php else:
            echo '<p>Nothing to show here</p>';
        endif;
        ?>
    </div>
</section>

<section class="newsletter">
    <div class="container">
        <h2>The nugget newsletter</h2>
        <p>Get the weekly digest straight to your email so you don't miss out on what's happening in the community. subscribe to our nugget newsletter now!</p>
    </div>
    <div class="form-group relative">
        <img class="toast" src="<?=get_template_directory_uri()?>/img/newsletter.webp" alt="Image">
        <div class="form">
            <div class="name"><span>Name</span></div>
            <div class="email"><span>Email</span></div>
            <button class="signup">Sign Up</button>
        </div>
    </div>
</section>

<section class="socials relative">
    <div class="socials-bg"></div>
    <div class="container">
        <div class="social-links">
            <h2>Your recipes deserve to be seen</h2>
            <p>Let yur recipes get popular as we upload them on our social meida. Don't forget to give us a follow!</p>
            <div class="links"></div>
        </div>
        <div class="hello">
            <h2>Anthony says, "Hello"</h2>
            <p>"As the owner of Anthony's, I'm passionate about food and cooking, and I believe that great meals bring people together. that's why I created this blog &hyphen; to share my love of cooking and bring together a community of like-minded foodies."</p>
            <p>"At Anthony's, we value transparency and honesty. that's why we always provide honest reviews of the products and ingredients we use in our recipes. we believe in earning your trust and loyalty by being upfront and truthful about the products we recommend." </p>
        </div>
    </div>
</section>

<section class="testimonials">
    <h2>A word from the readers</h2>
    <div class="card-group">
    <?php
        global $wpdb;

        // $table_name = $wpdb->prefix . 'testimonials';
        $query = "SELECT * FROM testimonials";
        $results = $wpdb->get_results($wpdb->prepare($query), OBJECT);

        if($results):
            // echo "yes";
            foreach($results as $row):
                $testimonial_content = $row->content;
                $user_name = $row->user_name;
                $review_date = $row->date;
    ?>
            <div class="card">
                <p><?= $user_name; ?></p>
                <p><?= $testimonial_content; ?></p>
                <span><?=$review_date;?></span>
            </div>
    <?php
        endforeach;
        endif;
    ?>
    </div>
</section>

<?php
get_footer();
?>