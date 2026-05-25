<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Contact Form Submission</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --bg: #0a0a0a;
            --surface: #111111;
            --surface-2: #161616;
            --surface-3: #1c1c1c;
            --border: #242424;
            --border-soft: #1e1e1e;
            --teal: #00c9a7;
            --teal-dim: rgba(0, 201, 167, 0.12);
            --teal-glow: rgba(0, 201, 167, 0.06);
            --teal-border: rgba(0, 201, 167, 0.25);
            --text: #f0f0f0;
            --text-sub: #888888;
            --text-muted: #444444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg);
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            color: var(--text);
            padding: 40px 16px;
        }

        .wrapper {
            max-width: 620px;
            margin: 0 auto;
        }

        /* ── Topbar ── */
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            padding: 0 2px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 34px;
            height: 34px;
            background: var(--teal);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 14px;
            color: #0a0a0a;
            letter-spacing: -0.5px;
            flex-shrink: 0;
        }

        .logo-name {
            font-size: 17px;
            font-weight: 700;
            color: var(--text);
            letter-spacing: -0.3px;
        }

        .logo-name span {
            color: var(--teal);
        }

        .badge {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: var(--teal);
            background: var(--teal-dim);
            border: 1px solid var(--teal-border);
            padding: 5px 14px;
            border-radius: 100px;
        }

        /* ── Card ── */
        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
        }

        /* ── Hero ── */
        .hero {
            position: relative;
            overflow: hidden;
            padding: 48px 44px 42px;
            background: var(--surface-2);
            border-bottom: 1px solid var(--border);
        }

        /* Teal radial glow top-right */
        .hero::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, rgba(0, 201, 167, 0.15) 0%, transparent 65%);
            border-radius: 50%;
            pointer-events: none;
        }

        /* Subtle green glow bottom-left */
        .hero::after {
            content: '';
            position: absolute;
            bottom: -60px;
            left: -30px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(0, 201, 167, 0.06) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .hero-pill {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--teal);
            background: var(--teal-dim);
            border: 1px solid var(--teal-border);
            padding: 6px 14px;
            border-radius: 100px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .hero-pill-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--teal);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.4;
                transform: scale(0.8);
            }
        }

        .hero-title {
            font-size: 30px;
            font-weight: 800;
            color: var(--text);
            line-height: 1.15;
            letter-spacing: -0.8px;
            position: relative;
            z-index: 1;
        }

        .hero-title span {
            color: var(--teal);
        }

        .hero-sub {
            margin-top: 12px;
            font-size: 14px;
            color: var(--text-sub);
            line-height: 1.65;
            position: relative;
            z-index: 1;
            max-width: 360px;
        }

        /* ── Fields Grid ── */
        .fields {
            padding: 6px 44px 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0 16px;
        }

        .field {
            padding: 20px 0;
            border-bottom: 1px solid var(--border-soft);
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-bottom: 6px;
        }

        .field-value {
            font-size: 14.5px;
            color: var(--text);
            font-weight: 400;
            line-height: 1.5;
            word-break: break-word;
        }

        .field-value.empty {
            color: var(--text-muted);
            font-style: italic;
            font-size: 13px;
        }

        .field-value a {
            color: var(--teal);
            text-decoration: none;
            border-bottom: 1px solid rgba(0, 201, 167, 0.3);
            padding-bottom: 1px;
        }

        /* ── Message ── */
        .message-wrap {
            padding: 24px 44px 36px;
        }

        .message-box {
            background: var(--surface-3);
            border: 1px solid var(--border);
            border-left: 3px solid var(--teal);
            border-radius: 10px;
            padding: 22px 26px;
        }

        .message-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-bottom: 10px;
        }

        .message-text {
            font-size: 14.5px;
            color: var(--text);
            line-height: 1.75;
        }

        /* ── Footer ── */
        .footer {
            padding: 18px 44px;
            background: var(--surface-2);
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }

        .footer-text {
            font-size: 12px;
            color: var(--text-muted);
            line-height: 1.5;
        }

        .footer-text strong {
            color: var(--text-sub);
            font-weight: 500;
        }

        .footer-dot {
            width: 3px;
            height: 3px;
            border-radius: 50%;
            background: var(--border);
            flex-shrink: 0;
        }

        /* ── Caption ── */
        .caption {
            text-align: center;
            margin-top: 24px;
            font-size: 11.5px;
            color: var(--text-muted);
            line-height: 1.7;
        }

        /* ── Responsive ── */
        @media (max-width: 520px) {

            .hero,
            .fields,
            .message-wrap,
            .footer {
                padding-left: 24px;
                padding-right: 24px;
            }

            .fields {
                grid-template-columns: 1fr;
            }

            .field.full {
                grid-column: 1;
            }

            .hero-title {
                font-size: 24px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="wrapper">

        <!-- Topbar -->
        <div class="topbar">
            <div class="logo">
                <div class="logo-icon">A</div>
                <div class="logo-name">A3N<span>Tech</span></div>
            </div>
            <div class="badge">Message Received</div>
        </div>

        <div class="card">

            <!-- Hero -->
            <div class="hero">
                <div class="hero-pill">
                    <div class="hero-pill-dot"></div>
                    Thank You
                </div>

                <div class="hero-title">
                    We've Received<br />
                    <span>Your Message</span>
                </div>

                <div class="hero-sub">
                    Thank you for contacting A3NTech. Our team has successfully received your inquiry and will get back
                    to you shortly.
                </div>
            </div>

            <!-- Greeting -->
            <div class="fields">

                <div class="field full">
                    <div class="field-label">Name</div>
                    <div class="field-value">
                        {{ $contact->first_name ?? '' }} {{ $contact->last_name ?? '' }}
                    </div>
                </div>

                <div class="field">
                    <div class="field-label">Email</div>
                    <div class="field-value">
                        <a href="mailto:{{ $contact->email ?? '' }}">
                            {{ $contact->email ?? '' }}
                        </a>
                    </div>
                </div>

                <div class="field">
                    <div class="field-label">Service Requested</div>
                    <div class="field-value">
                        @if(!empty($contact->service_id))
                            {{ optional($contact->service)->name ?? '' }}
                        @else
                            <span class="empty">General Inquiry</span>
                        @endif
                    </div>
                </div>

                <div class="field full">
                    <div class="field-label">Your Message</div>
                    <div class="field-value">
                        @if(!empty($contact->service_description))
                            {{ $contact->service_description }}
                        @else
                            <span class="empty">No message provided</span>
                        @endif
                    </div>
                </div>

            </div>

            <!-- Info Box -->
            <div class="message-wrap">
                <div class="message-box">
                    <div class="message-label">What Happens Next?</div>

                    <div class="message-text">
                        Our team will review your request and contact you as soon as possible.
                        <br /><br />
                        We appreciate your interest in A3NTech and look forward to working with you.
                    </div>
                </div>
            </div>

        </div>

        <!-- Caption -->
        <div class="caption">
            This is an automated confirmation email from A3NTech.<br />
            Please do not reply directly to this email.<br /><br />
            © 2026 A3NTech. All rights reserved.
        </div>
        ```

    </div>


</body>

</html>