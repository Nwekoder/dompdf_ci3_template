<?php

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class Pdfgen {
    public function generate($html, $filename, $paper = 'A4', $orientation = 'potrait', $stream=TRUE) {
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->setPaper($paper, $orientation);
        $pdf->render();
        if($stream) {
            $pdf->stream($filename . ".pdf", array(
                "Attachment" => 0
            ));
        }else {
            return $pdf->output();
        }
    }
}