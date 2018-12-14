<div class="catgory-left">
    <div class="box category-left-box megnorcategory">
        <div class="box-content">
            <ul id="nav-one" class="dropmenu">
            <?php foreach ($categories as $category): ?>
                <li class="top_level"><a href="/category/<?=$category->id;?>"><?=$category->name;?></a>
            <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>