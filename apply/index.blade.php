<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Membership Application Form | SNAT Savings And Credit Cooperative Society (SACCO)</title>
	<meta name="keywords" content="SNAT, SACCO, teachers, Savings and Credit Co-operative, Kingdom of Eswatini, formed and launched in 1986, SNAT SACCO, membership, assets, affiliated, Eswatini Association of Savings and Credit Co-operatives, ESASCCO, regulated, Co-operatives Societies Act of 2003, Financial Services Regulatory Authority Act of 2010, Board of Directors, Executive, Supervisory, Credit and Education Committees, the SACCO has a management team, General Manager, employees">
	<meta name="description" content="SNAT SACCO an exclusively teachers’ Savings and Credit Co-operative in the Kingdom of Eswatini, formed and launched in 1986. SNAT SACCO is the leading savings and credit cooperative in the kingdom both in membership and assets. The SACCO is affiliated to the Eswatini Association of Savings and Credit Co-operatives (ESASCCO), regulated by the Co-operatives Societies Act of 2003 and the Financial Services Regulatory Authority Act of 2010. SNAT. Led by a Board of Directors that comprise the Executive, Supervisory, Credit and Education Committees, the SACCO has a management team that is led by the General Manager, with about 40 employees. SNAT Savings And Credit Cooperative Society is a teachers SACCO whose membership includes teachers who are also members of SNAT Trade Union, lectures in colleges and institutions in the country and employees of the society and those of SNAT Union. The society was formed and launched in 1986 and to date has active membership of almost 12 000">

	<?php require('../../inclds/HScripts.php'); ?>

</head>

<body>

	<?php require('../../inclds/HMembers.php'); ?>


	<main id="main">

		<div class="TopBannerResources">
		</div>


		<div class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Apply Now</h2>
					<ol>
						<li><a href="../../">Home</a></li>
						<li><a href="../">Membership</a></li>
						<li>Membership Application Form</li>
					</ol>
				</div>

			</div>
		</div>




		<section class="MainText contact">
			<div class="container" data-aos="fade-up">
				<div class="section-header">
					<h2>Membership Application Form</h2>
					<div class="divider my-4"></div>
				</div>
				@if(Session::has('success') )
				<div style="border:5px dotted #999; padding:1rem; background:green; margin-bottom:2rem;">
					<p style="color:#FFE8E6"><strong>{{Session::get('success')}}</strong></p>
				</div>
				@endif
				<div style="border:5px dotted #999; padding:1rem; background:#FFE8E6; margin-bottom:2rem;">

					<p><strong>Joining Requirements</strong></p>

					<ul>
						<li>One must be a teacher employed by the Eswatini Government.</li>
					</ul>

				</div>


				<p>Please upload the following: Joining forms, National ID card, Current Payslip, Proof of Residence, Passport size photo.</p>

				<form action="{{Route('submit')}}" method="post" role="form" class="php-email-form " id="form" enctype="multipart/form-data">
					@csrf
					<div class="form-group mt-3">

						<label>Attach Membership Application Form</label>

						<input type="file" name="application_form" class="form-control" accept="application/pdf" id="fileInput">
						<p id="errorText" style="color: red;"></p>

					</div>

					<div class="form-group mt-3">

						<label>Attach New Entrance Stop Order</label>

						<input type="file" name="stop_order" class="form-control" accept="application/pdf" id="input2">
						<p id="error2" style="color: red;"></p>
					</div>

					<div class="form-group mt-3">

						<label>Attach National ID Card</label>

						<input type="file" name="id_card" class="form-control" accept="application/pdf" id="input3">
						<p id="error3" style="color: red;"></p>
					</div>

					<div class="form-group mt-3">

						<label>Attach Current Payslip</label>

						<input type="file" name="payslip" class="form-control" accept="application/pdf" id="input4">
						<p id="error4" style="color: red;"></p>
					</div>

					<div class="form-group mt-3">

						<label>Attach Proof of Residence</label>

						<input type="file" name="proof_of_residence" class="form-control" accept="application/pdf" id="input5">
						<p id="error5" style="color: red;"></p>
					</div>

					<div class="form-group mt-3">

						<label>Attach Residential Address Confirmation</label>

						<input type="file" name="residential_address" class="form-control" accept="application/pdf" id="input6">
						<p id="error6" style="color: red;"></p>
					</div>

					<div class="form-group mt-3">

						<label>Attach Proof of Residence Owner's ID</label>

						<input type="file" name="owner_id" class="form-control" accept="application/pdf" id="input7">
						<p id="error7" style="color: red;"></p>
					</div>

					<div class="form-group mt-3">

						<label>Attach Passport Size Photo</label>

						<input type="file" name="photo" class="form-control" accept="application/pdf" id="input8">
						<p id="error8" style="color: red;"></p>
					</div>

					<div class="text-center">
						<button type="button" onclick="validateFile()">Sumbit Application</button>
					</div>

				</form>







			</div>

		</section>


	</main>


	<?php require('../../inclds/Footer.php'); ?>
	@include('apply.form')
	<?php require('../../inclds/FScripts.php'); ?>


	<script script>

	</script>


</body>

</html>