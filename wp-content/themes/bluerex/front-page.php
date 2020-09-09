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
<section class="section-lets text-center" <?php echo bluerex_get_background('section_img', $lets_category)?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if($lets_category->name): ?>
                <h3><?php echo $lets_category->name ?></h3>
                <?php endif; ?>
                <?php if(get_field('section_header', $lets_category)): ?>
                <h4><?php the_field('section_header', $lets_category) ?></h4>
                <?php endif; ?>
                <?php if($lets_category->description): ?>
                <p>
                    <?php echo $lets_category->description ?>
                </p>
                <?php endif;?>
                <p><a href="<?php echo get_category_link(5)?>" class="btn btn-pink btn-shadow"><?php _e('Read more', 'bluerex')?></a></p>
            </div>
        </div>
    </div>
</section>
<!-- /.section-lets text-center -->
<?php endif; //if ($lets_category)     ?>

<section class="section-design">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>We are best and creative agency</h3>
                <h4>We turn creative ideas into your business</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                    ipsam, quas, illo laborum molestias nihil dolore nobis quis, quam
                    reiciendis asperiores. Accusamus consequatur ipsum asperiores
                    dolore perferendis, tempore ducimus blanditiis.
                </p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span><i class="far fa-comments"></i></span>
                        <h2>Graphic Design</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Fugit, amet totam modi optio, a quae.
                        </p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 mb-3">
                        <span><i class="fas fa-bullhorn"></i></span>
                        <h2>Graphic Design</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Fugit, amet totam modi optio, a quae.
                        </p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-16by9 mt-5">
                  <!-- <iframe
                    id="videoPlayer"
                    class="embed-responsive-item"
                    src="https://www.youtube.com/embed/bpsl7xrTJR4?enablejsapi=1&html5=1&rel=0&&showinfo=0"
                    allowfullscreen
                                      ></iframe> -->
                    <iframe
                        id="videoPlayer"
                        class="embed-responsive-item"
                        src="https://www.youtube.com/embed/ShiqTYGww4E?enablejsapi=1&html5=1&rel=0&&showinfo=0"
                        allowfullscreen
                        ></iframe>
                    <div id="videoPlayBtn"></div>
                </div>
            </div>
            <!-- /.col-lg-6 -->
        </div>
    </div>
</section>
<!-- /.section-design -->

<section class="section-work section-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h4>Our Recent Work</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Obcaecati ipsum cumque, sit earum quasi, nisi repudiandae
                    perspiciatis culpa praesentium cupiditate, distinctio maiores
                    mollitia. Similique quidem, harum aliquam consectetur qui ut.
                </p>
            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-12">
                <ul
                    class="nav nav-pills justify-content-center"
                    id="myTab-gallery"
                    role="tablist"
                    >
                    <li class="nav-item">
                        <a
                            class="nav-link active rounded-pill"
                            id="webdesign-tab2"
                            data-toggle="tab"
                            href="#webdesign2"
                            role="tab"
                            aria-controls="webdesign2"
                            aria-selected="true"
                            >Webdesign</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link rounded-pill"
                            id="mobileapp-tab2"
                            data-toggle="tab"
                            href="#mobileapp2"
                            role="tab"
                            aria-controls="mobileapp2"
                            aria-selected="false"
                            >Mobile app</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link rounded-pill"
                            id="branding-tab2"
                            data-toggle="tab"
                            href="#branding2"
                            role="tab"
                            aria-controls="branding2"
                            aria-selected="false"
                            >Branding</a
                        >
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div
                        class="tab-pane fade show active"
                        id="webdesign2"
                        role="tabpanel"
                        aria-labelledby="webdesign-tab2"
                        >
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/1.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/1_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/2.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/2_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/3.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/3_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/4.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/4_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/5.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/5_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/6.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/6_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/7.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/7_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/8.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/8_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/9.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/9_s.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- /.gallery -->
                    </div>
                    <div
                        class="tab-pane fade"
                        id="mobileapp2"
                        role="tabpanel"
                        aria-labelledby="mobileapp-tab2"
                        >
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/4.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/4_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/5.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/5_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/6.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/6_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/1.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/1_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/2.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/2_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/3.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/3_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/7.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/7_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/8.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/8_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/9.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/9_s.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- /.gallery -->
                    </div>
                    <div
                        class="tab-pane fade"
                        id="branding2"
                        role="tabpanel"
                        aria-labelledby="branding-tab2"
                        >
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/7.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/7_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/8.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/8_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/9.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/9_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/1.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/1_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/2.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/2_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/3.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/3_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/4.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/4_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/5.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/5_s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/6.jpg">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/gallery/6_s.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- /.gallery -->
                    </div>
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
    </div>
</section>
<!-- /.section-work -->

<section class="section-reviews">
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
        >
        <ol class="carousel-indicators">
            <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
                ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our Happy Client</h3>
                                <h4>Testimonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Integer posuere erat a ante.
                                    </p>
                                    <footer class="blockquote-footer">Mr. John Doe</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- /.col-sm-7 -->
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="" />
                        </div>
                        <!-- /.col-sm-5 -->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our Happy Client</h3>
                                <h4>Testimonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Integer posuere erat a ante.
                                    </p>
                                    <footer class="blockquote-footer">Mr. Jack</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- /.col-sm-7 -->
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="" />
                        </div>
                        <!-- /.col-sm-5 -->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our Happy Client</h3>
                                <h4>Testimonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Integer posuere erat a ante.
                                    </p>
                                    <footer class="blockquote-footer">Mr. David</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- /.col-sm-7 -->
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="" />
                        </div>
                        <!-- /.col-sm-5 -->
                    </div>
                </div>
            </div>
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
</section>
<!-- /.section-reviews -->

<section class="section-form text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Need Help?</h4>
                <h5>Don't Forget to Contact With Us</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
                    iusto modi illo quasi maiores iure expedita vel quo, magnam quia
                    temporibus consectetur unde, repellendus odit culpa rerum.
                    Suscipit, nihil, provident!
                </p>

                <form class="text-left">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Name" />
                        </div>
                        <div class="col-md-5">
                            <input
                                type="email"
                                class="form-control"
                                placeholder="Email"
                                />
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-violet btn-shadow">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.section-form -->

<?php get_footer(); ?>