<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
	<?php wp_head(); ?>
</head>
<body>
    <header class="header_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flex space_between">
                    <div class="logo">
                        LOGO
                    </div>
                    <div class="main_menu">
                        <ul class="menu_ul">
                            <li>COMPANY</li>
                            <li>PRODUCTS</li>
                            <li>BUY</li>
                            <li>SUPPORT</li>
                            <li>CONTACTS</li>
                            <li class="search_input">
                                <input type="text" id="search_input">
                                    <button type="submit" name="button">
                                        <img  id="search_img" src="<?php echo get_template_directory_uri() . '/assets/img/search-24px.svg'?>" alt="">
                                    </button>
                            </li>
                        </ul>
                    </div>
                    <div class="burger">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/menu-button-of-three-horizontal-lines.svg'?> " alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile_menu">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 flex">
                    <ul class="mobile_menu_ul col-sm-6">
                        <li>COMPANY</li>
                        <li>PRODUCTS</li>
                        <li>BUY</li>
                        <li>SUPPORT</li>
                        <li>CONTACTS</li>
                    </ul>
                    <div class="mobile_product_menu_1 col-sm-6">
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/iconfinder_lamp_2023101.svg'?>" alt=""><span>LAMP</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/table-lamp.svg'?>" alt="">
                            <span>PROJECTORS</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/flashlight.svg'?>" alt="">
                            <span>BULB</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/lamp (1).svg'?>" alt="">
                            <span>OFFICE</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/theatre-light.svg'?>" alt="">
                            <span>CONCERT</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/switch-on.svg'?>" alt="">
                            <span>SWITCHERS</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
