<section class="work">
    <div class="container">
        <div class="row">
            <div class="portfolio">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <h1>Some of our latest work</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligulo, intendum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
                </div>
                <div class="col-md-2">
                </div>
                <?php
                $args = array('post_type' => 'works', 'posts_per_page' => -1);
                $loop = new WP_Query($args);
                if ($loop->have_posts()): ?>
                <div class="work-item">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-md-4">
                        <?php the_post_thumbnail( 'works' ) ?>
                        <h2><?php the_title() ?></h2>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>