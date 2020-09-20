<?php get_header()?>
<section class="section-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
                                    <?php if(have_posts()):while (have_posts()):the_post();?>
					<article class="article-preview">
                                            <h2><?php the_title()?></h2>
						<div class="article-excerpt">
                                                    <?php if(has_post_thumbnail()):?>
                                                    <div class="bluerex-thumb"><a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail',array('class'=>'thumb'))?></a>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa temporibus facere quaerat cumque. Animi id neque, tempore quas earum libero aut beatae mollitia rerum repellendus, ducimus fuga, quam illum.</div>>
                                                     <?php endif;?>
							<?php the_content('')?>
						</div>
					</article>
					<!-- /.article-preview -->
                                        <?php endwhile;?>



                                        <?php else:?>
                                        <?php endif;?>
				</div>
				<!-- /.col-md-8 -->

				<?php get_sidebar()?>
				<!-- /.col-md-4 -->
			</div>
		</div>
	</section>
	<!-- /.section-content -->
<?php get_footer();?>
