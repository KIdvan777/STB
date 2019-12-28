<?php

function stb_filter_pre_get_product_posts( $query ){

    //  validate
    if(is_admin())
    {
       return;
    }

    // get original meta WP_Query

    $meta_query[] = $query->get('meta_query');

    //  allow the url to alter the $query
    //  eg: http://www.website.com/events?location=melbourne
    //  eg: http://www.website.com/events?location=sydney
    if( isset($_GET['power']))
    {
        $power = explode(',', $_GET['power']);
        // Add our meta query to the original meta queries
        $meta_query[] = array(
            'key'  => 'power',
            'value' => $power,
            'compare' => 'IN'
        );
    }

    // update the  meta query args
    $query->set('meta_query', $meta_query);

    // always return
    return;

}
