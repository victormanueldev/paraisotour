<?php get_header(); ?>
<!-- CONTENT -->
<section id="content" class="container">

    <div class="specials" style="width: fit-content; text-align: center;">
        <?php 
            if(have_posts()):
                while(have_posts()):
                    the_post();
                    $price = get_post_meta(get_the_ID(), 'precio-normal', true);
                    $tags = get_the_tags();
                    if($tags == ''):
        ?>
        <div class="box1 small">
            <h4><?php the_title(); ?></h4>
            <div class="header-box">
                <a href="<?php the_permalink(); ?>">
                    <div class="img-box" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>            
                </a>
            </div>
            <div class="body-box">
            <p>&nbsp;</p>
                <h1>COP $<?php echo $price; ?>  </h1>
                <p>POR PERSONA</p>
                <br>
                <b class="details">
                   <a href="<?php the_permalink()?>" class="details">VER DETALLES</a> 
                </b>
            </div>
        </div>
        <?php 
                    else:
        ?>
        <div class="box1 small">
            <h4><?php the_title(); ?></h4>
            <div class="header-box">
                <div class="box-desc">
                    <b> %   <?php 
                                /*
                                * Recorre todos los tags que contiene cada entrada
                                * IMPORTANTE: Debe ser un solo tag por entrada
                                */ 
                                foreach($tags as $tag ):
                                    //Imprime solo el valor del tag  
                                    echo $tag->name; 
                            ?>
                    </b>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <div class="img-box" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>            
                </a>
            </div>
            <div class="body-box">
               
                <p class="through">&nbsp; $<?php echo $price?></p>
                <h1>COP $<?php echo $price - (($price * $tag->name)/100); ?>  </h1>
                                <?php endforeach; ?>
                <p>POR PERSONA</p>
                <br>
                <b class="details">
                   <a href="<?php the_permalink()?>" class="details">VER DETALLES</a> 
                </b>
            </div>
        </div>
        <?php 
                    endif;
                endwhile;
            endif;
        ?>



    </div>
</section>
<?php get_footer(); ?>