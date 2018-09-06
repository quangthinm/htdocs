<?php get_header(); ?>

    <!-- Page Header -->
    <header>
		
    </header>
	
	<article>
		<div class="breadcrumb">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<p><a href="<?php bloginfo("url")?>" style="text-decoration:none">Trang chủ</a> / <?php the_category() ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="single-content">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="products-list">
							<div class="row">
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<div class="col-md-4 col-sm-6 product-box">
										<div class="product-thumb">
											<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?></a>
										</div>
										<div class="product-info">
											<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?>"</a></p>
											<p><a href="<?php the_permalink(); ?>">Chi tiết</a></p>
										</div>
									</div>
								<?php endwhile; else : ?>
								<p>Không có</p>
								<?php endif; ?>								
							</div>
						</div>
						<div id="pagination">
							<!--paginate-->
							<?php if(paginate_links()!='') {?>
								<nav class="pagination">
									<div class="" style="margin:auto">
									<?php
										global $wp_query;
										$big = 999999999;
										echo paginate_links( array(
											'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
											'format' => '?paged=%#%',
											'prev_text'    => __('«'),
											'next_text'    => __('»'),
											'current' => max( 1, get_query_var('paged') ),
											'total' => $wp_query->max_num_pages
											) );
										?>
									</div>
								</nav>
							<?php } ?>
							<!--end paginate-->
						</div>
					</div>
					<div class="col-md-3">
						<div class="right-box">
							<div class="box">
								<div class="row">
									<div class="col-3">
										<img src="img/icons/shiper.png" class="img-thumbnail" style="border:0px;"/>
									</div>
									<div class="col-9 module_service_details">
										<p>Giao hàng toàn quốc</p>
										<p>Thời gian chờ 3-5 ngày</p>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="row">
									<div class="col-3">
										<img src="img/icons/change.png" class="img-thumbnail" style="border:0px;"/>
									</div>
									<div class="col-9 module_service_details">
										<p>Chế độ bảo hành</p>
										<p>Đổi trả nhanh chóng</p>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="row">
									<div class="col-3">
										<img src="img/icons/pay.png" class="img-thumbnail" style="border:0px;"/>
									</div>
									<div class="col-9 module_service_details">
										<p>Hình thức thanh toán</p>
										<p>Thanh toán khi nhận hàng</p>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="row">
									<div class="col-3">
										<img src="img/icons/phone.png" class="img-thumbnail" style="border:0px;"/>
									</div>
									<div class="col-9 module_service_details">
										<p>Đặt mua online</p>
										<p style="color:#f62d3e;font-size:16px;font-weight:bold">Gọi ngay: 0123 456 789</p>
									</div>
								</div>
							</div>
						</div>
						<div class="relative-products">
							<div class="r-title">
								<p>LIÊN QUAN</p>
							</div>
							<div class="products-box">
								<div class="row">									
									<p style="display:none">
									<?php
										if( the_category_ID() == 3){
									?></p>										
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=post&cat=4'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-md-12 col-6">
												<div class="pr-box">										
													<div class="row">
														<div class="col-md-4" style="padding:0px">
															<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'img-thumbnail') ); ?>
														</div>
														<div class="col-md-8">
															<p><a href=""><?php the_title() ?></a></p>
															<p>Chi tiết</p>
														</div>
													</div>
												</div>
											</div>
										<?php endwhile; wp_reset_postdata(); ?>
									<?php
										}
									?>
									
									<p style="display:none">
									<?php
										if( the_category_ID() != 3){
									?></p>
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=post&cat=3'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-md-12 col-6">
												<div class="pr-box">										
													<div class="row">
														<div class="col-md-4" style="padding:0px">
															<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'img-thumbnail') ); ?>
														</div>
														<div class="col-md-8">
															<p><a href=""><?php the_title() ?></a></p>
															<p>Chi tiết</p>
														</div>
													</div>
												</div>
											</div>
										<?php endwhile; wp_reset_postdata(); ?>
									<?php
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
