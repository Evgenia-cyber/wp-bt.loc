<?php get_header('main'); ?>

<?php
$watch_category = get_category(3);
if ($watch_category):
    $posts = get_posts(array('numberposts' => 3, 'category' => $watch_category->term_id, 'order' => 'ASC'));
    if ($posts):
        ?>
        <section class="section-watch section-tabs <?php echo bluerex_get_background('section_img', $watch_category); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <?php if (get_field('section_header', $watch_category)): ?>
                            <h3><?php the_field('section_header', $watch_category) ?></h3>
                        <?php endif ?>
                        <?php if ($watch_category->description): ?>
                            <h4><?php echo $watch_category->description ?></h4>
                        <?php endif ?>
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                            <?php
                            $data = [];
                            $i = 0;
                            foreach ($posts as $post):
                                setup_postdata($post);
                                $data[$i]['post_name'] = $post->post_name;
                                $data[$i]['url'] = get_the_permalink();
                                $data[$i]['content'] = get_the_content('');
                                ?>
                                <li class="nav-item">
                                    <a
                                        class="nav-link <?php if (!$i) echo 'active'; ?> rounded-pill"
                                        id="<?php echo $post->post_name; ?>-tab"
                                        data-toggle="tab"
                                        href="#<?php echo $post->post_name; ?>"
                                        role="tab"
                                        aria-controls="webdesign"
                                        aria-selected="true"
                                        ><?php the_title() ?></a
                                    >
                                </li>
                                <?php
                                $i++;
                            endforeach;
                            ?>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <?php foreach ($data as $key => $value): ?>
                                <div
                                    class="tab-pane fade show <?php if (!$key) echo 'active'; ?>"
                                    id="<?php echo $value['post_name']; ?>"
                                    role="tabpanel"
                                    aria-labelledby="<?php echo $value['post_name']; ?>-tab"
                                    >
                                        <?php echo $value['content']; ?>
                                    <p><a href="<?php echo $value['url']; ?>" class="btn btn-pink btn-shadow"><?php echo __('Read more', 'bluerex'); ?></a></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-lg-6 text-center">
                        <?php if (get_field('section_add_image', $watch_category)): ?>
                            <img src="<?php the_field('section_add_image', $watch_category) ?>" alt="" />
                        <?php endif; ?>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
            </div>
            <?php
            wp_reset_postdata();
            unset($data, $posts);
            ?>
        </section>
        <!-- /.section-watch -->
    <?php endif; //if($posts)    ?>
<?php endif; //if ($watch_category)    ?>


<?php
$posts = get_posts(array('numberposts' => 3, 'category' => 4, 'order' => 'ASC'));
if ($posts):
    ?>
    <section class="section-progress text-center">
        <div class="container">
            <div class="row">
                <?php foreach ($posts as $post): ?>
                    <div class="col-md-4 progress-item">
                        <?php echo $post->post_content ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php unset($posts) ?>
    </section>
    <!-- /.section-progress -->
<?php endif; //if($posts) progress  ?>

<?php
$lets_category = get_category(5);
if ($lets_category):
    ?>
    <section class="section-lets text-center" <?php echo bluerex_get_background('section_img', $lets_category) ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if ($lets_category->name): ?>
                        <h3><?php echo $lets_category->name ?></h3>
                    <?php endif; ?>
                    <?php if (get_field('section_header', $lets_category)): ?>
                        <h4><?php the_field('section_header', $lets_category) ?></h4>
                    <?php endif; ?>
                    <?php if ($lets_category->description): ?>
                        <p>
                            <?php echo $lets_category->description ?>
                        </p>
                    <?php endif; ?>
                    <p><a href="<?php echo get_category_link(5) ?>" class="btn btn-pink btn-shadow"><?php _e('Read more', 'bluerex') ?></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- /.section-lets text-center -->
<?php endif; //if ($lets_category)     ?>

<?php
$design_category = get_category(6);
if ($design_category):
    $posts = get_posts(array('numberposts' => 2, 'category' => $design_category->term_id, 'order' => 'ASC'));
    if ($posts):
        ?>
        <section class="section-design">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <?php if ($design_category->name): ?>
                            <h3><?php echo $design_category->name ?></h3>
                        <?php endif; ?>
                        <?php if (get_field('section_header', $design_category)): ?>
                            <h4><?php the_field('section_header', $design_category) ?></h4>
                        <?php endif; ?>
                        <?php if ($design_category->description): ?>
                            <p><?php echo $design_category->description ?></p>
                        <?php endif; ?>
                        <div class="row">
                            <?php
                            foreach ($posts as $post):
                                setup_postdata($post);
                                ?>
                                <div class="col-md-6 mb-3">
                                    <?php if (get_field('icon')): ?>
                                        <span><?php the_field('icon') ?></span>
                                    <?php endif; ?>
                                    <h2><?php the_title() ?></h2>
                                    <?php the_content(''); ?>
                                    <p><a href="<?php the_permalink() ?>" class="btn btn-pink btn-shadow"><?php _e('Read more', 'bluerex') ?></a></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <?php
                        if ($video = get_field('section_video', $design_category)):
                            $video = str_replace('watch?v=', 'embed/', $video);
                            ?>
                            <div class="embed-responsive embed-responsive-16by9 mt-5">

                                <iframe
                                    id="videoPlayer"
                                    class="embed-responsive-item"
                                    src="<?php echo $video ?>?enablejsapi=1&amp;html5=1&amp;"
                                    allowfullscreen
                                    ></iframe>
                                <div id="videoPlayBtn"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
            <?php
            wp_reset_postdata();
            unset($posts);
            ?>
        </section>
        <!-- /.section-design -->
    <?php endif; //if($posts)     ?>
