<?php $this->load->view('dashboard/components/header_view');?>

<div class="container ">

    <div class="row">
        <div class="col-sm-3">
            <?php $this->load->view('dashboard/components/left_menu_view');?>                    
        </div>
        <?php
            $category_name = '';
            $noProducts = false;
            if (count($products)>0) {
                $category_id = $products[0]->category_id;
                $category_name;

                foreach ($categories as $key => $obj) {
                    if ($category_id == $obj->id) {
                        $category_name = $obj->name;
                    }
                }
            } else {
                $noProducts = true;

            }
        ?>
        <div id="" class="col-sm-9">
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="#"><?=$category_name?></a></li>
            </ul>
            <h2 class="page-title"><?=$category_name?></h2>

            <div class="category_filter">
                <!-- <div class="col-md-4 btn-list-grid">
                    <div class="btn-group">
                        <button type="button" id="grid-view" class="btn btn-default grid active" data-toggle="tooltip"
                            title="" data-original-title="Cədvəl"><i class="fa fa-th"></i></button>
                        <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title=""
                            data-original-title="Siyahı"><i class="fa fa-th-list"></i></button>
                    </div>
                </div> -->

            </div>
            <?php if ($noProducts == true) {?>
                <h1>Mehsul Tapilmadi!</h1>
            <?php } if (!$noProducts){ ?>
            <div class="row cat_prod">
                <?php 
                    foreach ($products as $key => $obj) {
                        // echo '<pre>';
                        // var_dump($obj);
                        // echo '</pre>';
                ?>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">

                            <div class="image">
                                <a href="<?=base_url()?>/products/<?=$obj->id?>">
                                    <img src="<?=base_url()?>/uploads/products/<?=$obj->photo?>"
                                        title="$category_name" alt="<?=$obj->title?>" class="img-responsive"></a>


                            </div>

                            <div class="product-details">


                                <div class="caption">
                                    <!-- <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                    </div> -->

                                    <h4>
                                        <a href="<?=base_url();?>products/<?=$obj->id?>">
                                        <?=$obj->title?>
                                        </a>
                                    </h4>
                                    <!-- <div class="rating list-rate">
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                    </div> -->
                                    <p class="desc">..</p>

                                    <p class="price">
                                        <?=$obj->price?> <span class="manat">M</span> </p>


                                    <!-- <div class="button-group">
                                        <button type="button" class="addtocart" onclick="cart.add('295', '1');"><i
                                                class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Səbətə
                                                at</span></button>
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="" onclick="wishlist.add('295');"
                                            data-original-title="Arzu siyahısına əlavə et"><i class="fa fa-heart"></i></button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="" onclick="compare.add('295');"
                                            data-original-title="Müqayisə et"><i class="fa fa-exchange"></i></button>
                                        <div class="quickview-button" data-toggle="tooltip" title=""
                                            data-original-title="quick_view"> <a class="quickbox" href="http://masalmebel.az/index.php?route=product/quick_view&amp;product_id=295"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></a></div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php }?>
            </div>
            <?php }?>
            <?php if (!$noProducts && count($products) > 100):?>

            <div class="pagination-wrapper">
                <div class="col-sm-6 text-left page-link">
                    <ul class="pagination">
                        <li class="active"><span>1</span></li>
                        <li><a href="2">&gt;</a></li>
                        <li><a href="5">&gt;|</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 text-right page-result">Göstərilir: 1 . 11 -ə 11 -dən (1 səhifə)</div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>
<?php $this->load->view('dashboard/components/footer_view');?>                    
