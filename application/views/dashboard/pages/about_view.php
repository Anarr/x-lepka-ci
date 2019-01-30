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
                <li><a href=""><i class="fa fa-home"></i></a></li>
                <li><a href="#"><?=$pageData->title;?></a></li>
            </ul>
            <h1 class="page-title"><?=$pageData->title;?></h1>
            <p><?=$pageData->description;?></p>
        </div>
    </div>
</div>
<?php $this->load->view('dashboard/components/footer_view');?>
