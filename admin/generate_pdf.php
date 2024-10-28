<?php

require('fpdf/fpdf.php');


$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hospital';

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}


$query = "SELECT * FROM ew_view";
$result = $conn->query($query);


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 10); 

$pdf->Cell(0, 10, 'Employee Details', 0, 1, 'C');
$pdf->Ln(5);


$pdf->Cell(15, 8, 'Emp ID', 1);
$pdf->Cell(30, 8, 'Employee Name', 1);
$pdf->Cell(30, 8, 'Joining Date', 1);
$pdf->Cell(20, 8, 'Phone', 1);
$pdf->Cell(30, 8, 'Email', 1);
$pdf->Cell(30, 8, 'Worker Name', 1);
$pdf->Cell(25, 8, 'Worker Salary', 1); 
$pdf->Ln();

$pdf->SetFont('Arial', '', 8);
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(15, 8, $row['emp_id'], 1);
    $pdf->Cell(30, 8, $row['emp_name'], 1);
    $pdf->Cell(30, 8, $row['emp_doj'], 1);
    $pdf->Cell(20, 8, $row['emp_phone'], 1);
    $pdf->Cell(30, 8, $row['emp_email'], 1);
    $pdf->Cell(30, 8, $row['worker_name'], 1);
    $pdf->Cell(25, 8, $row['worker_salary'], 1);
    $pdf->Ln();
}


$pdf->Output('employee_details.pdf', 'D');


$conn->close();
?>
