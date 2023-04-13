<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// MySQL database connection
session_start();
include('connection.php');
$dname=$_SESSION['username'];
// Fetch data from MySQL
$query = "SELECT * FROM patients where dentist_username='$dname'";
$result = mysqli_query($con, $query);


$objPHPExcel = new Spreadsheet();

// Set Excel worksheet properties
$objPHPExcel->getActiveSheet()->setTitle('Table Data');

// Add data to Excel worksheet
$column = 0;
$row = 1;
while ($row_data = mysqli_fetch_assoc($result)) {
    foreach ($row_data as $key => $value) {
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($column, $row, $value);
        $column++;
    }
    $row++;
    $column = 0;
}

// Save Excel file to the server
$objWriter =new Xlsx($objPHPExcel);;
$objWriter->save('patients.xlsx');

// Download Excel file
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="table_data.xlsx"');
header('Cache-Control: max-age=0');
readfile('table_data.xlsx');
exit();
?>