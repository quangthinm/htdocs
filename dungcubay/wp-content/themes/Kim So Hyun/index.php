<?php get_header(); ?>
    <!-- Page Header -->
    <header>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<!-- Slide One - Set the background image for this slide in the line below -->
				<div class="carousel-item active" style="background-image: url('img/home-bg.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<h3>First Slide</h3>
						<p>This is a description for the first slide.</p>
					</div>
				</div>
				<!-- Slide Two - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('img/contact-bg.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<h3>Second Slide</h3>
						<p>This is a description for the second slide.</p>
					</div>
				</div>
				<!-- Slide Three - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('img/post-bg.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<h3>Third Slide</h3>
						<p>This is a description for the third slide.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
    </header>
	
	<article>
		<div class="container">
			<div class="row">
				<div class="col-md-6 category">
					<img src="img/cate1.png"/>
				</div>
				<div class="col-md-6 category">
					<img src="img/cate2.png"/>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 feature-products">
					<h2>SẢN PHẨM NỔI BẬT</h2>
				</div>
			</div>
			<div class="products-list">
				<div class="row">
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&cat=3'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<div class="col-md-3 col-sm-6 product-box">
							<div class="product-thumb">
								<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?></a>
							</div>
							<div class="product-info">
								<p><a href="#"><?php the_title() ?></a></p>
								<p><a href="<?php the_permalink(); ?>">Chi tiết</a></p>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->				
				</div>
			</div>
			<div class="view-all">
				<div class="row">
					<div class="col-md-12 viewall">
						<a href="">XEM TOÀN BỘ SẢN PHẨM</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row banner">
				<div class="col-md-12 content_sec_banner_infor">
					<p>SunMax - Hệ thống phân phối & bán lẻ nội thất số 1 tại Việt Nam</p>
					<p>Hotline: 0165939688</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 feature-products">
					<h2>VIDEO HƯỚNG DẪN</h2>
				</div>
			</div>
			<div class="products-list">
				<div class="row">
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&cat=4'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<div class="col-md-3 col-sm-6 product-box">
							<div class="product-thumb">
								<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?></a>
							</div>
							<div class="product-info">
								<p><a href="#"><?php the_title() ?></a></p>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->				
				</div>
			</div>
			<div class="view-all">
				<div class="row">
					<div class="col-md-12 viewall">
						<a href="">XEM TOÀN BỘ VIDEO</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 feature-products">
					<h2>TIN NỔI BẬT</h2>
				</div>
			</div>
			<div class="products-list">
				<div class="row">
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=post&cat=6'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<div class="col-md-3 col-sm-6 product-box">
							<div class="product-thumb">
								<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?></a>
							</div>
							<div class="product-info">
								<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
								<div class="row">
									<div class="col-6">
										<p class="news-post-day"><i class="fa fa-clock"></i>     <?php the_date(); ?></p>
									</div>
									<div class="col-6">
										<p class="news-auth"><i class="fas fa-user"></i>     <?php the_author(); ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
				</div>
			</div>
		</div>
<?php get_footer(); ?>
