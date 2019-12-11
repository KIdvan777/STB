<!-- HERO SECTION -->
 <?php
    if( get_theme_mod('main_page_setting') == 'header 1' ){?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/last.jpg'?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <?
    }else if(get_theme_mod('main_page_setting') == 'header 2'){?>
        <section>
            <div class="hero_2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/last.jpg'?>" alt="">
            </div>
        </section>
    <?}else{?>
        <section>
            <div class="hero_3">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/last.jpg'?>" alt="">
            </div>
        </section>
    <?}
?>
