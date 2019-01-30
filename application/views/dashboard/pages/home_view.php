<?php $this->load->view('dashboard/components/header_view');?>
<style>
.nowrap-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>
<div class="content-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php $this->load->view('dashboard/components/left_menu_view');?>
            </div>
            <div class="col-md-9">
                <!-- <div class="main-slider" style="background: url('<?= 'assets/img/xudo.jpg';?>');background-repeat: no-repeat;background-position: center;background-size: cover;">
                </div> -->
                <div class="main-slider">
                    <div id="spinner"></div>
                    <div id="slideshow0" class="owl-carousel" style="opacity: 1;">
                        <div class="item">
                            <img src="<?= base_url().'assets/img/xudo.jpg';?>" alt="baner1" class="img-responsive" />
                        </div>
                        <div class="item">
                            <img src="<?= base_url().'assets/img/xudo1.jpg';?>" alt="baner2" class="img-responsive" />
                        </div>
                        <div class="item">
                            <img src="<?= base_url().'assets/img/xudo2.jpg';?>" alt="baner3" class="img-responsive" />
                        </div>
                        <div class="item">
                            <img src="<?= base_url().'assets/img/xudo3.jpg';?>" alt="baner3" class="img-responsive" />
                        </div>
                    </div>
                </div>
                

            </div>
            <script type="text/javascript">
                $('#slideshow0').owlCarousel({
                    items: 6,
                    autoPlay: 5000,
                    singleItem: true,
                    navigation: true,
                    navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>',
                        '<i class="fa fa-chevron-right fa-5x"></i>'
                    ],
                    pagination: true,
                    transitionStyle: "fade"
                });
            </script>
            <script type="text/javascript">
                // Can also be used with $(document).ready()
                $(window).load(function () {
                    $("#spinner").fadeOut("slow");
                });
            </script>
            <div class="subbanner-cms1">
                <div class="subbanner1"><a href="#"><img src="<?=base_url()?>img/sub1_new.jpg" alt="" class="img-responsive"></a></div>
                <div class="subbanner2"><a href="#"><img src="img/sub2_new.jpg" alt="" class="img-responsive"></a></div>
            </div>
            <div class="servicetop-cms">
                <div class="service">
                    <div class="serviceblock1 serviceblock clearfix">
                        <div class="title">
                            <div class="title nowrap-text">Pulsuz çatdırılma</div>
                            <div class="subtitle nowrap-text">bütün məhsullarda</div>
                        </div>
                    </div>
                    <div class="serviceblock2 serviceblock clearfix">
                        <div class="title nowrap-text">Dəyişmək və zəmanət</div>
                        <div class="subtitle nowrap-text">geri qaytarmaq İmkanı</div>
                    </div>
                    <div class="serviceblock3 serviceblock clearfix">
                        <div class="title nowrap-text">Telefon dəstək xətti</div>
                        <div class="subtitle nowrap-text">+994 (50) 873-48-65<br></div>
                    </div>
                    <div class="serviceblock4 serviceblock clearfix">
                        <div class="title nowrap-text">Qapıda ödəmə</div>
                        <div class="subtitle nowrap-text">nağd şəkildə</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row home_row">
        <aside id="column-left" class="col-sm-3 hidden-xs">
            <div class="service-banner">
                <div class="box-heading">Üstünlüklərimiz</div>
                <div class="box-content">
                    <div class="ser-banner banner1">

                        <div class="round_img">
                            <img src="<?=base_url()?>assets/img/icon_5.png" alt=""></div>
                        <div class="ser-text1">Büdcəyə Qənaət</div>
                        <div class="ser-text3"></div>
                    </div>
                    <div class="ser-banner banner2">

                        <div class="round_img">
                            <img src="<?=base_url()?>assets/img/icon_4.png" alt=""></div>
                        <div class="ser-text1">Zəmanət</div>
                        <div class="ser-text3"><br></div>
                    </div>
                    <div class="ser-banner banner3">
                        <div class="round_img">
                            <img src="<?=base_url()?>assets/img/icon_3.png" alt=""></div>
                        <div class="ser-text1">Online sifariş</div>
                        <div class="ser-text3"></div>
                    </div>
                    <div class="ser-banner banner4">
                        <div class="round_img">
                            <img src="<?=base_url()?>assets/img/icon_2.png" alt=""></div>
                        <div class="ser-text1">Çatdırılma</div>
                        <div class="ser-text3"></div>
                    </div>
                    <div class="ser-banner banner5">
                        <div class="round_img">
                            <img src="<?=base_url()?>assets/img/icon_1.png" alt=""></div>
                        <div class="ser-text1">Quraşdırılma</div>
                        <div class="ser-text3"></div>
                    </div>
                </div>
            </div>
            <!-- <div id="banner0" class="single-banner">
                <div class="item">
                    <img src="http://masalmebel.az/image/cache/catalog/1x-270x290-270x290.jpg" alt="22" class="img-responsive">
                </div>
            </div> -->
            <script type="text/javascript">
                <!--
                $('.bannercarousel').owlCarousel({
                    items: 1,
                    autoPlay: 3000,
                    singleItem: true,
                    navigation: false,
                    pagination: true,
                    transitionStyle: 'fade'
                });
                -->
            </script>
            <span class="special_default_width" style="display:none; visibility:hidden"></span>

        </aside>
        <div id="content" class="col-sm-9">

            <div class="subbanner-cms3">
                <div class="subbanner3">
                    <div class="subbannercmspart3">
                        <div class="subbanner-inner">
                            <div class="inner-content">
                                <div class="banner-content">
                                    <div class="banner-text1"><span> Xudaferin-Lepka.az</span></div>
                                    <div class="banner-text2">Yenilik, Gözəllik, Keyfiyyət Bizdən. Seçim Sizdən.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box featured">
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i></a></li>
                    <li><a href="#">Məhsullar</a></li>
                </ul>
                <h2 class="page-title">Məhsullar</h2>

                <div class="row cat_prod">
                    <?php foreach($products as $product):?>
                    <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-block product-thumb">
                            <div class="product-block-inner">

                                <div class="image">
                                    <a href="<?=base_url().'ci/products/'.$product->id;?>">
                                        <img src="<?=base_url().'ci/uploads/products/'.$product->photo;?>" title="<?=$product->title;?>"
                                            alt="<?=$product->title;?>" class="img-responsive">
                                    </a>


                                </div>

                                <div class="product-details">


                                    <div class="caption">

                                        <h4><a href="<?=base_url().'ci/products/'.$product->id;?>">
                                                <?=$product->title;?></a></h4>

                                        <p class="desc">
                                            <?=$product->description;?>
                                        </p>

                                        <p class="price" style="opacity:1 !important;">
                                            <?=$product->price;?> <span class="manat">M</span> </p>




                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <?php endforeach;?>

                </div>
                <span class="featured_default_width" style="display:none; visibility:hidden"></span>
                <span class="module_default_width" style="display:none; visibility:hidden"></span>
            </div>
            <hr>
            <h2 class="page-title">Partnyorlar</h2>
            <div id="carousel-0" class="banners-slider-carousel">
                <div class="customNavigation">
                    <a class="prev fa"></a>
                    <a class="next fa"></a>
                </div>
                <div class="product-carousel" id="module-0-carousel">
                        <div class="slider-item">
                    <div class="product-block">
                    <div class="product-block-inner">
                            <img src="<?=base_url()?>assets/img/part1.jpg" alt="Manufacturers" />
                        </div></div></div>
                        <div class="slider-item">
                    <div class="product-block">
                    <div class="product-block-inner">
                            <img src="<?=base_url()?>assets/img/part2.jpg" alt="Manufacturers5" />
                        </div></div></div>
                        <div class="slider-item">
                    <div class="product-block">
                    <div class="product-block-inner">
                            <img src="<?=base_url()?>assets/img/part3.png" alt="Manufacturers4" />
                        </div></div></div>
                        <div class="slider-item">
                    <div class="product-block">
                    <div class="product-block-inner">
                            <img src="<?=base_url()?>assets/img/part4.jpg" alt="Manufacturers3" />
                        </div></div></div>
                        <!-- <div class="slider-item">
                            <div class="product-block">
                                <div class="product-block-inner">
                                    <img src="http://masalmebel.az/image/cache/catalog/b2-90x86.jpg" alt="Manufacturers2" />
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block">
                                <div class="product-block-inner">
                                    <img src="http://masalmebel.az/image/cache/catalog/b1-90x86.jpg" alt="Manufacturers1" />
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>

        </div>
    </div>
    <?php $this->load->view('dashboard/components/footer_view');?>
