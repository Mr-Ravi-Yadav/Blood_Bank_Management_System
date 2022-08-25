<?php
$con = new mysqli('localhost','root','','mydb');
mysqli_select_db($con,"stock");

$q = "SELECT * FROM stock";

$s = mysqli_query($con,$q);

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",16);
    $pdf->Cell(0,10,"Blood Stock Report",0,1,'C');
    
    $pdf->Cell(80,10,"Blood Group",1,0,'C');
    $pdf->Cell(80,10,"Unit",1,1,'C');
    
    while($res = mysqli_fetch_array($s)){
        $pdf->Cell(80,10,$res['BloodGroup'],1,0,'C');
        $pdf->Cell(80,10,$res['units'],1,1,'C');


    }
    $pdf->output();
    



?>