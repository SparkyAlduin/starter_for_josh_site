<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->

    <section class="container-fluid aboutbg text-center">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

        </div> <!-- container -->
        <div class="blocker"></div>
    </section>

    <section class="container-fluid">

        <div class="container">

            <div class="row">
                <!-- a row that gives us access to the BS columns -->
                <div>
                    <h3><?php the_field('titleforarticles'); ?></h3>
                </div>
                <div class="row">
                    <!-- spacing between Latest Articles and 3-content -->

                    <div class="col-md-4">
                        <img class="img-fluid" alt="portait" src="<?php the_field('articleimageone');?>">

                        <h4 class="article-title"><?php the_field('articletitleone'); ?></h4>
                        <p class="date" ><?php the_field('articledateone'); ?></p>
                        <p class="article-p"><?php the_field('articleexcerptone'); ?> </p>
                        <a href="<?php the_field('readmoreone'); ?>" class="readmore">CONTINUE READING</a>

                    </div> <!-- col-md-4 -->

                    <div class="col-md-4">
                        <img class="img-fluid" alt="portait" src="<?php the_field('articleimagetwo');?>">

                        <h4 class="article-title"><?php the_field('articletitletwo'); ?></h4>
                        <p class="date" ><?php the_field('articledatetwo'); ?></p>
                        <p class="article-p"><?php the_field('articleexcerpttwo'); ?> </p>
                        <a href="<?php the_field('readmoretwo'); ?>" class="readmore">CONTINUE READING</a>

                    </div> <!-- col-md-4 -->

                    <div class="col-md-4">
                        <img class="img-fluid" alt="portait" src="<?php the_field('articleimagethree');?>">

                        <h4 class="article-title"><?php the_field('articletitlethree'); ?></h4>
                        <p class="date" ><?php the_field('articledatethree'); ?></p>
                        <p class="article-p"><?php the_field('articleexcerptthree'); ?> </p>
                        <a href="<?php the_field('readmorethree'); ?>" class="readmore">CONTINUE READING</a>

                    </div> <!-- col-md-4 -->

                </div>

            </div> <!-- row -->

        </div> <!-- container -->

    </section> <!-- container fluid -->
    <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->