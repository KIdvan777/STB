<!-- HERO SECTION -->
 <?php
    if( get_theme_mod('main_page_hero_choices_setting') == 'hero 1' ){?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 owl-carousel">
                        <div class="hero">
                        <img src="<?php echo get_theme_mod('main_page_hero_image_1_setting');?>" alt="">
                        </div>
                        <div class="hero">
                        <img src="<?php echo get_theme_mod('main_page_hero_image_1_setting');?>" alt="">2
                        </div>
                        <div class="hero">
                        <img src="<?php echo get_theme_mod('main_page_hero_image_1_setting');?>" alt="">3
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <?
    }else if(get_theme_mod('main_page_hero_choices_setting') == 'hero 2'){?>
        <section>
            <div class="hero_2">
                <img src="<?php echo get_theme_mod('main_page_hero_image_1_setting');?>" alt="">
            </div>
        </section>
    <?}else{?>
        <section>
            <div class="hero_3">
                <img src="<?php echo get_theme_mod('main_page_hero_image_1_setting');?>" alt="">
            </div>
        </section>
    <?}
?>
