<div class="page_row">
	<h1>Hi, I'm Archie. Nice to meet you</h1>
	<div class="about_desc">
		bla bla bla bla bla
	</div>
	<legend></legend>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-lg-4 col-md-4 about_lower_col">
				<div class="about_lower_col_container">
					<div class="about_lower_col_title">About me,</div>
					<legend></legend>
					<div class="about_lower_col_desc">
						Since the beginning my journey as a web developer nearly 7 years ago, 
						I've done some remote work for various company, in developing user interfaces websites, 
						project management, Q&A, technical support, debugging, and training staff within 
						eCommerce technologies. Proven ability in optimizing web functionality 
						that improve data retrieval and workflow efficiencies.
					</div>
				</div>
			</div>
			<div class="col col-lg-4 col-md-4 about_lower_col">
				<div class="about_lower_col_container">
					<div class="about_lower_col_title">Language</div>
					<legend></legend>
					<div class="about_lower_col_desc">
						<?php get_module("home/home_pages/about_pages/skills_language"); ?>
						
					</div>
				</div>
			</div>
			<div class="col col-lg-4 col-md-4 about_lower_col">
				
				
				<div class="about_lower_col_container">
					<div class="about_lower_col_title">Framework</div>
					<legend></legend>
					<div class="about_lower_col_desc">
						<?php get_module("home/home_pages/about_pages/skills_framework"); ?>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
<style>
	
	.about_lower_col{

		min-height: 200px;
	}
	.about_lower_col_title{
		margin: 15px 0px 2px;
		font-size: 20px;
		font-weight: bold;
	}
	.progress-bar{
		text-align: left !important;
		padding-left: 20px;
	}
	.skill_name{
		font-size: 15px;
		text-align: left;
		margin-left: 10px;
	}
</style>
