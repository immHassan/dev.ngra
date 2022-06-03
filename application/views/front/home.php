



<?php if(isset($banner)){ ?>
        <!--// Main Banner \\-->
        <div class="ec-mainbanner">
            <div class="flexslider">
                <ul class="slides">





			<?php foreach($banner as $record){ ?>
			
				
		


					<li>
                        <img src="<?= base_url('uploads/banner/').$record['banner_image'];?>" alt="">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <div class="clearfix"></div>
                                    <h1><?= isset($record['banner_heading'])?$record['banner_heading']:'' ;?></h1>
                                    <p><?= isset($record['banner_paragraph'])?$record['banner_paragraph']:'' ;?></p>
                                    <a href="#" style="background-color:<?= isset($record['banner_button_color'])?$record['banner_button_color']:'#b30007' ;?>"	class="ec-bgcolor"><?= isset($record['banner_button_text'])?$record['banner_button_text']:'' ;?></a>
                                </div>
                                <div class="ec-caption-image"> <img src="extra-images/banner-static.png" alt=""> </div>
                            </div>
                        </div>
                    </li>


					<?php	} ?>
					
                </ul>
            </div>
        </div>

	<?php } ?>
        <!--// Main Banner \\-->
        <!--// Main Content \\-->
        <div class="ec-main-content">
            <!--// Main Section \\-->
            <div class="ec-main-section ec-newsticker-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-newsticker">
                                <span class="ec-color"><small>Latest News</small></span>
                                <ul id="ec-news">
                                    <li><a href="#">May 29, 2022 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                    <li><a href="#">May 29, 2022 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                    <li><a href="#">May 29, 2022 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                    <li><a href="#">May 29, 2022 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section ec-promofull">
                <div class="container">
                    <div class="row">
                        <!--// Match Fixture \\-->
                        <div class="col-md-12">
                            <div class="ec-table-point">
                                <ul class="ec-table-head">
                                    <li>
                                        <div class="ec-cell">Pos</div>
                                        <div class="ec-cell">Name</div>
                                        <div class="ec-cell">Hometown</div>
                                        <div class="ec-cell">Points</div>
                                    </li>
                                </ul>
                                <ul class="ec-table-list">
                                    <li>
                                        <div class="ec-cell">1</div>
                                        <div class="ec-cell">Colby Sheppard</div>
                                        <div class="ec-cell">Williamsville, IL</div>
                                        <div class="ec-cell">232</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">2</div>
                                        <div class="ec-cell">Dakota Ewing</div>
                                        <div class="ec-cell">Warrensburg, IL</div>
                                        <div class="ec-cell">224</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">3</div>
                                        <div class="ec-cell">Colby Eller</div>
                                        <div class="ec-cell">Taylorville, IL</div>
                                        <div class="ec-cell">210</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">4</div>
                                        <div class="ec-cell">Eric Doran</div>
                                        <div class="ec-cell">Clinton, IL</div>
                                        <div class="ec-cell">196</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">Dalton Ewing</div>
                                        <div class="ec-cell">Decatur, IL</div>
                                        <div class="ec-cell">192</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">6</div>
                                        <div class="ec-cell">Ryan Miller</div>
                                        <div class="ec-cell">Lincoln, IL</div>
                                        <div class="ec-cell">188</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">7</div>
                                        <div class="ec-cell">Rockett Bennett</div>
                                        <div class="ec-cell">Argenta, IL</div>
                                        <div class="ec-cell">176</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">8</div>
                                        <div class="ec-cell">Brandon Miller</div>
                                        <div class="ec-cell">Broadwell, IL</div>
                                        <div class="ec-cell">174</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">9</div>
                                        <div class="ec-cell">Braden Johnson</div>
                                        <div class="ec-cell">Taylorville, IL</div>
                                        <div class="ec-cell">110</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">Brandon Sweitzer</div>
                                        <div class="ec-cell">Lincoln, IL</div>
                                        <div class="ec-cell">78</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section ec-full-parallexbg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-parallex-info">

                                <span><?=   isset($homepage->homepage_section_2_main_heading)?$homepage->homepage_section_2_main_heading:'' ;?></span>
                                <h2><?=   isset($homepage->homepage_section_2_sub_heading)?$homepage->homepage_section_2_sub_heading:'' ;?></h2>
                                <p><?=   isset($homepage->homepage_section_2_paragraph)?$homepage->homepage_section_2_paragraph:'' ;?></p>
                                <a href="#" class="ec-default-button"><?=   isset($homepage->homepage_section_2_button_text)?$homepage->homepage_section_2_button_text:'' ;?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            
            <!--// Main Section \\-->
            <!--// Main Section \\-->






            <div class="ec-main-section blog-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-simple-title">
                                <h2><?=   isset($homepage->homepage_section_3_main_heading)?$homepage->homepage_section_3_main_heading:'' ;?></h2>
                                <p><?=   isset($homepage->homepage_section_3_paragraph)?$homepage->homepage_section_3_paragraph:'' ;?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-blog ec-blog-grid">
                                <ul class="row">
								<?php foreach($news as $record){ ?>


                                    <li class="col-md-4">
                                        <div class="ec-blog-wrap">
                                            <figure>
                                                <a href="#"><img src="<?= base_url('uploads/news/').$record['news_image'];?>" alt=""></a> <span class="ec-featured-star ec-bgcolor"><i class="fa fa-star"></i></span></figure>
                                            <div class="ec-blog-text">
                                                <h2><a href="#"><?= $record['news_title']; ?></a></h2>
                                                <div class="ec-grid-time">
                                                    <span><i class="fa fa-clock-o"></i> <?= timeago($record['news_created_at']); ?></span>
                                                    <a href="#" class="fa fa-angle-right"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                              


									
									



								<?php	} ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section blog-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-simple-title">
                                <h2><?=   isset($homepage->homepage_section_4_main_heading)?$homepage->homepage_section_4_main_heading:'' ;?></h2>
                                <p><?=   isset($homepage->homepage_section_4_paragraph)?$homepage->homepage_section_4_paragraph:'' ;?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-team ec-team-grid">
                                <ul class="row">





								<?php if(isset($team_member)): foreach($team_member as $record): ?>





                                    <li class="col-md-3">
                                        <div class="ec-team-wrap">
                                            <figure>
                                                <a href="#"><img src="<?= base_url('uploads/team_member/').$record['team_member_image'];?>" alt=""></a>
                                            </figure>
                                            <div class="ec-team-info">
                                                <div class="ec-forinfo">
                                                    <h3><a href="#"><?= $record['team_member_name']; ?></a></h3>
                                                    <small><?= $record['team_member_designation']; ?></small>
                                                </div>
                                                <span class="ec-goal-counter ec-bgcolor">06</span>
                                                <span class="ec-plyer-info">Born August 31, 1988 <br> <?= $record['team_member_location']; ?></span>
                                            </div>
                                        </div>
                                    </li>
                                  
									<?php  endforeach; endif;  ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section blog-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-testimonial flexslider">
                                <ul class="slides">


								<?php if(isset($testimonial)): foreach($testimonial as $record): ?>


                                    <li>
                                        <div class="ec-testimonial-wrap">
                                            <h2><?= $record['testimonial_title']; ?></h2>
                                            <p><?= $record['testimonial_description']; ?></p>
                                            <img src="<?= base_url('uploads/testimonial/').$record['testimonial_image'];?>" alt="">
                                            <span><?= $record['testimonial_name']; ?></span>
                                        </div>
                                    </li>


								<?php  endforeach; endif;  ?>

                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section blog-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-simple-title">
                                <h2><?=   isset($homepage->homepage_section_6_main_heading)?$homepage->homepage_section_6_main_heading:'' ;?></h2>
                                <p><?=   isset($homepage->homepage_section_6_paragraph)?$homepage->homepage_section_6_paragraph:'' ;?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-gallery ec-simple-gallery">
                                <ul class="row gallery">
									<?php if(isset($gallery)): foreach($gallery as $record): ?>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#"><img src="<?= base_url('uploads/gallery/').$record['gallery_image'];?>" alt=""></a>
                                            <figcaption>
                                                <a title="" rel="prettyPhoto[gallery1]" href="<?= base_url('uploads/gallery/').$record['gallery_image'];?>" class="ec-color"><i class="fa fa-compress"></i></a>
                                            </figcaption>
                                        </figure>
                                    </li>
									<?php  endforeach; endif;  ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section shop-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-section-heading">
                                <h2><?=   isset($homepage->homepage_section_7_main_heading)?$homepage->homepage_section_7_main_heading:'' ;?></h2></div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-shop ec-shop-list">
                                <ul class="row">



								<?php if(isset($product)): foreach($product as $record): ?>

                                    <li class="col-md-3">
                                        <figure>
                                            <a href="#" class="ec-shop-thumb"><img src="<?= base_url('uploads/product/').$record['product_image'];?>" alt=""></a>
                                            <span class="ec-festured">Sale</span>
                                            <figcaption>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="ec-shopinfo">
                                            <h2><a href="#"><?= $record['product_name'];?></a></h2>
                                            <span class="ec-price"><del><span class="amount"><?= $record['currency_name'];?><?= $record['product_price'];?></span></del>
                                            <ins><span class="amount"><?= $record['currency_name'];?><?= $record['product_sale_price'];?></span></ins>
                                            </span>
                                        </div>
                                    </li>
									<?php  endforeach; endif;  ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
        </div>
        <!--// Main Content \\-->
