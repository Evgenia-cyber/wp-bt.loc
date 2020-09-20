<?php get_header()?>
<section class="section-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
                                    <?php if(have_posts()):while (have_posts()):the_post();?>
					<article class="article-preview">
                                            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                            <p><span class="article-date"><i class="far fa-calendar-alt"></i><?php the_time('d.m.Y')?></span></p>
						<div class="article-excerpt">
                                                    <?php if(has_post_thumbnail()):?>
                                                    <div class="bluerex-thumb"><a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail',array('class'=>'thumb'))?></a>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia rerum repellendus, ducimus fuga, quam illum.</div>>
                                                     <?php endif;?>
							<?php the_content('')?>
							<p><a href="<?php the_permalink()?>" class="more"><?php _e('Read more','bluerex')?></a></p>

						</div>
					</article>
					<!-- /.article-preview -->
                                        <?php endwhile;?>

                                        <?php the_posts_pagination(array(
                                            'end-size' => 1,
                                            'mid_size' =>1,
                                            'type' => 'list'
                                        ))?>
<!--					<nav aria-label="...">
						<ul class="pagination">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active" aria-current="page">
								<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
							</li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>-->

                                        <?php else:?>
                                        <?php endif;?>
				</div>
				<!-- /.col-md-8 -->

				<div class="col-md-4">
					<div class="sidebar-widget widget-categories">
						<h5 class="widget-title">Categories</h5>
						<ul>
							<li><a href="#">Category 1</a></li>
							<li><a href="#">Category 2</a></li>
							<li><a href="#">Category 3</a></li>
							<li><a href="#">Category 4</a></li>
							<li><a href="#">Category 5</a></li>
						</ul>
					</div>
					<!-- /.sidebar-widget widget-categories -->
				</div>
				<!-- /.col-md-4 -->
			</div>
		</div>
	</section>
	<!-- /.section-content -->
<?php get_footer();?>
