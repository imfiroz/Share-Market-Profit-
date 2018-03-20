<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(! function_exists('create_excel')) {
    function create_excel($excel, $filename) {
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');
        // PHPExcel_Settings::setZipClass(PHPExcel_Settings::PCLZIP); 
        $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        return $objWriter->save('php://output');
    }
}
