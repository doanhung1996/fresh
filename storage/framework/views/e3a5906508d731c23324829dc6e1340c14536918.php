<div id="back-to-top" class="show">
    <i class="fa fa-long-arrow-up"></i>
</div>
<footer id="footer" class="footer-v3 align-left">
    <div class="container container-ver2">
        <div class="footer-inner">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h3 class="title-footer">Liên hệ</h3>
                    <?php if(setting('store_phone') || setting('store_email') || setting('storefront_footer_address')): ?>
                        <ul class="list-footer">
                            <?php if(setting('store_phone')): ?>
                                <li>
                                    <span class="contact-info"><?php echo e(setting('store_phone')); ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if(setting('store_email')): ?>
                                <li>
                                    <span class="contact-info"><?php echo e(setting('store_email')); ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if(setting('storefront_footer_address')): ?>
                                <li>
                                    <span class="contact-info"><?php echo e(setting('storefront_footer_address')); ?></span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3 class="title-footer">Thông tin thêm</h3>
                    <ul class="list-footer">
                        <li><a href="<?php echo e(route('home')); ?>" title="Trang chủ">Trang chủ</a></li>
                        <li><a href="<?php echo e(route('home')); ?>/liên-hệ" title="Liên Hệ">Liên Hệ</a></li>
                        <li><a href="<?php echo e(route('home')); ?>/giới-thiệu" title="Giới thiệu">Giới thiệu</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3 class="title-footer">Mạng xã hội</h3>
                    <div class="social space-30">
                        <a href="#" title="t"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="f"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="y"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="g"><i class="fa fa-google"></i></a>
                    </div>
                    <h3 class="title-footer">Phương thức thanh toán</h3>
                    <a href="#" title="paypal"><img src="<?php echo e(asset('assets/images/paypal-footer.png')); ?>" alt="images"></a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h3 class="title-footer">Nhận thông báo</h3>
                    <p>Quý khách vui lòng nhận đăng ký email để nhận thông báo !</p>
                    <div class="subscribe">
                        <form action="#" method="get" accept-charset="utf-8">
                            <input type="text" onblur="if (this.value == '') {this.value = 'Nhập địa chỉ email của bạn !';}" onfocus="if(this.value != '') {this.value = '';}" value="Nhập địa chỉ email của bạn !" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email">
                            <button class="button button1 hover-white" title="Subscribe" type="submit">Đăng ký<i class="fa fa-long-arrow-right"></i></button>
                        </form>
                    </div>
                    <!-- End subscribe -->
                </div>
            </div>
            <!-- End row -->
        </div>
        <?php echo $copyrightText; ?>

        <!-- End footer-inner -->
    </div>
    <!-- End container -->
</footer>
