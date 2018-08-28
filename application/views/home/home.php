<?php
$select = array("About","Service","Projects","Contact");
foreach($select as $section){
?>
<section id="<?php echo $section; ?>" class="sector_container">
	<div class="container sector_content">
		<div class="row" style="display: none;">
			<div class="col-lg-12">
				<div class="heading-white">
					<h2 class="title"><?php echo $section; ?></h2>
					<p>Hallo</p>
				</div>
			</div>
		</div>
		<div class="row page_row_container" >
			<?php get_module("home/home_pages/".$section); ?>
		</div>
	</div>
</section>
<?php }?>
<style>
	.sector_container{
		min-height: 100%;
		padding: 10px;
		display: block;
	}
	.page_row_container{
		padding: 50px 20px;
		border: 1px dashed #c2c2c2;
		min-height: 500px;
		background: #fff;
		
	}
	.page_row{
		padding: 0px 80px;
		
	}
	.page_row h1{
		font-size: 30px;
		text-align: center;
		font-weight: bold;
	}
	.page_row .about_desc{
		font-size: 15px;
		margin: 20px;
	}
</style>

