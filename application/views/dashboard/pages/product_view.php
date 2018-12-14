<?php $this->load->view('dashboard/components/header_view');?>
<div class="container">


    <div class="row">
        <div class="col-sm-3">
        <?php $this->load->view('dashboard/components/left_menu_view');?>                    
        </div>
        <div id="" class="productpage col-sm-9">
            <ul class="breadcrumb">
                <li><a href="http://masalmebel.az/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
                <li><a href="http://masalmebel.az/index.php?route=product/product&amp;product_id=422">Məhsullar</a></li>
            </ul>
            <h2 class="page-title"><?=$productData->title;?></h2>
            <div class="row">


                <div class="col-sm-6 product-left">
                    <div class="product-info">



                        <div class="left product-image thumbnails">

                            <!-- Megnor Cloud-Zoom Image Effect Start -->
                            <div class="image"><a class="thumbnail elevatezoom-gallery" href="/image/catalog/belarusiya_yeni/Prestij 2.jpg"><img
                                        id="tmzoom" src="<?=base_url().'ci/uploads/products/'.$productData->photo;?>"
                                        data-zoom-image="/image/catalog/belarusiya_yeni/Prestij 2.jpg" title="Prestij2"
                                        alt="Prestij2"></a></div>


                            <!-- Megnor Cloud-Zoom Image Effect End-->
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 product-right">
                    <h3 class="product-title"><?=$productData->title;?></h3>

                    <ul class="list-unstyled attr">
                        <li><span>Haqqında:</span> <?=$productData->description;?></li>
                        <li><span>Mövcudluq:</span> Anbarda</li>
                    </ul>
                    <ul class="list-unstyled price">
                        <li>
                            <h3 class="product-price"><?=$productData->price;?> <span class="manat">M</span></h3>
                        </li>
                    </ul>


                    <script type="text/javascript" src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                    <script type="text/javascript" src="https://yastatic.net/share2/share.js"></script>

                </div>
                <div class="col-sm-12" id="tabs_info">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-description" data-toggle="tab" aria-expanded="false">Açıqlama</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-description">
                            <p><?=$productData->title;?><br></p>
                            <p><?=$productData->description;?></p>
                            <p><?=$productData->price;?> <span class="manat">M</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $this->load->view('dashboard/components/footer_view');?>                    
