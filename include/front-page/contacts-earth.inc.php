<?php
$title_contacts_earth = get_field('title_contacts_earth');
?>
<section class="contacts-earth">
    <a class="smooth" href="#sectionContacts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <header class="sci-fi-title">
                                <h2><?= $title_contacts_earth; ?></h2>
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
                                <img src="<?php bloginfo('template_directory') ?>/src/images/Earth.gif"
                                     alt="Earth sci-fi">
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
<!-- /.contacts-earth -->