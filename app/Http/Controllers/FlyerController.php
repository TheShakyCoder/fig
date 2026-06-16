<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Barryvdh\DomPDF\Facade\Pdf;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class FlyerController extends Controller
{
    public function __invoke(Business $business)
    {
        $previewUrl = route('preview', $business);

        $qrCode = new QrCode(data: $business->domain, size: 250, margin: 0);

        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        $qrDataUri = $result->getDataUri();

        $pdf = Pdf::loadView('flyers.business', [
            'business' => $business,
            'qrDataUri' => $qrDataUri,
            'previewUrl' => $previewUrl,
        ])->setPaper('a4');

        $filename = str($business->name)->slug() . '-flyer.pdf';

        return $pdf->stream($filename);
    }
}
