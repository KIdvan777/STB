<?php get_header(); ?>

    <h1><?php the_archive_title(); ?></h1>
    <?php $terms = get_terms( 'product-category' );

    // получаем ID термина на странице термина
    $term_id = get_queried_object_id();

    // получим ID картинки из метаполя термина
    $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );

    // ссылка на полный размер картинки по ID вложения
    $image_url = wp_get_attachment_image_url( $image_id, 'full' );

    // выводим картинку на экран
    echo '<img src="'. $image_url .'" alt="" />';


?>

<?php get_footer(); ?>
