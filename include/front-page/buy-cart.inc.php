<?php
$title_buy_cart = get_field('title_buy_cart');
?>
<section class="buy-cart">
    <a href="#sectionBuy" class="smooth">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <header class="sci-fi-title">
                                <h3><?= $title_buy_cart; ?></h3>
                                <hr/>
                            </header>
                            <!-- /.sci-fi-title -->
                        </div>
                        <!-- /.col-sm-8 col-sm-offset-2 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-sm-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <article>
                                <?= file_get_contents(get_bloginfo('template_directory') . '/src/images/Cart.svg'); ?>
                            </article>
                        </div>
                        <!-- /.col-sm-8 col-sm-offset-2 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-sm-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </a>
</section>
<!-- /.buy-cart -->