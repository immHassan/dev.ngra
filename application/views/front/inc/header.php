<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php base_url(); ?>assets/front/<?php echo base_url('uploads/settings/').$this->favicon;?>" rel="shortcut icon">

    <?php if(!empty($this->seo)):?> 
    <?php if(!empty($this->seo->seo_meta_description)):?>
      <meta name="description" content="<?php echo $this->seo->seo_meta_description;?>">
    <?php endif;?>
    <?php if(!empty($this->seo->seo_meta_title)):?>
      <meta name="title" content="<?php echo $this->seo->seo_meta_title;?>">
    <?php endif;?>
    <?php if(!empty($this->seo->seo_meta_keyword)):?>
      <meta name="keywords" content="<?php echo $this->seo->seo_meta_keyword;?>">
    <?php endif;?>
    <?php if(!empty($this->seo->seo_meta_index)):?>
      <meta name="robots" content="<?php echo $this->seo->seo_meta_index;?>">
    <?php endif;?>
    <?php if(empty($this->seo->seo_meta_index)):?>
      <meta name="robots" content="noindex, nofollow">
    <?php endif;?>
    <?php if(!empty($this->seo->seo_meta_canonical)):?>
      <link rel="canonical" href="<?php echo $this->seo->seo_meta_canonical?>" />
    <?php endif;?>
    <?php if(!empty($this->seo->seo_page_title)):?>
      <title><?php echo $this->seo->seo_page_title?></title>
    <?php endif;?>

    <?php if(!empty($this->seo->seo_head_script)):?>
      <?php echo $this->seo->seo_head_script?>
    <?php endif;?>

    <?php else:?>
    <meta name="robots" content="noindex, nofollow">
    <title><?php echo $this->site_title?></title>
    <?php endif;?>    




    <!-- Css Files -->
    <link href="<?php base_url(); ?>assets/front/css/bootstrap.css" rel="stylesheet">
    <link href="<?php base_url(); ?>assets/front/css/font-awesome.css" rel="stylesheet">
    <link href="<?php base_url(); ?>assets/front/style.css" rel="stylesheet">
    <link href="<?php base_url(); ?>assets/front/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php base_url(); ?>assets/front/css/color.css" rel="stylesheet">
    <link href="<?php base_url(); ?>assets/front/css/dl-menu.css" rel="stylesheet">
    <link href="<?php base_url(); ?>assets/front/css/flexslider.css" rel="stylesheet">
    <link href="<?php base_url(); ?>assets/front/css/prettyphoto.css" rel="stylesheet">
    <link href="<?php base_url(); ?>assets/front/css/responsive.css" rel="stylesheet">


    <link href="<?php base_url(); ?>assets/front/custom/toastr/css/toastr.css" rel="stylesheet">
    
    <link href="<?php base_url(); ?>assets/front/custom/ci_validation/css/validation.css" rel="stylesheet">



</head>
<body>
    <?php    
        function prepareList(array $items, $pid = 0) {
            $output = array();
        
            foreach ($items as $item) {
                if ((int) $item['header_navbar_parent_id'] == $pid) {
                    if ($children = prepareList($items, $item['header_navbar_id'])) {
                        $item['children'] = $children;
                    }
                    $output[] = $item;
                }
            }
            return $output;
        }
        $tree = prepareList($this->header_navbar);
    ?>


    <!--// Main Wrapper \\-->
    <div class="ec-main-wrapper">
        <div class="ec-loading-section"><div class="ball-scale-multiple"><div></div><div></div><div></div></div></div>
        <!--// Main Header \\-->
        <header id="ec-header">
            <!--// TopSection \\-->
            <div class="ec-top-strip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="ec-strip-info">
                                <li><i class="fa fa-phone"></i> +00 123 456 789</li>
                                <li><i class="fa fa-map-marker"></i> Brooklyn, NY 10036, United States</li>
                                <li><i class="fa fa-envelope-o"></i> <a href="#">info@example.com</a></li>
                            </ul>
                            <div class="ec-login-section">
                                <a href="#" class="ec-login-section-btn ec-bgcolor" data-toggle="modal" data-target="#ModalLogin"><i class="fa fa-user"></i> Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopSection \\-->
            <!--// Main Header \\-->
            <div class="ec-main-navsection">
                <div class="container">
                    <div class="row align-items-center">
                        <a href="#" class="ec-logo"><img src="<?php echo base_url('uploads/settings/').$this->header_logo;?>" style="width: 200px; height: 100px;" alt=""></a>
                        <div class="ec-right-section">
                            <nav class="ec-navigation">
                                <ul>

                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="#!">About us</a></li>
                                    <li><a href="#!">News</a></li>
                                    <li><a href="#!">Results</a></li>
                                    <li><a href="#!">Rules</a></li>
                                    <li><a href="#!">Schedule</a></li>
                                    <li><a href="#!">Gallery</a></li>
                                    <li><a href="#!">Contact</a></li>
                                </ul>
                            </nav>
                            <!--// Responsive Menu //-->
                            <div id="as-menu" class="as-menuwrapper">
                                <button class="as-trigger">Open Menu</button>
                                <ul class="as-menu">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">about</a></li>
                                    <li><a href="service.html">service</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul class="as-submenu">
                                            <li><a href="blog-grid.html">blog Grid Simple</a></li>
                                            <li><a href="blog-grid-modren.html">blog Grid Modren</a></li>
                                            <li><a href="blog-medium.html">blog Medium</a></li>
                                            <li><a href="blog-detail.html">blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Gallery</a>
                                        <ul class="as-submenu">
                                            <li><a href="gallery-static.html">Simple Gallery</a></li>
                                            <li><a href="gallery-static-twcol.html">Simple Gallery 2Column</a></li>
                                            <li><a href="gallery-static-thcol.html">Simple Gallery 3Column</a></li>
                                            <li><a href="gallery-video.html">Video Gallery</a></li>
                                            <li><a href="gallery-video-thcol.html">Video Gallery 3Column</a></li>
                                            <li><a href="gallery-video-frcol.html">Video Gallery 4Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop</a>
                                        <ul class="as-submenu">
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="plyer-list-left-sbar.html">Shop List W/left/sidebar</a></li>
                                            <li><a href="shop-list-wsidebar.html">Shop List W/right/sidebar</a></li>
                                            <li><a href="shop-list-w-b-sidebar">Shop List W/both/sidebar</a></li>
                                            <li><a href="plyer-list-nosidebar.html">Shop List Wout/sidebar</a></li>
                                            <li><a href="shop-detail.html">shop detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">shortcode</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="as-submenu">
                                            <li><a href="price-plane.html">Price Plans</a></li>
                                            <li><a href="booking.html">booking Form</a></li>
                                            <li><a href="#">Team</a>
                                                <ul class="as-submenu">
                                                    <li><a href="team-grid.html">team</a></li>
                                                    <li><a href="team-detail.html">team detail</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shortcode</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="undercunstruction.html">UnderConstruction</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">contact us</a></li>
                                </ul>
                            </div>
                            <!--// Responsive Menu //-->
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Header \\-->
        </header>
        <!--// Main Header \\-->


