<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Businesses Report</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @page {
            margin: 12mm 12mm 14mm;
        }

        body {
            font-family: Helvetica, Arial, sans-serif;
            color: #111827;
            font-size: 9pt;
        }

        .header {
            border-bottom: 2px solid #059669;
            padding-bottom: 4mm;
            margin-bottom: 5mm;
        }

        .header-row {
            width: 100%;
        }

        .header-row td {
            vertical-align: bottom;
        }

        .logo {
            font-size: 16pt;
            font-weight: bold;
            letter-spacing: -0.5px;
            color: #111827;
        }

        .logo .dot {
            color: #059669;
        }

        .title {
            font-size: 13pt;
            font-weight: bold;
            color: #111827;
            margin-top: 1mm;
        }

        .meta {
            text-align: right;
            font-size: 8pt;
            color: #6b7280;
            line-height: 1.6;
        }

        .meta strong {
            color: #111827;
        }

        table.report {
            width: 100%;
            border-collapse: collapse;
        }

        table.report thead th {
            background: #f0fdf4;
            color: #065f46;
            font-size: 7.5pt;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            font-weight: bold;
            text-align: left;
            padding: 3mm 3mm;
            border-bottom: 1.5px solid #059669;
        }

        table.report tbody td {
            padding: 2.5mm 3mm;
            border-bottom: 0.5px solid #e5e7eb;
            vertical-align: top;
            font-size: 9pt;
            color: #111827;
        }

        table.report tbody tr:nth-child(even) td {
            background: #fafafa;
        }

        .col-num { width: 8mm; color: #9ca3af; font-variant-numeric: tabular-nums; }
        .col-name { width: 55mm; font-weight: bold; }
        .col-domain { width: 60mm; color: #047857; word-break: break-all; }
        .col-postcode { width: 22mm; font-variant-numeric: tabular-nums; }

        .muted { color: #9ca3af; }

        .empty {
            text-align: center;
            padding: 20mm 0;
            color: #9ca3af;
            font-style: italic;
        }

        .footer {
            position: fixed;
            bottom: -8mm;
            left: 0;
            right: 0;
            font-size: 7pt;
            color: #9ca3af;
            border-top: 0.5px solid #e5e7eb;
            padding-top: 2mm;
        }

        .footer-row { width: 100%; }
        .footer-row td.right { text-align: right; }
    </style>
</head>
<body>
    <div class="header">
        <table class="header-row">
            <tr>
                <td>
                    <div class="logo">fig<span class="dot">.</span></div>
                    <div class="title">Businesses Report</div>
                </td>
                <td class="meta">
                    @if ($search)
                        <div>Filter: <strong>{{ $search }}</strong></div>
                    @endif
                    <div>{{ $businesses->count() }} {{ \Illuminate\Support\Str::plural('business', $businesses->count()) }}</div>
                    <div>Generated {{ $generatedAt->format('j F Y, H:i') }}</div>
                </td>
            </tr>
        </table>
    </div>

    @if ($businesses->isEmpty())
        <div class="empty">No businesses match the current filter.</div>
    @else
        <table class="report">
            <thead>
                <tr>
                    <th class="col-num">#</th>
                    <th class="col-name">Name</th>
                    <th class="col-domain">Domain</th>
                    <th>Address</th>
                    <th class="col-postcode">Postcode</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($businesses as $i => $business)
                    <tr>
                        <td class="col-num">{{ $i + 1 }}</td>
                        <td class="col-name">{{ $business->name }}</td>
                        <td class="col-domain">{{ $business->domain ?: '—' }}</td>
                        <td>
                            @if ($business->address)
                                {!! nl2br(e($business->address)) !!}
                            @else
                                <span class="muted">—</span>
                            @endif
                        </td>
                        <td class="col-postcode">{{ $business->postcode ?: '—' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="footer">
        <table class="footer-row">
            <tr>
                <td>&copy; {{ date('Y') }} Fig Limited &mdash; fig.ltd.uk</td>
                <td class="right">Generated {{ $generatedAt->format('j F Y, H:i') }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
