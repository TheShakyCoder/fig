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
            height: 70mm;
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
            font-size: 9pt;
            color: #4b515c;
            margin-bottom: 1mm;
        }

        .plan-upfront {
            font-size: 7pt;
            color: #6b7280;
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
            top: 205mm;
            height: 99mm;
            padding: 10mm 20mm 15mm;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
        }

        .cta-box {
            width: 170mm;
            height: 30mm;
            border: 2px solid #059669;
            border-radius: 6mm;
            margin-bottom: 5mm;
            background: #f0fdf4;
            display: block;
            text-align: center;
            vertical-align: middle;
            line-height: 33mm;
            font-size: 14pt;
            font-weight: bold;
            color: #059669;
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
            margin-bottom: 4mm;
        }

        .contact-grid {
            width: 100%;
        }

        .contact-grid td {
            vertical-align: top;
            padding-bottom: 1mm;
            width: 50%;
        }

        .contact-label {
            font-size: 6pt;
            color: #4b515c;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5mm;
        }

        .contact-value {
            font-size: 9pt;
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

        /* ── Page 2: Legal back page ── */
        .page-legal {
            width: 186mm;
            height: 297mm;
            padding: 12mm 14mm 10mm;
            page-break-before: always;
            position: relative;
            overflow: hidden;
        }

        .legal-header {
            margin-bottom: 5mm;
            padding-bottom: 3mm;
            border-bottom: 2px solid #059669;
        }

        .legal-header .logo {
            font-size: 14pt;
            margin-bottom: 1mm;
        }

        .legal-header p {
            font-size: 6.5pt;
            color: #9ca3af;
        }

        .legal-columns {
            width: 100%;
        }

        .legal-columns td {
            width: 50%;
            vertical-align: top;
            padding-right: 4mm;
        }

        .legal-columns td + td {
            padding-right: 0;
            padding-left: 4mm;
            border-left: 1px solid #e5e7eb;
        }

        .legal-doc-title {
            font-size: 9pt;
            font-weight: bold;
            color: #059669;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 3mm;
        }

        .legal-section-title {
            font-size: 6.5pt;
            font-weight: bold;
            color: #111827;
            margin-top: 2mm;
            margin-bottom: 0.8mm;
        }

        .legal-text {
            font-size: 5.5pt;
            color: #374151;
            line-height: 1.5;
            margin-bottom: 1.2mm;
        }

        .legal-list {
            font-size: 5.5pt;
            color: #374151;
            line-height: 1.5;
            margin-bottom: 1.2mm;
            padding-left: 3mm;
        }

        .legal-footer {
            position: absolute;
            bottom: 8mm;
            left: 14mm;
            right: 14mm;
            font-size: 6pt;
            color: #9ca3af;
            border-top: 1px solid #e5e7eb;
            padding-top: 2mm;
            text-align: center;
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
                    to hear what you think. (This website is NOT publicly accessible.)
                </div>
            </div>
            <div class="hero-qr">
                <img src="{{ $qrDataUri }}" alt="QR Code">
                <p>Scan to preview</p>
                <p>{{ $business->domain }}</p>
            </div>
        </div>

        <!-- ── Middle third: pricing ── -->
        <div class="middle">
            <div class="section-title">Simple, honest pricing.</div>
            <div class="section-subtitle">No monthly fees. Just a small one-off design fee and your domain.</div>

            <table class="plans">
                <tr>
                    <td class="plan">
                        <div class="plan-badge">One-off</div>
                        <div class="plan-name">Design &amp; Build</div>
                        <div class="plan-price">&pound;49</div>
                        <div class="plan-period">one-off fee</div>
                        <div class="plan-features">
                            <span class="tick">&bull;</span> Bespoke design<br>
                            <span class="tick">&bull;</span> Hand-coded, fast loading<br>
                            <span class="tick">&bull;</span> Mobile friendly<br>
                        </div>
                    </td>
                    <td class="plan">
                        <div class="plan-badge">Annual</div>
                        <div class="plan-name">Domain</div>
                        <div class="plan-price">from &pound;20</div>
                        <div class="plan-period">per year</div>
                        <div class="plan-features">
                            <span class="tick">&bull;</span> .co.uk &pound;20<br>
                            <span class="tick">&bull;</span> .com &pound;40<br>
                            <span class="tick">&bull;</span> .io &pound;70<br>
                        </div>
                    </td>
                    <td class="plan ">
                        <div class="plan-badge">Included</div>
                        <div class="plan-name">Hosting</div>
                        <div class="plan-price">Free</div>
                        <div class="plan-period">forever</div>
                        <div class="plan-features">
                            <span class="tick">&bull;</span> SSL certificate<br>
                            <span class="tick">&bull;</span> Daily backups<br>
                            <span class="tick">&bull;</span> Uptime monitoring<br>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- ── Bottom third: contact ── -->
        <div class="bottom">
            <div class="cta-box">
                Enjoy this treat while you ponder our offer.
            </div>

            <div class="cta-title">Like what you see?</div>
            <div class="cta-subtitle">Get in touch and we can have your site live in no time. No pressure, just a chat.</div>

            <table class="contact-grid">
                <tr>
                    <td>
                        <div class="contact-label">Email</div>
                        <div class="contact-value">sharif.khan@fig.ltd.uk</div>
                    </td>
                    <td>
                        <div class="contact-label">WhatsApp</div>
                        <div class="contact-value">07515 382159</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="contact-label">Web</div>
                        <div class="contact-value">fig.ltd.uk</div>
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

    <!-- ══════════════════════════════════════════════════════════ -->
    <!-- PAGE 2: Terms of Service & Privacy Policy                 -->
    <!-- ══════════════════════════════════════════════════════════ -->
    <div class="page-legal">
        <div class="legal-header">
            <div class="logo">fig<span class="dot">.</span></div>
            <p>Terms of Service &amp; Privacy Policy &mdash; fig.ltd.uk &mdash; Last updated: {{ date('j F Y') }}</p>
        </div>

        <table class="legal-columns">
            <tr>
                <!-- ── Left column: Terms of Service ── -->
                <td>
                    <div class="legal-doc-title">Terms of Service</div>

                    <div class="legal-section-title">1. Introduction</div>
                    <div class="legal-text">These Terms of Service govern your use of fig.ltd.uk and any web design, development, and hosting services provided by Fig Limited, a company registered in England with its principal place of business in Penwortham, Preston, Lancashire. By accessing our Website or using our Services, you agree to be bound by these Terms.</div>

                    <div class="legal-section-title">2. Our Services</div>
                    <div class="legal-text">Fig provides website design, development, and hosting. <strong>Design &amp; Build</strong> &mdash; a one-off fee of &pound;49 to design and build your bespoke site. <strong>Hosting</strong> &mdash; included free of charge for the duration of your engagement with Fig, including SSL, daily backups, and uptime monitoring. <strong>Domain</strong> &mdash; an annual fee charged at cost depending on the TLD chosen (e.g. .co.uk from &pound;20/year, .com from &pound;40/year, .io from &pound;70/year).</div>

                    <div class="legal-section-title">3. Account Registration</div>
                    <div class="legal-text">You agree to provide accurate, complete, and current information when creating an account. You are responsible for maintaining the confidentiality of your login credentials and for all activity under your account.</div>

                    <div class="legal-section-title">4. Payment and Billing</div>
                    <div class="legal-text">All prices are in GBP and inclusive of VAT where applicable. The design fee is payable up front before work begins. Domain registration and renewal are billed annually. We may change prices with 30 days' written notice. We do not store payment card details; all payments are processed securely by our third-party provider.</div>

                    <div class="legal-section-title">5. Design, Development &amp; IP</div>
                    <div class="legal-text">We design and build your website based on agreed requirements. We retain ownership of design files, source code, and templates until full payment. Upon payment, you receive a licence to use the website for the duration of your subscription. You retain ownership of content you provide; by providing it you grant Fig a non-exclusive licence to use it for delivering the Services.</div>

                    <div class="legal-section-title">6. Hosting and Uptime</div>
                    <div class="legal-text">We strive for high availability but do not guarantee 100% uptime. We are not liable for interruptions caused by factors beyond our reasonable control. We perform regular backups but you are encouraged to maintain your own.</div>

                    <div class="legal-section-title">7. Your Responsibilities</div>
                    <div class="legal-text">You agree not to use the Services unlawfully, upload harmful or infringing content, attempt unauthorised access to our systems, or send unsolicited bulk communications.</div>

                    <div class="legal-section-title">8. Cancellation</div>
                    <div class="legal-text">You may cancel at any time by emailing support@fig.ltd.uk. The design fee is non-refundable once work has commenced. Domain fees already paid for the current year are non-refundable. Your website will be taken offline; we retain data for 30 days. We may suspend or terminate Services immediately for breach of these Terms or non-payment.</div>

                    <div class="legal-section-title">9. Limitation of Liability</div>
                    <div class="legal-text">To the maximum extent permitted by law, Fig Limited shall not be liable for any indirect, incidental, special, consequential, or punitive damages. Our total liability shall not exceed the amount you have paid in the 12 months preceding the claim. Nothing excludes liability for death, personal injury, or fraud.</div>

                    <div class="legal-section-title">10. Indemnification &amp; Force Majeure</div>
                    <div class="legal-text">You agree to indemnify Fig Limited against claims arising from your use of the Services or breach of these Terms. We shall not be liable for failure or delay caused by circumstances beyond our reasonable control.</div>

                    <div class="legal-section-title">11. General</div>
                    <div class="legal-text">These Terms are governed by the laws of England and Wales. If any provision is found invalid, the remaining provisions continue in effect. These Terms and our Privacy Policy constitute the entire agreement between you and Fig Limited.</div>
                </td>

                <!-- ── Right column: Privacy Policy ── -->
                <td>
                    <div class="legal-doc-title">Privacy Policy</div>

                    <div class="legal-section-title">1. Who We Are</div>
                    <div class="legal-text">Fig Limited is a web design and hosting company registered in England. We are the data controller responsible for your personal data. Contact us at support@fig.ltd.uk or by WhatsApp on 07515 382159.</div>

                    <div class="legal-section-title">2. What Data We Collect</div>
                    <div class="legal-text"><strong>Information you provide:</strong> Name, email, phone, postcode via our contact form; business details as a client; payment information (processed by our payment provider &mdash; we do not store card details). <strong>Information collected automatically:</strong> IP address, browser type, OS, device info; pages visited, time on pages, navigation paths; cookie data (see Section 7).</div>

                    <div class="legal-section-title">3. How We Use Your Data</div>
                    <div class="legal-text">To provide our services (design, build, host, manage your website); respond to enquiries; process payments; improve our website; and comply with legal obligations under UK and EU law.</div>

                    <div class="legal-section-title">4. Legal Basis (GDPR)</div>
                    <div class="legal-text">Under the UK GDPR and Data Protection Act 2018 we rely on: <strong>Consent</strong> (e.g. contact form, cookies); <strong>Contract</strong> (performing services); <strong>Legitimate interests</strong> (improving services, security); and <strong>Legal obligation</strong> (regulatory compliance).</div>

                    <div class="legal-section-title">5. Data Sharing</div>
                    <div class="legal-text">We do not sell, rent, or trade your data. We may share data with hosting providers, payment processors, email service providers, professional advisers, and law enforcement where required. All third parties must process data in accordance with data protection law.</div>

                    <div class="legal-section-title">6. Data Retention</div>
                    <div class="legal-text">Contact form submissions: 12 months. Client data: duration of contract plus 6 years (HMRC). Analytics: anonymised after 26 months. Cookie consent: 12 months.</div>

                    <div class="legal-section-title">7. Cookies</div>
                    <div class="legal-text">We use essential cookies only: <strong>cookie_consent</strong> (stores your preference, 12 months); <strong>XSRF-TOKEN</strong> (CSRF protection, session); <strong>fig_session</strong> (login session, session). A consent banner is shown on first visit. You can control cookies through your browser settings.</div>

                    <div class="legal-section-title">8. Your Rights Under GDPR</div>
                    <div class="legal-text">You have the right to: access your data; rectify inaccurate data; request erasure; restrict processing; data portability; object to processing; and withdraw consent at any time. Email support@fig.ltd.uk to exercise these rights &mdash; we will respond within one month. You may also lodge a complaint with the ICO at ico.org.uk.</div>

                    <div class="legal-section-title">9. Data Security</div>
                    <div class="legal-text">We use SSL/TLS encryption, secure hosting, regular security updates, and access controls to protect your data against unauthorised access, alteration, disclosure, or destruction.</div>

                    <div class="legal-section-title">10. International Transfers</div>
                    <div class="legal-text">Data is primarily processed within the UK and EEA. Where transferred outside, we ensure appropriate safeguards such as Standard Contractual Clauses or UK adequacy decisions.</div>

                    <div class="legal-section-title">11. Children &amp; Changes</div>
                    <div class="legal-text">Our services are not directed at individuals under 16. We do not knowingly collect data from children. We may update this policy from time to time; changes will be posted with an updated revision date.</div>

                    <div class="legal-section-title">12. Contact Us</div>
                    <div class="legal-text"><strong>Fig Limited</strong> &mdash; Email: support@fig.ltd.uk &mdash; WhatsApp: 07515 382159 &mdash; Web: fig.ltd.uk &mdash; Based in Penwortham, Preston, Lancashire.</div>
                </td>
            </tr>
        </table>

        <div class="legal-footer">
            &copy; {{ date('Y') }} Fig Limited &mdash; Web design &amp; hosting &mdash; fig.ltd.uk &mdash; Full terms available at fig.ltd.uk/terms &mdash; Full privacy policy at fig.ltd.uk/privacy
        </div>
    </div>
</body>
</html>
