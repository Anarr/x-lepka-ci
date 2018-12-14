<?php $this->load->view('dashboard/components/header_view');?>
<div class="content-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <?php $this->load->view('dashboard/components/left_menu_view');?>
            </div>
            <div class="col-md-9">
                <div class="main-slider" style="background: url('<?= 'assets/img/korpu.jpg';?>');background-repeat: no-repeat;background-position: right;">
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
                <div class="subbanner1"><a href="#"><img src="image/catalog/sub1_new.jpg" alt="" class="img-responsive"></a></div>
                <div class="subbanner2"><a href="#"><img src="image/catalog/sub2_new.jpg" alt="" class="img-responsive"></a></div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row home_row">
        <aside id="column-left" class="col-sm-3 hidden-xs">
        </aside>
        <div id="content" class="col-sm-9">

            <div class="subbanner-cms3">
                <div class="subbanner3">
                    <div class="subbannercmspart3">
                        <div class="subbanner-inner">
                            <div class="inner-content">
                                <div class="banner-content">
                                    <div class="banner-text1">GENİŞ ÇEŞİD, RAHAT SEÇİM <span> Xudaferin-Lepka.az</span></div>
                                    <div class="banner-text2">UCUZU BAHA ALMAYIM, KEYFİYYƏTİ UCUZ ALIN</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box featured">
                    <ul class="breadcrumb">
                        <li><a href="http://masalmebel.az/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
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
                                            <img src="<?=base_url().'ci/uploads/products/'.$product->photo;?>" title="<?=$product->title;?>" alt="<?=$product->title;?>" class="img-responsive">
                                        </a>


                                    </div>

                                    <div class="product-details">


                                        <div class="caption">
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                            </div>

                                            <h4><a href="<?=base_url().'ci/products/'.$product->id;?>"><?=$product->title;?></a></h4>
                                            <div class="rating list-rate">
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                            </div>
                                            <p class="desc"><?=$product->description;?></p>

                                            <p class="price">
                                            <?=$product->price;?> <span class="manat">M</span> </p>


                                            <div class="button-group">
                                                <button type="button" class="addtocart" onclick="cart.add('112', '1');"><i
                                                        class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Səbətə
                                                        at</span></button>
                                                <button type="button" class="wishlist" data-toggle="tooltip" title=""
                                                    onclick="wishlist.add('112');" data-original-title="Arzu siyahısına əlavə et"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" class="compare" data-toggle="tooltip" title=""
                                                    onclick="compare.add('112');" data-original-title="Müqayisə et"><i
                                                        class="fa fa-exchange"></i></button>
                                                <div class="quickview-button" data-toggle="tooltip" title=""
                                                    data-original-title="quick_view"> <a class="quickbox" href="http://masalmebel.az/index.php?route=product/quick_view&amp;product_id=112"><i
                                                            class="fa fa-eye" aria-hidden="true"></i></a></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    <?php endforeach;?>
                        
                    <!-- <div class="pagination-wrapper">
                        <div class="col-sm-6 text-left page-link">
                            <ul class="pagination">
                                <li class="active"><span>1</span></li>
                                <li><a href="http://masalmebel.az/index.php?route=product/category&amp;path=87&amp;page=2">2</a></li>
                                <li><a href="http://masalmebel.az/index.php?route=product/category&amp;path=87&amp;page=2">&gt;</a></li>
                                <li><a href="http://masalmebel.az/index.php?route=product/category&amp;path=87&amp;page=2">&gt;|</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right page-result">Göstərilir: 1 . 15 -ə 20 -dən (2 səhifə)</div>
                    </div> -->
            </div>
            <span class="featured_default_width" style="display:none; visibility:hidden"></span>
            <span class="module_default_width" style="display:none; visibility:hidden"></span>
        </div>
    </div>
</div>
<?php $this->load->view('dashboard/components/footer_view');?>