<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" id="search_input" class="search_input form-control" name="s"
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e( 'Search', 'udemy' ); ?>"/>
        <span class="input-group-btn">
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-search"></i></button>
        </span>
        <div id="search_img" class="search_img">
            fh
        </div>
    </div>
</form>

<!-- <div class="search_input">
    <input type="text" id="search_input">
        <button type="submit" name="button">
            <img  id="search_img" src="" alt="">
        </button><?php echo $unique_id; ?>
</div> -->
