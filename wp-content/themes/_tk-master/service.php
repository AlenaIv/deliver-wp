
<section class="services">
    <div class="container">
        <div class="row">
            <div class="our-serv">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1>We are small team doing big things!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligulo, intendum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
                </div>
                <div class="line col-md-12">
                </div>
                <?php
                $args = array('post_type' => 'services', 'posts_per_page' => -1);
                $loop = new WP_Query($args);
                if ($loop->have_posts()): ?>
                    <div class="all-serv">
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="single-service col-md-4">
                    <i class="fa fa-star-o"></i>
                    <h2><?php the_title() ?></h2>
                    <p><?php the_content() ?></p>
                    <a href="#">Find Out More</a>
                </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>