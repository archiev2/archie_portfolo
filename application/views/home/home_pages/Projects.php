<?php
	$work_exp['Webcert']['Date'] = "Jan. 2014 – July 2018";
	$work_exp['Webcert']['Position'] = "Web Developer, Maintenance, and Technical Support";
	$work_exp['Webcert']['Location'] = "Victoria, Melbourne, Australia";
	$work_exp['Webcert']['Website'] = "http://webcert.org.au";

	$work_exp['WebXpress.inc']['Date'] = "Oct. 2011- Dec. 2013";
	$work_exp['WebXpress.inc']['Position'] = "Web Developer";
	$work_exp['WebXpress.inc']['Location'] = "i3 building, IT Park, Lahug, Cebu City, Cebu, Philippines";

	$work_exp['Paymycafe.inc']['Date'] = "Feb. 2011 – Aug. 2011";
	$work_exp['Paymycafe.inc']['Position'] = "Web Developer";
	$work_exp['Paymycafe.inc']['Location'] = "Banawa, Cebu City, Cebu, Philippines";
	$work_exp['Paymycafe.inc']['Website'] = "http://paymycafe.com";
	
	$work_exp['Mr. E-Sourcing/callout Solution']['Date'] = "Jan. 2010 – Nov. 2010";
	$work_exp['Mr. E-Sourcing/callout Solution']['Position'] = "Web Developer";
	$work_exp['Mr. E-Sourcing/callout Solution']['Location'] = "VSB building, Lacson St. Bacolod City, Negros Occ. Philippines";
	$work_exp['Mr. E-Sourcing/callout Solution']['Website'] = "http://www.mresourcing.com/";

	// echo "<pre>";
	// print_r($work_exp);
	// echo "</pre>";

?>



<div class="page_row">
	<h1>Company I work with</h1>
	<legend></legend>
	<div class="container-fluid">
		<div class="row">
			<?php foreach($work_exp as $company => $work_data){ ?>
			<div class="col-lg-12 col-md-12">
				<div class="project_lower_col">
					<div class="project_lower_col_container">
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $company; ?></div>
							<div class="panel-body">
								<table>
									<tr>
										<td>Date:</td>
										<td><?php echo $work_data['Date']; ?></td>
									</tr>
									<tr>
										<td>Position:</td>
										<td><?php echo $work_data['Position']; ?></td>
									</tr>
									<tr>
										<td>Location:</td>
										<td><?php echo $work_data['Location']; ?></td>
									</tr>
									<?php if(isset($work_data['Website'])){ ?>
									<tr>
										<td>Website:</td>
										<td><a href="<?php echo $work_data['Website']; ?>"><?php echo $work_data['Website']; ?></a></td>
									</tr>
									<?php } ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>