<div class="row category_header">
	<div class="col-sm-2 bblack nopadding">
		<img src="<?php echo base_url('assets/img/resto/' . $resto->id); ?>.jpg" alt="<?php echo $resto->nama_resto; ?>" class="img-responsive marginauto">
	</div>
	<div class="col-sm-10 bgdarkgrey white">
		<p class="text-center nomargin category_header_name">
			<?php echo $resto->nama_resto; ?>
		</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<iframe class="category_map" src="<?php echo $resto->maps_iframe; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="row col-xs-12">
			<div class="row menu_row">
				<img src="<?php echo base_url('assets/img/resto/' . $resto->foto_menu); ?>" class="img-responsive menu_img">
			</div>
			<div class="row bgblack">
				<p class="contact_text text-center">
					TELEPON: <?php echo $resto->no_telp; ?><br/>
					<br/>
					LOKASI<br/>
					<?php echo strtoupper($resto->alamat); ?>
				</p>
			</div>
		</div>
	</div>
</div>