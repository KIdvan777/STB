<form class="" action="index.html" method="post">
    <input type="range" name="cost" value="">
</form>

<form class="" action="index.html" method="post">
    <input type="checkbox" name="dasd" value="">
</form>

<form class="" action="index.html" method="post">
    <label for="power">power</label>
    <input type="checkbox" name="power" value="">
    <?php if(isset($_GET['power'])){
        $power = $_GET['power'];

    } ?>

    <?php     $product_power_request = new WP_Query(array(
            'post_type' => 'product',
            'post_id' => 185
        ));
        // vardump($product_power_request); ?>
</form>

<div class="filter_categories">
    <?php $terms = get_terms( 'product-category' );
        foreach($terms as $term){?>
            <a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a><br>
        <?}
     ?>
</div>