<?php endif; //if ($design_category)     ?>

<?php
$work_category = get_category(7);
//bluerex_debug($work_category);
if ($work_category):
    $posts = get_posts(array('numberposts' => 3, 'category' => $work_category->term_id, 'order' => 'ASC'));    //bluerex_debug($posts);
    if ($posts):
        ?>
        <section class="section-work section-tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <?php if ($work_category->name): ?>
                            <h4><?php echo $work_category->name ?></h4>
                        <?php endif; ?>
                        <?php if ($work_category->description): ?>
                            <p>
                                <?php echo $work_category->description ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <!-- /.col-md-8 -->

                    <div class="col-md-12">
                        <ul
                            class="nav nav-pills justify-content-center"
                            id="myTab-gallery"
                            role="tablist"
                            >
                                <?php
                                $data = [];
                                $i = 0;
                                foreach ($posts as $post):
                                    setup_postdata($post);
                                    $data[$i]['post_name'] = $post->post_name;
                                    $data[$i]['url'] = get_the_permalink();
                                    $data[$i]['content'] = get_the_content();
                                    ?>
                                <li class="nav-item">
                                    <a
                                        class="nav-link rounded-pill <?php if(!$i) echo 'active';?>"
                                        id="<?php $post->post_name?>-tab"
                                        data-toggle="tab"
                                        href="#<?php echo $post->post_name?>"
                                        role="tab"
                                        aria-controls="<?php echo $post->post_name?>"
                                        aria-selected="true"
                                        ><?php the_title()?></a
                                    >
                                </li>
        <?php $i++; endforeach; ?>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <?php foreach ($data as $key => $value) :?>
                            <div
                                class="tab-pane fade show <?php if(!$key) echo 'active';?>"
                                id="<?php echo $value['post_name']?>"
                                role="tabpanel"
                                aria-labelledby="<?php echo $value['post_name']?>-tab2"
                                >
                                <?php echo $value['content']?>
                            </div>
 <?php endforeach;?>
                        </div>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
            </div>
            <?php
            wp_reset_postdata();
            unset($data, $posts);
            ?>
        </section>
        <!-- /.section-work -->
    <?php endif; //if($posts)     ?>
<?php endif; //if ($work_category)       ?>

        <?php $posts = get_posts(array(
           'post_type' =>'reviews'
        ));
        if($posts):
//        bluerex_debug($posts);
            ?>
<section class="section-reviews">
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
        >
        <ol class="carousel-indicators">
            <?php for($i=0; $i<count($posts);$i++):?>
            <li
                data-target="#carouselExampleIndicators"
                data-slide-to="<?php echo $i;?>"
                <?php if(!$i) echo 'class="active"';?>
                ></li>
            <?php endfor;?>
        </ol>
        <div class="carousel-inner">
            <?php $i=0; foreach($posts as $post):?>
            <div class="carousel-item <?php if(!$i) echo 'active';?>">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <?php if(get_field('review_header')):?>
                                <h3><?php the_field('review_header')?></h3>
                                <?php endif;?>
                                <?php if($post->post_title):?>
                                <h4><?php echo $post->post_title?></h4>
                                 <?php endif;?>
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                       <?php echo $post->post_content?>
                                    </p>
                                     <?php if(get_field('review_autor')):?>
                                    <footer class="blockquote-footer"><?php the_field('review_autor')?></footer> <?php endif;?>
                                </blockquote>
                            </div>
                        </div>
                        <!-- /.col-sm-7 -->
                        <div class="col-sm-5 d-none d-sm-block">
                            <?php if(has_post_thumbnail($post->ID)):?>
                            <?php echo get_the_post_thumbnail($post->ID) ?>
                            <?php endif;?>
                        </div>
                        <!-- /.col-sm-5 -->
                    </div>
                </div>
            </div>
        <?php $i++; endforeach;?>
        </div>
        <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
            >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
            >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
 <?php
            unset($posts);
            ?>
</section>
<!-- /.section-reviews -->
<?php endif;?>

<?php $contact= get_page_by_title('Contact');
if($contact):?>
<section class="section-form text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo do_shortcode($contact->post_content)?>

            </div>
        </div>
    </div>
</section>
<!-- /.section-form -->
<?php endif;?>

<?php get_footer(); ?>