<?php get_template_part('template-parts/template-headers/headers');?>
<!-- SECTION TOP HITS -->
    <section class="top_hits_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top_hits_heading flex space_between">
                        <div class="top_hits_head">
                            <?php the_title(); ?>
                        </div>
                    </div>
                    <div class="top_hits_line">
                    </div>
                    <div class="top_hits flex">
                        <div class="top_hits_item col-lg-2 col-md-4 col-sm-6">
                            <div class="top_hits_item__img">
                                <?php 	stb_post_thumbnail(); ?>
                            </div>
                            <div class="top_hits_item__span">
                                <span>
                                    <?php the_title(); ?>
                                </span>
                            </div>
                            <div class="top_hits_item_overlay">
                                <div class="top_hits_item_overlay_link">
                                    <a href="<?php the_permalink(); ?>">
                                        подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product_properties">
                            <?php the_field('power');?>: ВАТТ <br>
                            <?php the_field('connect_type');?> <br>
                            <?php the_field('color_temperature');?>
                            <?php the_field('current_strength');?> <br>
                            <?php the_field('voltage');?> <br>
                            <?php the_field('frequency');?>
                            <?php the_field('light_flow');?> <br>
                            <?php the_field('type_of_light_source');?> <br>
                            <?php the_field('energy_efficiency_class');?>
                            <?php the_field('service_life');?> <br>
                            <?php the_field('warranty_period');?> <br>
                            <?php the_field('height');?>
                            <?php the_field('diameter');?> <br>
                            <?php the_field('weight');?> <br>

                        </div>
                    </div>
    <?php wp_list_comments(array(
			'per_page' => 10, // Пагинация комментариев - по 10 на страницу
			'reverse_top_level' => false // Показываем последние комментарии в начале
		)); ?>
                </div>
            </div>
        </div>
    </section>




<?php get_template_part('template-parts/template-footers/footers');?>
