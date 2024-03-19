<?php
session_start();
date_default_timezone_set('Africa/Johannesburg');
require('../../fdsd/lgndskjghu.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms | SNAT Savings And Credit Cooperative Society (SACCO)</title>
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
					<h2>Forms</h2>
					<ol>
						<li><a href="../">Home</a></li>
						<li>Membership</li>
						<li>Forms</li>
					</ol>
				</div>

			</div>
		</div>


		<section class="MainText">
			<div class="container" data-aos="fade-up">

				<div class="section-header">
					<h2>Forms</h2>
					<div class="divider my-4"></div>
				</div>

				<div class="row">

					<div class="col-12" data-aos="fade-up" data-aos-delay="150">

						<ul>
							<?php

							$stmt = $conn->prepare("SELECT * FROM web_forms ORDER BY web_form_id ASC");

							$stmt->execute();

							$result = $stmt->get_result();

							$rowNum = $result->num_rows;

							if ($rowNum > 0) {
								while ($show = mysqli_fetch_array($result)) {
									$web_form_id = $show['web_form_id'];
									$web_form_title = $show['web_form_title'];
									$web_form_link = $show['web_form_link'];
									$link_to_doc = "docs/";
							?>


									<li><?php echo $web_form_title; ?> &mdash; <a href="<?php echo $link_to_doc; ?><?php echo $web_form_link; ?>" target="_blank">Download <?php echo $web_form_title; ?></a></li>


							<?php }
							} ?>

						</ul>
					</div>

				</div>

			</div>
		</section><!-- End About Section -->

	</main>


	<?php require('../../inclds/Footer.php'); ?>

	<?php require('../../inclds/FScripts.php'); ?>

</body>

</html>