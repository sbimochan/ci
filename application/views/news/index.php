<h2><?php echo $title ?></h2>
<?php foreach($newss as $news_item):?>
    <h3><?php echo $news_item['title']?></h3>
    <div class="main">
        <?php echo $news_item['text']   ;?>
        
    </div>
    <p><a href="<?php echo site_url('news/'.$news_item['slug']) ?>">view article</a></p>
<?php endforeach;?>
