<div class="row">
	<div class="col-xs-12">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <a href="#">
		      	<img src="<?php echo base_url('assets/img/statemakanan1.png'); ?>" alt="...">
		      </a>
		    </div>
		    <div class="item">
		      <a href="#">
		      	<img src="<?php echo base_url('assets/img/statemakanan2.png'); ?>" alt="...">
		      </a>
		    </div>
		    <div class="item">
		      <a href="#">
		      	<img src="<?php echo base_url('assets/img/statemakanan3.png'); ?>" alt="...">
		      </a>
		    </div>
		  </div>

		  <!-- 
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>
		  -->

		  
		  <a class="left carousel-control hide" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control hide" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="home_slider_title">
			<b><?php echo strtoupper("EXPLORE THE BEST FOOD YOU'LL EVER GET IN SERPONG!"); ?></b>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
	<div class="col-xs-12 nopadding" style="background:url('<?php echo base_url("assets/img/bakmi.jpg"); ?>');background-size: 100%;">
		<div class="" style="width:100%;position:absolute;height:100%;background:url('<?php echo base_url('assets/img/strip.png'); ?>') repeat;">

		</div>
		<div class="main_container">
			<div class="row">
				<div class="col-md-4">
					<div class="row col-md-offset-1">
						<div class="col-xs-12 well well-sm grey_a80">
							EXPLORE BY CATEGORIES
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
					$i = 0;
					foreach ($category as $cat) {
					if($i != 0 && $i % 3 == 0) {
				?>
			</div>
			<div class="row">
				<?php
					}
				?>
				<div class="col-sm-4">
					<a href="<?php echo base_url('category/' . $cat->id_kategori); ?>">
						<div class="col-sm-10 col-sm-offset-1 well well-sm grey_a80">
							<div class="col-xs-12 category_photo_div nopadding">
								<img src="<?php echo base_url('assets/img/category/' . $cat->foto_kategori); ?>" alt="<?php echo $cat->nama_kategori; ?>" class="img-responsive category_photo">
							</div>
							<div class="col-xs-12 title-text">
								<h3 class="text-center"><?php echo strtoupper($cat->nama_kategori); ?></h3>
							</div>
						</div>
					</a>
				</div>
				<?php
						$i++;
					}
				?>
			</div>
		</div>


	</div>
	</div>
</div>