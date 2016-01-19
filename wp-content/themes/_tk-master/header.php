<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('&laquo', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <!--    <link href="-->
    <?php //bloginfo("template_directory"); ?><!--/css/bootstrap.min.css" rel="stylesheet" media="all"/>-->
    <!--    <link href="-->
    <?php //bloginfo("template_directory"); ?><!--/css/bootstrap-theme.min.css" rel="stylesheet" media="all"/>-->
    <!--    <link href="--><?php //bloginfo("template_directory"); ?><!--/css/main.css" rel="stylesheet"/>-->
    <!--    <script src="-->
    <?php //bloginfo("template_directory"); ?><!--/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->

<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,600,800,900' rel='stylesheet'
          type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('before'); ?>

<header>
    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <div class="col-md-6">
                        <a href="#">Deliver</a>
                    </div>
                    <div class="ico col-md-6">
                        <ul>
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-rss" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="main-menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="main-list nav navbar-nav">
                        <li class="active-1"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Archive</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Other pages</a></li>
                        <li><a href="#">Contact us</a></li>

                    </ul>
                    <ul class="search nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div class="slider">
        <!-- Wrapper for slides -->
        <?php
        $args = array('post_type' => 'slider', 'posts_per_page' => -1);
        $loop = new WP_Query($args);

        $q = count($loop->posts);

        if ($loop->have_posts()): ?>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <?php
                    for ($i = 1; $i < $q; $i++) {
                        echo '<li data-target="#carousel-example-generic" data-slide-to="' . $i . '"></li>';
                    }
                    ?>
                </ol>
                <div class="carousel-inner" role="listbox"><?php
                    $first = true;

                    while ($loop->have_posts()) : $loop->the_post();
                        if($first){
                            echo '<div class="item active">';
                            $first=false;
                        } else{
                            echo '<div class="item">';
                        }?>

                            <div class="intro row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <h1><?php the_title(); ?></h1>

                                    <p><?php the_content();?></p>
                                    <a class="button-1" href="#">portfolio</a>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>

                        <?php


                        the_post_thumbnail();
                        echo '</div>';



                    endwhile; ?>
                </div>
                <!-- Controls -->
                <a class="controls left carousel-control" href="#carousel-example-generic" role="button"
                   data-slide="prev">
                    <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="controls right carousel-control" href="#carousel-example-generic" role="button"
                   data-slide="next">
                    <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <?php endif;
        wp_reset_query(); ?>


    </div>


</header>