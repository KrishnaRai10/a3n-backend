<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consultation Request Received</title>
</head>

<body
    style="margin:0; padding:0; background-color:#0a0a0a; font-family:Inter, Arial, Helvetica, sans-serif; -webkit-font-smoothing:antialiased; color:#f0f0f0;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
        style="background-color:#0a0a0a; padding:40px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="620" cellpadding="0" cellspacing="0" border="0"
                    style="width:100%; max-width:620px; margin:0 auto; border-collapse:separate;">
                    <tr>
                        <td style="padding:0 2px 24px 2px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="left" style="vertical-align:middle;">
                                        <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td
                                                    style="width:34px; height:34px; background-color:#00c9a7; border-radius:8px; text-align:center; vertical-align:middle; font-size:14px; font-weight:800; color:#0a0a0a; letter-spacing:-0.5px; line-height:34px;">
                                                    A
                                                </td>
                                                <td
                                                    style="padding-left:10px; font-size:17px; font-weight:700; color:#f0f0f0; letter-spacing:-0.3px; line-height:1;">
                                                    A3N<span style="color:#00c9a7;">Tech</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td align="right" style="vertical-align:middle;">
                                        <span
                                            style="display:inline-block; font-size:11px; font-weight:600; letter-spacing:1.2px; text-transform:uppercase; color:#00c9a7; background-color:rgba(0, 201, 167, 0.12); border:1px solid rgba(0, 201, 167, 0.25); padding:5px 14px; border-radius:100px;">
                                            Message Received
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td
                            style="background-color:#111111; border:1px solid #242424; border-radius:16px; overflow:hidden;">

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td
                                        style="padding:48px 44px 42px 44px; background-color:#161616; border-bottom:1px solid #242424;">
                                        <div
                                            style="display:inline-block; font-size:11px; font-weight:600; letter-spacing:1.5px; text-transform:uppercase; color:#00c9a7; background-color:rgba(0, 201, 167, 0.12); border:1px solid rgba(0, 201, 167, 0.25); padding:6px 14px; border-radius:100px; margin-bottom:20px;">
                                            Thank You
                                        </div>

                                        <div
                                            style="font-size:30px; font-weight:800; color:#f0f0f0; line-height:1.15; letter-spacing:-0.8px;">
                                            We've Received Your<br />
                                            <span style="color:#00c9a7;">Consultation Request</span>
                                        </div>

                                        <div
                                            style="margin-top:12px; font-size:14px; color:#888888; line-height:1.65; max-width:360px;">
                                            Thank you for reaching out to A3NTech. Our team has received your
                                            consultation request and will review it shortly.
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:6px 44px 0 44px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                            border="0">
                                            <tr>
                                                <td width="50%" valign="top"
                                                    style="padding:20px 8px 20px 0; border-bottom:1px solid #1e1e1e;">
                                                    <div
                                                        style="font-size:10px; font-weight:600; letter-spacing:1.8px; text-transform:uppercase; color:#444444; margin-bottom:6px;">
                                                        First Name
                                                    </div>
                                                    <div
                                                        style="font-size:14.5px; color:#f0f0f0; font-weight:400; line-height:1.5; word-break:break-word;">
                                                        {{ $contact->first_name ?? '' }}
                                                    </div>
                                                </td>

                                                <td width="50%" valign="top"
                                                    style="padding:20px 0 20px 8px; border-bottom:1px solid #1e1e1e;">
                                                    <div
                                                        style="font-size:10px; font-weight:600; letter-spacing:1.8px; text-transform:uppercase; color:#444444; margin-bottom:6px;">
                                                        Last Name
                                                    </div>
                                                    <div
                                                        style="font-size:14.5px; color:#f0f0f0; font-weight:400; line-height:1.5; word-break:break-word;">
                                                        {{ $contact->last_name ?? '' }}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2" valign="top"
                                                    style="padding:20px 0; border-bottom:1px solid #1e1e1e;">
                                                    <div
                                                        style="font-size:10px; font-weight:600; letter-spacing:1.8px; text-transform:uppercase; color:#444444; margin-bottom:6px;">
                                                        Business Email
                                                    </div>
                                                    <div
                                                        style="font-size:14.5px; color:#f0f0f0; font-weight:400; line-height:1.5; word-break:break-word;">
                                                        @if(!empty($contact->email))
                                                            {{ $contact->email }}
                                                        @else
                                                            <span
                                                                style="color:#444444; font-style:italic; font-size:13px;">Not
                                                                provided</span>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:24px 44px 0 44px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                            border="0">
                                            <tr>
                                                <td
                                                    style="background-color:#1c1c1c; border:1px solid #242424; border-left:3px solid #00c9a7; border-radius:10px; padding:22px 26px;">
                                                    <div
                                                        style="font-size:10px; font-weight:600; letter-spacing:1.8px; text-transform:uppercase; color:#444444; margin-bottom:10px;">
                                                        Message
                                                    </div>
                                                    <div
                                                        style="font-size:14.5px; color:#f0f0f0; line-height:1.75; word-break:break-word;">
                                                        {{ $contact->service_description ?? '' }}
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:24px 44px 36px 44px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                            border="0">
                                            <tr>
                                                <td
                                                    style="background-color:#1c1c1c; border:1px solid #242424; border-left:3px solid #00c9a7; border-radius:10px; padding:22px 26px;">
                                                    <div
                                                        style="font-size:10px; font-weight:600; letter-spacing:1.8px; text-transform:uppercase; color:#444444; margin-bottom:10px;">
                                                        What Happens Next?
                                                    </div>
                                                    <div style="font-size:14.5px; color:#f0f0f0; line-height:1.75;">
                                                        Our team will review your request and get back to you as soon as
                                                        possible.
                                                        <br /><br />
                                                        We appreciate your interest in working with A3NTech.
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="padding:18px 44px; background-color:#161616; border-top:1px solid #242424;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                            border="0">
                                            <tr>
                                                <td align="left"
                                                    style="font-size:12px; color:#444444; line-height:1.5;">
                                                    <strong style="color:#888888; font-weight:500;">This is an automated
                                                        notification.</strong> Do not reply to this email directly.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left"
                                                    style="font-size:12px; color:#444444; line-height:1.5; padding-top:4px;">
                                                    © 2026 A3NTech. All rights reserved.
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>