<?php get_header(); ?>

    <!-- Page Header -->
    <header>
		
    </header>
	
	<article>
		<div class="breadcrumb">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<p><a href="<?php bloginfo("url")?>" style="text-decoration:none">Trang chủ</a>  /</p><?php the_category(); ?><p style=""> /<?php the_title() ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="single-content">
			<div class="container">
				<div class="row">
					<div class="col-md-9 the-content">
						<h1><?php the_title(); ?></h1>
						<div class="">
							<?php the_content() ?>
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
								<p>SẢN PHẨM LIÊN QUAN</p>
							</div>
							<div class="products-box">
								<div class="row">
									<div class="col-md-12 col-6">
										<div class="pr-box">										
											<div class="row">
												<div class="col-md-4" style="padding:0px">
													<img src="img/r8abaa3a825074cd8855f02e71efc8.jpg" class="img-thumbnail" style="padding:0px;"/>
												</div>
												<div class="col-md-8">
													<p><a href="">Bàn giám đốc hòa phát NTP1890T1</a></p>
													<p>Chi tiết</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-6">
										<div class="pr-box">										
											<div class="row">
												<div class="col-md-4" style="padding:0px">
													<img src="img/r8abaa3a825074cd8855f02e71efc8.jpg" class="img-thumbnail" style="padding:0px;"/>
												</div>
												<div class="col-md-8">
													<p><a href="">Bàn giám đốc hòa phát NTP1890T1</a></p>
													<p>Chi tiết</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-6">
										<div class="pr-box">										
											<div class="row">
												<div class="col-md-4" style="padding:0px">
													<img src="img/r8abaa3a825074cd8855f02e71efc8.jpg" class="img-thumbnail" style="padding:0px;"/>
												</div>
												<div class="col-md-8">
													<p><a href="">Bàn giám đốc hòa phát NTP1890T1</a></p>
													<p>Chi tiết</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-6">
										<div class="pr-box">										
											<div class="row">
												<div class="col-md-4" style="padding:0px">
													<img src="img/r8abaa3a825074cd8855f02e71efc8.jpg" class="img-thumbnail" style="padding:0px;"/>
												</div>
												<div class="col-md-8">
													<p><a href="">Bàn giám đốc hòa phát NTP1890T1</a></p>
													<p>Chi tiết</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
