<footer id="ec-footer">
            <!--// Footer Widget \\-->
            <div class="ec-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget col-md-2 widget_categories">
                            <div class="ec-section-heading">
                                <h2>LINKS</h2></div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Results</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-2 widget_categories">
                            <div class="ec-section-heading">
                                <h2>LINKS</h2>
                            </div>
                            <ul>
                                <li><a href="#">Rules</a></li>
                                <li><a href="#">Schedule</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-4 widget_text_info">
                            <div class="ec-section-heading">
                                <h2>Contact</h2></div>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span><?= isset($this->footer->footer_address)?$this->footer->footer_address:'';  ?></span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span><?= isset($this->footer->footer_phone)?$this->footer->footer_phone:'';  ?></span>
                                </li>
                            </ul>
                            <ul class="social-media">
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#!">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#!">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#!">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-4 widget_text_info">
                            <div class="ec-newslatter">
                                <div class="ec-section-heading">
                                    <h2>Join the Newsletter</h2>
                                </div>
                                <span>Sign up for our personalized daily newsletter</span>
                                <form method="post" action="<?= base_url(); ?>">
                                    <input type="text" name="newsletter_email" value="Enter email address" onblur="if(this.value == '') { this.value ='Enter email address'; }" onfocus="if(this.value =='Enter email address') { this.value = ''; }">
                                    <input type="hidden"  name="type"  value="newsletter">
                                    <input type="submit" value="Sign up" class="ec-bgcolor">
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// Footer Widget \\-->
            <!--// CopyRight Section \\-->
            <div class="ec-bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ec-copyright">
                                <p>© copyright 2022 National Grudge Racing Association</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="ec-right-section">
                                <a href="index.html" class="backtop-btn">Back to top <i class="fa fa-caret-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// CopyRight Section \\-->
        </footer>
    </div>
    <!--// Main Wrapper \\-->
    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="ec-modallogin-form ec-login-popup">
                        <span class="ec-color">Login to Your Account</span>                        
                        <form method="post" action="<?= base_url().'/customer/login'; ?>">
                            <ul>
                                <li>
                                    <input type="text"  name="customer_name" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li>
                                    <input type="password"  name="customer_password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li> <a href="#" class="ec-forgot-btn">Forgot Password?</a> </li>
                                <li>
                                    <input type="submit" value="Sign In"> </li>
                            </ul>
                        </form>
                        <!-- <span class="ec-color">or try our socials</span>
                        <ul class="ec-login-social-media">
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li class="ec-twitter-color"><a href="#"><i class="fa fa-twitter"></i> twitter</a></li>
                            <li class="ec-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul> -->
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="ec-modallogin-form ec-register-popup">


                        <div id="register-validations" style="background-color: #dfabab;" class="mt-2 mb-2">
                                
                        </div>

                        <span class="ec-color">create Your Account today</span>
                         
                        <form method="post" action="<?= base_url().'/customer/signup'; ?>">
                            <ul>
                                <li>
                                    <input name="customer_name" type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li>
                                    <input name="customer_email"  type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                                <li>

                                <li>
                                    <input name="customer_phone"  type="text" value="Your Phone" onblur="if(this.value == '') { this.value ='Your Phone'; }" onfocus="if(this.value =='Your Phone') { this.value = ''; }"> </li>
                                <li>

                                    <input name="customer_password" type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li>
                                    <input name="confirm_password" type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                                <li>
                                    <input type="submit"  onclick="event.preventDefault(); register();"  value="Create Account"> </li>
                            </ul>
                        </form>
                        <!-- <span class="ec-color">or signup with your socials:</span>
                        <ul class="ec-login-social-media">
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li class="ec-twitter-color"><a href="#"><i class="fa fa-twitter"></i> twitter</a></li>
                            <li class="ec-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul> -->
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Box -->
    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="<?php base_url(); ?>assets/front/script/jquery.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/modernizr.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/bootstrap.min.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/jquery.dlmenu.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/flexslider-min.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/jquery.prettyphoto.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/waypoints-min.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/owl.carousel.min.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/jquery.countdown.min.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/fitvideo.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/newsticker.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/skills.js"></script>
    <script src="<?php base_url(); ?>assets/front/script/functions.js"></script>

    <script src="<?php base_url(); ?>assets/front/custom/toastr/js/toastr.js"></script>




    <script>
    var options = {
        newsList: "#ec-news",
        startDelay: 10,
        placeHolder1: ""
    }
    jQuery().newsTicker(options);
    </script>


<script>

var baseUrl = "<?= base_url(); ?>"

function register(){


    const data = {  };
    data.customer_name = document.getElementsByName("customer_name")[0].value;
    data.customer_email = document.getElementsByName("customer_email")[0].value;
    data.customer_phone = document.getElementsByName("customer_phone")[0].value;
    data.customer_password = document.getElementsByName("customer_password")[0].value;
    data.confirm_password = document.getElementsByName("confirm_password")[0].value;

    

    $('#register-validations').html('');

    $.ajax({
        url: baseUrl+"customer/signup",
        type: "post",
        data: data ,
        success: function (res) {
            var response = JSON.parse(res);

            if(response.success == false){

                $('#register-validations').html(response.data);
           
            }else{
                toastr.success(response.message,'Success!');

            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });


}





</script>






</body>

</html>



