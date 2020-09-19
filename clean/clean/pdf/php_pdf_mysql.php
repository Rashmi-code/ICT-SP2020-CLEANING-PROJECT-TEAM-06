<html>
<head>

</head>
<body>
<?php
require('fpdf.php');

class PDF extends FPDF
{
//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}



//Colored table
function FancyTable($header,$data)
{
	//Colors, line width and bold font
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	//Header
	$w=array(20,30,55,25,25,25);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	//Color and font restoration
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	//Data
	$fill=false;
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
		$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
		$this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
		$this->Cell($w[4],6,number_format($row[4]),'LR',0,'R',$fill);
		$this->Cell($w[5],6,number_format($row[5]),'LR',0,'R',$fill);
		$this->Ln();
		$fill=!$fill;
	}
	$this->Cell(array_sum($w),0,'','T');
}
}

$pdf=new PDF();
//Column titles
$header=array('CustomerID','Name','Email','Country Code','Budget');
//Data loading

//*** Load MySQL Data ***//
$objConnect = mysqli_connect("localhost","root","") or die(mysql_error());
$objDB = mysql_select_db("ims");
$strSQL = "SELECT * FROM customer";
$objQuery = mysqli_query($strSQL);
$resultData = array();
for ($i=0;$i<mysql_num_rows($objQuery);$i++) {
	$result = mysql_fetch_array($objQuery);
	array_push($resultData,$result);
}
//************************//



$pdf->SetFont('Arial','',10);



//*** Table 3 ***//
$pdf->AddPage();
$pdf->Image('logo.jpg',80,8,33);
$pdf->Ln(35);
$pdf->FancyTable($header,$resultData);

$pdf->Output("pdf/mypdf.pdf","F");
?>

PDF Created Click <a href="pdf/mypdf.pdf">here</a> to Download

</body>
</html>
