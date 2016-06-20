<section class="contacts" id="sectionContacts">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <header class="sci-fi-title">
                        <h2><?= $title_contacts_earth; ?></h2>
                        <hr/>
                    </header>
                    <!-- /.sci-fi-title -->
                </div>
                <div class="row">
                    <div class="list-group">
                        <?php $loop = new WP_Query(array(
                            'post_type' => 'contacts',
                            'meta-key' => 'position',
                            'orderby' => 'meta-value',
                            'order' => 'ASC')); ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <a href="" class="list-group-item">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <div class="fa-parent">
                                                <i class="fa <?php the_field('left_icon'); ?> fa-4x left-icon"></i>
                                            </div>
                                        </div>
                                        <!-- /.col-sm-2 -->
                                        <div class="col-sm-8 list-group-middle-row">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h4><?php the_field('title'); ?></h4>
                                                </div>
                                                <!-- /.col-sm-6 -->
                                                <div class="col-sm-6">
                                                    <h5><?php the_field('phone_number_1'); ?></h5>
                                                    <?php
                                                    $phone2 = get_field('phone_number_2');
                                                    echo (isset($phone2)) ? "<h5>$phone2</h5>" : "";
                                                    $phone3 = get_field('phone_number_3');
                                                    echo (isset($phone3)) ? "<h5>$phone3</h5>" : "";
                                                    ?>
                                                </div>
                                                <!-- /.col-sm-6 -->
                                            </div>
                                            <!-- /.row -->
                                            <hr/>
                                            <p><?php the_content(); ?></p>
                                        </div>
                                        <!-- /.col-sm-8 -->
                                        <div class="col-sm-2 text-center">
                                            <div class="fa-parent">
                                                <i class="fa <?php the_field('right_icon'); ?> fa-2x right-icon animated"></i>
                                            </div>
                                        </div>
                                        <!-- /.col-sm-2 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.container-fluid -->
                            </a>
                        <?php endwhile ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-sm-10 col-sm-offset-1 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>