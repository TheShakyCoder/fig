<?php

namespace App\Http\Controllers\Admin;

use App\Models\Business;
use Barryvdh\DomPDF\Facade\Pdf;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use App\Http\Controllers\Controller;

class PromotedBusinessController extends Controller
{
    public function show(Business $business)
    {
        $previewUrl = route('admin.promoted-businesses.show', $business);

        $qrCode = new QrCode(data: $business->domain, size: 250, margin: 0);

        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        $qrDataUri = $result->getDataUri();

        $pdf = Pdf::loadView('admin.promoted-businesses.show', [
            'business' => $business,
            'qrDataUri' => $qrDataUri,
            'previewUrl' => $previewUrl,
        ])->setPaper('a4');

        $filename = str($business->name)->slug() . '-promoted-business.pdf';

        return $pdf->stream($filename);
    }
}
