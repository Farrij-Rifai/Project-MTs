<section>
	<ul>
		<li class="list active" data-filter="All">All</li>
		<li class="list" data-filter="galeri_1">Galeri 1</li>
		<li class="list" data-filter="galeri_2">Galeri 2</li>
		<li class="list" data-filter="galeri_3">Galeri 3</li>
		<li class="list" data-filter="galeri_4">Galeri 4</li>
		<li class="list" data-filter="galeri_5">Galeri 5</li>
	</ul>
</section>

<section>
	<div style="padding-left: 50px;">
	 <?php $i = 1;
	 foreach ($galeri as $value) : ?>
		<img src="<?php echo base_url().'assets/foto/galeri/'.$value['foto_galeri'];?>" width="400">                                
	<?php endforeach; ?>
	</div> 
</section>

<section>
	<h4 style="text-align: center;">Video From YouTube</h4>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/aHqjAixN_74" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>