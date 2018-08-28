<div class="page_row">
	<h1>Let's Work Together</h1>
	<br>
	<div class="row">
		<div class="col col-lg-6 col-md-6">
			<div id="map"></div>
		</div>
		<div class="col col-lg-6 col-md-6" id="contact_location">
			<div id="contact_location_title">
				My Location
			</div>
			<p>Lot 30, Block 6, Elena Subdivision, </p>
			<p>Silay City, Negros Occidental, Philippines.</p>
			<p><span class="fa fa-mobile"></span>123456789456</p>
			<p><span class="fa fa-envelope"></span>
				<a href="mailto:arcma@yahoo.com">arcma@yahoo.com</a>
			</p>
			<div id="get_in_touch">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#get_in_touch_click">Get in Touch</button>
			</div>
		</div>
	</div>

</div>
<style>
	#map{
		height: 300px;
		width: 100%;
		border: 1px solid #c2c2c2;
	}
	#contact_location_title{
		font-size: 20px;
		font-weight: bold;
		border-bottom: 1px solid #c2c2c2;
		width: 100%;
		padding: 5px 2px;
		margin-bottom: 20px;
	}
	#contact_location .fa{
		margin-right: 10px;
	}
	#get_in_touch{
		padding: 30px;		
	}
	

	#get_in_touch_click{
		margin-top: 50px;
	}
	#exampleModalLabel{
		font-weight: bold;
	}
	#Message-text{
		height: 100px;
	}
</style>
<!-- Modal -->
<div class="modal fade" id="get_in_touch_click" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<span class="modal-title" id="exampleModalLabel">Shoot a message.</span>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="Name-name" class="col-form-label">Name:</label>
						<input type="text" class="form-control" id="Name-name">
					</div>
					<div class="form-group">
						<label for="Email-name" class="col-form-label">Email:</label>
						<input type="text" class="form-control" id="Email-name">
					</div>
					<div class="form-group">
						<label for="Message-text" class="col-form-label">Message:</label>
						<textarea class="form-control" id="Message-text"></textarea>
					</div>
				</form>
				
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>