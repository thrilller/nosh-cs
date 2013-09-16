<html>
<head>
<style>
@page {
	size: 8.5in 11in;
	sheet-size: Letter;
	margin: 92px 95px 92px 95px;
	margin-header: 0mm; 
	margin-footer: 5mm;
	odd-footer-name: html_rxFooter;
	even-footer-name: html_rxFooter;
}

body {
	font-family: Arial, sans-serif;
	font-size: 13;
}

h2 {
	text-align: center;
}

p {
	text-align: center;
	font-size: 11;
}

div.outline {
	border: 1;
	border-style: solid;
}

p.borders {
	border: 1;
	border-style: solid;
}

table.top {
	width: 700;
}

table.order {
	width: 700;
	page-break-inside:avoid;
}

th {
	background-color: gray;
	color: #FFFFFF;
}
</style>
</head>
<body>
<?php echo $practiceName;?><br><?php echo $practiceInfo1;?><br><?php echo $practiceInfo2;?><br><?php echo $practiceInfo3;?>
<br><br><br><br><br><br>
<?php echo $patientInfo1;?><br><?php echo $patientInfo2;?><br><?php echo $patientInfo3;?>
<br><br><br>
<p><b><?php echo $title;?></b></p>
<table class="top" cellspacing="10">
	<tr>
		<th style="width:350">PATIENT DEMOGRAPHICS</th>
		<th style="width:350">GUARANTOR AND INSURANCE INFORMATION</th>
	</tr>
	<tr>
		<td>
			<?php echo $patientInfo->lastname. ', ' . $patientInfo->firstname;?><br>
			Date of Birth: <?php echo $dob;?><br>
		</td>
		<td>
			<?php echo $insuranceInfo;?>
		</td>
	</tr>
</table><br>
<div class="outline">
	<table class="order" cellspacing="10">
		<tr>
			<th style="width:350">DATE OF SERVICE</th>
			<th style="width:350">DATE OF INVOICE</th>
		</tr>
		<tr>
			<td><?php echo $encounter_DOS;?></td>
			<td><?php echo $date;?></td>
		</tr>
	</table><br>
	<table class="order" cellspacing="10">
		<tr>
			<th style="width:350">DIAGNOSES</th>
			<th style="width:350">PROVIDER</th>
		<tr>
		<tr>
			<td><?php echo $assessment;?></td>
			<td><?php echo $encounter_provider;?></td>
	</table><br>
</div>
<?php echo $text;?>
<htmlpagefooter name="rxFooter" style="display:none">
<p>The information on this page is CONFIDENTIAL.  Any release of this information requires the expressed written authorization of the patient listed above.  For questions regarding this document, please contact the practice.</p>
<p>This document was generated by NOSH ChartingSystem.</p>
</htmlpagefooter>
</body>
</html>