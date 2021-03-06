<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="utf-8">
    <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url')?>/css/bootstrap.css" rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> -->
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>
        <?php bloginfo( 'name')?>
    </title>

</head>

<body>

    <div class="container">
        <div id="row1" class="row">
            <header class="col-sm-12">
                <div id="logo">
                    <a href="<?php echo home_url()?>"><h1><?php bloginfo('name')?></h1>
                    <h4><?php bloginfo('description')?></h4>
                    Версія: <?php bloginfo('version')?></a>

                </div>
                <div class="search">
                    <form action="">
                        <input type="text" name="s" placeholder="пошук">
                        <button type="submit" class="btn btn-default">Пошук</button>

                    </form>
                </div>
            </header>

        </div>
        <div id="row2" class="row">
            <div id="nav" class="col-sm-12">
                <?php wp_nav_menu(array( 'theme_locale'=>'menu')); ?>
            </div>
        </div>
        <div id="row3" class="row">
            <div id="main" class="col-sm-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="article">
                    <div class="articleTitle">
                        <a href="<?php the_permalink()?>"> <b><?php the_title()?></b></a>
                        <?php the_time( 'j M Y в H:i'); ?>
                    </div>
                    <div class="img-thumbnail">
                        <?php the_post_thumbnail()?>
                    </div> <span> <p><?php the_content() ?></p> </span>
                    <div class="foterArticle">
                        <hr>
                        <?php the_tags( 'Теги:&nbsp;') ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else:?>
                <div class="notarticle">
                    <?php the_post_thumbnail()?> Статтів немає!!!
                </div>
                <?php endif; ?>
            </div>
            <div id="sidebar" class="col-sm-4">
                <div id="categorys">
                    <?php if ( ! dynamic_sidebar( 'sidebar') ) : ?>
                    <?php endif; ?>
                    <br>
                </div>
            </div>
            <br>
            <div id="sidebar" class="col-sm-4">
                <div id="category">
                    <div id="categoryTitle">
                        <h5><b>Нові записи</b></h5>
                    </div>
                    <div id="categorys">
                        <a href="#">Запис 1</a>
                        <br>
                        <a href="#">Запис 2</a>
                        <br>
                        <a href="#">Запис 3</a>
                        <br>
                        <a href="#">Запис 4</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div id="row4" class="row">
            <div id="footer" class="col-sm-12">
                <div class="col-sm-2">
                    <div class="aa">
                        <?php $massiv_vhodnih_parametrov=array( 'echo'=> false, 'items_wrap'=>'%3$s', 'depth' => 0,'after' => '', 'before'=> ''); print strip_tags (wp_nav_menu( $massiv_vhodnih_parametrov), '<a>');?>                     
                    </div>
                </div>
                <div class="col-sm-3">
                     <?php if ( ! dynamic_sidebar( 'footer') ) : ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-3">
                         <?php if ( ! dynamic_sidebar( 'page_footer') ) : ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-4">
                        <div class="search">
                           <form action="">
                               <input type="text" name="s" placeholder="пошук">
                            <button type="submit" class="btn btn-default">Пошук</button>
                               
                           </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>