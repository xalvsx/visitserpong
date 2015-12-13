<div class="col-xs-12">
	<h1 class="text-center">
		Category : <?php echo strtoupper($category->nama_kategori); ?>
	</h1>
</div>
<div class="col-sm-4 col-xs-12 category_left_box">
	<img src="<?php echo base_url('assets/img/category/' . $category->foto_kategori); ?>" alt="<?php echo $category->id_kategori; ?>" class="img-responsive">
</div>
<div class="col-sm-8 col-xs-12 category_right_box">
	<?php
		foreach ($resto_list as $r) {
	?>
	<a href="<?php echo base_url('detail/' . $r->id); ?>">
		<div class="row category_header">
			<div class="col-sm-2 bblack nopadding">
				<img src="<?php echo base_url('assets/img/resto/' . $r->id); ?>.jpg" alt="<?php echo $r->nama_resto; ?>" class="img-responsive marginauto">
			</div>
			<div class="col-sm-10 bgdarkgrey white">
				<p class="text-center nomargin category_header_name">
					<?php echo $r->nama_resto; ?>
				</p>
			</div>
		</div>
	</a>
	<?php
		}
	?>
</div>