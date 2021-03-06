<?php $this->load->view('dashboard/components/header_view');?>

<div class="container">

    <div class="row">
        <aside id="column-left" class="col-sm-3 hidden-xs">
            <div class="box category-left-box megnorcategory">
                <div class="box-content">
                    <?php $this->load->view('dashboard/components/left_menu_view');?>
                </div>
            </div>

        </aside>
        <div id="content" class="col-sm-9">
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="#">
                        <?=$pageData->title;?></a></li>
            </ul>
            <h1 class="page-title">
                <?=$pageData->title;?>
            </h1>
            <div class="panel panel-default information-contact">
                <div class="panel-body">
                    <div class="row contact-info">
                        <div class="left">

                            <div class="address-detail">
                                <strong>&nbsp;</strong>
                                <address>Ünvan: A. Gəraybəyli 37A.<br>(Ayna Sultanova)</address>
                            </div>
                            <div class="telephone">
                                <strong>&nbsp;</strong>
                                <address><a href="tel:+994123445700">(+994 12) 563-52-46</a></address>
                            </div>
                            <div class="email">
                                <strong><i class="fa fa-envelope-o"></i></strong>
                                <address><a href="mailto:xudaferin.lepka@mail.ru">xudaferin.lepka@mail.ru</a></address>
                            </div>
                            <div class="openingtime">
                                <strong>&nbsp;</strong>
                                <address>09:00 - 19:00 (Hər Gün)</address>
                            </div>
                            <br>
                            <div style="clear:both;">&nbsp;</div>
                            <div class="telephone">
                                <strong>&nbsp;</strong>
                                <address><a href="tel:+994252155646">(+994 70) 205-90-80</a></address>
                            </div>
                            <div class="telephone">
                                <strong>&nbsp;</strong>
                                <address><a href="tel:+994508734865">(+994 50) 873-48-65</a></address>
                            </div>
                            <div class="email">
                                <strong><i class="fa fa-envelope-o"></i></strong>
                                <address><a href="mailto:xudaferinlepka@gmail.com">xudaferinlepka@gmail.com</a></address>
                            </div>
                            <div class="openingtime">
                                <strong>&nbsp;</strong>
                                <address>09:00 - 19:00 (Hər Gün)</address>
                            </div>

                            <div style="clear:both;">&nbsp;</div>

                            <div class="social-cms">
                                <ul class="social">
                                    <li class="facebook"><a href="https://www.facebook.com/xudaferinlepka/"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li class="instagram"><a href="https://www.instagram.com/xudaferin_lepka/"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>
                                    <li class="youtube"><a href="https://www.youtube.com/channel/UCtys-wMpJczu-DyNJ1iKFUg/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>

                                </ul>
                            </div>

                        </div>
                        <div class="right">
                            <div class="map-cont" style="
                                background: url('<?=base_url()?>assets/img/map-loc.png');
                                background-position:center;
                                background-size:cover;
                                height: 300px;
                                width: 100%;"
                            >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact-info">
                    <div class="left">
                        <div class="col-sm-12">
                            <div class="well">
                                <h3></h3>
                                <p><strong></strong></p>
                                <?php echo validation_errors(); ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">Adınız</label>
                                        <input type="text" name="name" placeholder="Adınız" id="input-email" class="form-control"
                                            value="<?php echo set_value('name'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Nömrə</label>
                                        <input type="tel    " name="phone" value="<?php echo set_value('phone'); ?>"
                                            placeholder="Nömrə" id="input-password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">Mesajınız</label>
                                        <textarea type="text" name="message" value="" placeholder="Mesajınız" id="input-email"
                                            class="form-control"><?php echo set_value('message'); ?></textarea>
                                    </div>
                                    <input type="submit" value="Göndər" class="btn btn-primary">
                                    <input type="hidden" name="redirect" value="#">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('dashboard/components/footer_view');?>