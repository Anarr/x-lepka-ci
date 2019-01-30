</div>
<footer class="container-fluid">
    <div id="footer" class="">
        <div class="row">
            <div class="footer-blocks">
                <div class="col-sm-1">
                </div>
                <div id="contact" class="col-sm-3 column">
                    <h5 class="" style="padding-left: 15px !important;">Əlaqə</h5>
                    <ul>
                        <li>
                            <div class="address_content">
                                <div class="contact_address" style="line-height:20px;">Ünvan: A. Gəraybəyli 37A<br>(Ayna Sultanova)</div>
                            </div>
                            <div class="phone">
                                <div class="contact_phone"><a href="tel:+994508734865">+994 (50) 873-48-65</a></div>
                                <div class="contact_phone"><a href="tel:+994123445700">+994 (12) 563-52-46</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="email">
                                <a target="_blank" href="mailto:xudaferin.lepka@mail.ru">xudaferin.lepka@mail.ru</a>
                            </div>
                        
                            <div class="phone">
                                <div class="contact_phone"><a href="tel:+994503381211">+994 (50) 338-12-11</a></div>
                                <div class="contact_phone"><a href="tel:+994702059080">+994 (70) 205-90-80</a></div>
                            
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="info" class="col-sm-3 column">
                    <h5 style="padding-left: 15px !important;">Məlumat</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?=base_url();?>/about">Haqqımızda</a></li>
                        <li><a href="<?=base_url();?>/contact">Əlaqə</a></li>
                        <li><a href="https://www.facebook.com/xudaferinlepka/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/xudaferin_lepka/" target="_blank">Instagram</a></li>
                            <h4 style="padding-left: 15px !important;">Şikayət və təklifləriniz üçün</h4>
                        <li>
                            <a href="tel:+994502057079">(+994 50) 205-70-79</a>
                        </li>
                    </ul>
                    
                </div>
                <div id="extra-link" class="col-sm-3 column">
                    <div class="col-sm-12">
                        <h5>Əlaqə</h5>
                    </div>
                    <div class="col-sm-12">
                        <!-- <div class="well"> -->
                            <h3></h3>
                            <p><strong></strong></p>
                            <?php echo validation_errors(); ?>
                            <form action="" method="post"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label" for="input-email">Adınız</label>
                                    <input type="text" name="name"placeholder="Adınız" id="input-email"
                                        class="form-control" value="<?php echo set_value('name'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-password">Nömrə</label>
                                    <input type="tel    " name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Nömrə" id="input-password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-email">Mesajınız</label>
                                    <textarea type="text" name="message" value="" placeholder="Mesajınız" id="input-email"
                                        class="form-control"><?php echo set_value('message'); ?></textarea>
                                </div>
                                <input type="submit" value="Göndər" class="btn btn-primary">
                                <input type="hidden" name="redirect" value="#">
                            </form>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-sm-1">
                </div>
                <!-- <div class="col-sm-3 column">
                    <h5>Hesabım</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Hesabım</a></li>
                        <li><a href="#">Sifariş tarixçəsi</a></li>
                        <li><a href="#">Arzu siyahısı</a></li>
                        <li><a href="#">Geri qaytarma</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="content_footer_bottom">
                <div class="manufacture_block">
                </div>
            </div>
        </div>
        <!--<hr>-->
    </div>
    <div class="bottomfooter">
        <div class="container">
            <div class="row">
                <div class="footerbottom-cms">
                </div>
            </div>
        </div>
    </div>
</footer>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body>

</html>