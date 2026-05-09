<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @page {
            margin: 0;
        }

        body {
            font-family: Helvetica, Arial, sans-serif;
            background: #ffffff;
            color: #111827;
            width: 100%;
            height: 100%;
        }

        .page {
            width: 210mm;
            height: 297mm;
            position: relative;
            overflow: hidden;
        }

        /* ── Top third ── */
        .hero {
            height: 69mm;
            background: #f0fdf4;
            padding: 15mm 12mm;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            border-bottom: 3px solid #059669;
        }

        .hero-content {
            width: 55%;
        }

        .hero-qr {
            position: absolute;
            top: 12mm;
            right: 15mm;
        }

        .hero-qr img {
            width: 55mm;
            height: 55mm;
            border-radius: 4mm;
            border: 2px solid #d1d5db;
        }

        .hero-qr p {
            font-size: 9pt;
            color: #6b7280;
            margin-top: 3mm;
            text-align: center;
            font-weight: bold;
        }

        .logo {
            font-size: 18pt;
            font-weight: bold;
            letter-spacing: -0.5px;
            margin-bottom: 6mm;
            color: #111827;
        }

        .logo .dot {
            color: #059669;
        }

        .business-name-hero {
            font-size: 11pt;
            font-weight: bold;
            color: #111827;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 3mm;
        }

        .headline {
            font-size: 26pt;
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 5mm;
            color: #111827;
        }

        .headline .accent {
            color: #059669;
        }

        .intro {
            font-size: 10pt;
            color: #374151;
            line-height: 1.55;
        }

        /* ── Middle third ── */
        .middle {
            position: absolute;
            top: 99mm;
            left: 0;
            right: 0;
            height: 80mm;
            padding: 15mm 12mm;
            background: #ffffff;

                        /* border-top: 3px solid #880e4f; */

        }

        .section-title {
            font-size: 16pt;
            font-weight: bold;
            color: #111827;
            margin-bottom: 2mm;
        }

        .section-subtitle {
            font-size: 9pt;
            color: #6b7280;
            margin-bottom: 8mm;
        }

        .plans {
            width: 100%;
            border-collapse: separate;
            border-spacing: 3mm 0;
        }

        .plan {
            width: 33.33%;
            vertical-align: top;
            border: 2px solid #e5e7eb;
            border-radius: 4mm;
            padding: 5mm;
        }

        .plan.popular {
            border-color: #059669;
        }

        .plan-badge {
            font-size: 7pt;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #059669;
            margin-bottom: 3mm;
        }

        .plan-name {
            font-size: 11pt;
            font-weight: bold;
            color: #111827;
            margin-bottom: 1mm;
        }

        .plan-price {
            font-size: 20pt;
            font-weight: bold;
            color: #059669;
            margin-bottom: 1mm;
        }

        .plan-period {
            font-size: 8pt;
            color: #9ca3af;
            margin-bottom: 4mm;
        }

        .plan-features {
            font-size: 8pt;
            color: #374151;
            line-height: 1.9;
        }

        .tick {
            color: #059669;
            font-weight: bold;
        }

        /* ── Bottom third ── */
        .bottom {
            position: absolute;
            left: 0;
            right: 0;
            top: 210mm;
            height: 99mm;
            padding: 12mm 20mm 15mm;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
        }

        .cta-title {
            font-size: 17pt;
            font-weight: bold;
            margin-bottom: 2mm;
            color: #111827;
        }

        .cta-subtitle {
            font-size: 10pt;
            color: #6b7280;
            margin-bottom: 10mm;
        }

        .contact-grid {
            width: 100%;
        }

        .contact-grid td {
            vertical-align: top;
            padding-bottom: 3mm;
            width: 50%;
        }

        .contact-label {
            font-size: 7pt;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1mm;
        }

        .contact-value {
            font-size: 13pt;
            color: #059669;
            font-weight: bold;
        }

        .footer {
            position: absolute;
            bottom: 8mm;
            left: 20mm;
            right: 20mm;
            font-size: 7pt;
            color: #9ca3af;
            border-top: 1px solid #e5e7eb;
            padding-top: 1mm;
        }

        .url-preview {
            font-size: 7pt;
            color: #9ca3af;
            margin-top: 1mm;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="page">
        <!-- ── Top third: headline + QR ── -->
        <div class="hero">
            <div class="hero-content">
                <div class="logo">fig<span class="dot">.</span></div>
                <table cellpadding="0" cellspacing="0" style="margin-bottom: 3mm;">
                    <tr>
                        <td style="background-color: #059669; color: #ffffff; font-size: 11pt; font-weight: bold; text-transform: uppercase; letter-spacing: 1.5px; padding: 2mm 4mm;">
                            {{ $business->name }}
                        </td>
                    </tr>
                </table>
                <div class="headline">
                    We've built you<br>
                    a <span class="accent">new website.</span>
                </div>
                <div class="intro">
                    We've taken the liberty of putting together a website for
                    <strong>{{ $business->name }}</strong>. Scan the QR code with your
                    phone to take a look &mdash; there's no commitment, and we'd love
                    to hear what you think.
                </div>
            </div>
            <div class="hero-qr">
                <img src="{{ $qrDataUri }}" alt="QR Code">
                <p>Scan to preview</p>
            </div>
        </div>

        <!-- ── Middle third: pricing ── -->
        <div class="middle">
            <div class="section-title">Simple, honest pricing.</div>
            <div class="section-subtitle">No setup fees. No contracts. Cancel any time.</div>

            <table class="plans">
                <tr>
                    
                    @foreach ($plans as $plan)
                        <td class="plan {{ $plan['options']['popular'] ? 'popular' : '' }}">
                            <div class="plan-badge">{{ $plan['options']['popular'] ? 'Most Popular' : '&nbsp;' }}</div>
                            <div class="plan-name">{{ $plan['options']['title'] }}</div>
                            <div class="plan-price">{{ $plan['options']['price'] }}</div>
                            <div class="plan-period">per month</div>
                            <div class="plan-features">
                                @foreach ($plan['bullets'] as $bullet)
                                    <span class="tick">&bull;</span> {{ $bullet }}<br>
                                @endforeach
                            </div>
                        </td>
                    @endforeach

                </tr>
            </table>
        </div>

        <!-- ── Bottom third: contact ── -->
        <div class="bottom">
            <div class="cta-title">Like what you see?</div>
            <div class="cta-subtitle">Get in touch and we can have your site live in no time. No pressure, just a chat.</div>

            <table class="contact-grid">
                <tr>
                    <td>
                        <div class="contact-label">Email</div>
                        <div class="contact-value">support@fig.limited</div>
                    </td>
                    <td>
                        <div class="contact-label">WhatsApp</div>
                        <div class="contact-value">07515 382159</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="contact-label">Web</div>
                        <div class="contact-value">fig.limited</div>
                    </td>
                    <td>
                        <div class="contact-label">Based in</div>
                        <div class="contact-value">Penwortham, Preston</div>
                    </td>
                </tr>
            </table>

            <div class="footer">
                &copy; {{ date('Y') }} Fig Limited &mdash; Web design &amp; hosting.
                <div class="url-preview">{{ $previewUrl }}</div>
            </div>
        </div>
    </div>
</body>
</html>
