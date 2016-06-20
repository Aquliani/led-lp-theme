<?php
$mainMenu = wp_get_nav_menu_items('main menu');
$title_news_blog = get_field('title_news_blog');
?>
<section class="news-blog-logo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <header class="sci-fi-title">
                    <h3><?= $title_news_blog; ?></h3>
                    <hr/>
                </header>
                <!-- /.sci-fi-title -->
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-12">
                <article>
                    <a href="<?= $mainMenu[1]->url; ?>">LED lights is the opportunity for a light.</a>
                    <a href="<?= $mainMenu[1]->url; ?>">Свет очень болезненен для тех, кто хочет оставаться в темноте.</a>
                    <a href="<?= $mainMenu[1]->url; ?>">Я пытался сделать невозможное — нарисовать сам свет.</a>
                </article>
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.news-blog-logo -->