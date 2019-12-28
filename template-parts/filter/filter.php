<form class="" action="index.html" method="post">
    <input type="range" name="cost" value="">
</form>

<form class="" action="" method="get">
    <input type="checkbox" name="dasd" value="">
</form>






<!--
<form class="" action="<?php get_template_directory_uri() . '/includes/filter/filter.php';?>" method="get">
    <label for="power">power</label>
    <input type="text" name="power" value="">
</form> -->






<div class="filter_categories">
    <?php $terms = get_terms( 'product-category' );
        foreach($terms as $term){?>
            <a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a><br>
        <?}
     ?>
</div>
