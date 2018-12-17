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
                                            <img src="<?=base_url().'ci/uploads/products/'.$product->photo;?>" title="<?=$product->title;?>" alt="<?=$product->title;?>" class="img-responsive">
                                        </a>


                                    </div>

                                    <div class="product-details">


                                        <div class="caption">
                                            
                                            <h4><a href="<?=base_url().'ci/products/'.$product->id;?>"><?=$product->title;?></a></h4>
                                            
                                            <p class="desc"><?=$product->description;?></p>

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
    </div>
</div>
<?php $this->load->view('dashboard/components/footer_view');?>