<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
        }
        
        .header h1 {
            margin: 0 0 10px 0;
            font-size: 26px;
            font-weight: 600;
            line-height: 1.3;
        }
        
        .header p {
            margin: 0;
            font-size: 14px;
            opacity: 0.95;
            line-height: 1.5;
        }
        
        .content {
            padding: 30px 20px;
        }
        
        .message-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-left: 4px solid #667eea;
            margin-bottom: 25px;
            border-radius: 4px;
        }
        
        .message-info-row {
            margin-bottom: 15px;
            display: block;
        }
        
        .message-info-row:last-child {
            margin-bottom: 0;
        }
        
        .label {
            font-weight: 600;
            color: #667eea;
            display: block;
            margin-bottom: 5px;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .value {
            color: #333;
            word-break: break-word;
            font-size: 14px;
            line-height: 1.6;
            display: block;
        }
        
        .value a {
            color: #667eea;
            text-decoration: none;
        }
        
        .value a:hover {
            text-decoration: underline;
        }
        
        .message-body {
            background-color: #fafafa;
            padding: 20px;
            border-radius: 4px;
            border: 1px solid #eee;
            margin-bottom: 20px;
        }
        
        .message-body h3 {
            margin: 0 0 15px 0;
            color: #667eea;
            font-size: 16px;
        }
        
        .message-body p {
            margin: 0;
            color: #555;
            line-height: 1.8;
            white-space: pre-wrap;
            word-wrap: break-word;
            font-size: 14px;
        }
        
        .footer {
            background-color: #f4f4f4;
            padding: 25px 20px;
            text-align: center;
            border-top: 1px solid #eee;
            font-size: 12px;
            color: #999;
        }
        
        .footer p {
            margin: 5px 0;
        }
        
        .timestamp {
            color: #999;
            font-size: 12px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        /* Responsive styles for mobile devices */
        @media only screen and (max-width: 480px) {
            body {
                padding: 10px !important;
            }

            .container {
                margin: 10px auto !important;
                border-radius: 0 !important;
            }

            .header {
                padding: 30px 15px !important;
            }

            .header h1 {
                font-size: 20px !important;
                margin-bottom: 8px !important;
            }

            .header p {
                font-size: 13px !important;
            }

            .content {
                padding: 20px 15px !important;
            }

            .message-info {
                padding: 15px !important;
                margin-bottom: 20px !important;
            }

            .message-info-row {
                margin-bottom: 12px !important;
            }

            .label {
                font-size: 12px !important;
                margin-bottom: 4px !important;
            }

            .value {
                font-size: 13px !important;
            }

            .message-body {
                padding: 15px !important;
                margin-bottom: 15px !important;
            }

            .message-body h3 {
                font-size: 14px !important;
                margin-bottom: 12px !important;
            }

            .message-body p {
                font-size: 13px !important;
            }

            .footer {
                padding: 20px 15px !important;
                font-size: 11px !important;
            }

            .timestamp {
                font-size: 11px !important;
                margin-top: 10px !important;
                padding-top: 10px !important;
            }
        }

        @media only screen and (max-width: 320px) {
            .header h1 {
                font-size: 18px !important;
            }

            .header p {
                font-size: 12px !important;
            }

            .label {
                font-size: 11px !important;
            }

            .value {
                font-size: 12px !important;
            }
        }
    </style>
</head>
<body style="background-color: #f4f4f4;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f4f4f4;">
        <tr>
            <td style="padding: 20px 10px;">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden;">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #ffffff; padding: 40px 20px; text-align: center;">
                            <h1 style="margin: 0 0 10px 0; font-size: 26px; font-weight: 600; line-height: 1.3; color: #ffffff;">📧 New Contact Message</h1>
                            <p style="margin: 0; font-size: 14px; opacity: 0.95; line-height: 1.5; color: #ffffff;">You have received a new message from your website contact form</p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 30px 20px;">
                            <!-- Message Info -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f9f9f9; padding: 20px; border-left: 4px solid #667eea; margin-bottom: 25px; border-radius: 4px;">
                                <tr>
                                    <td style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
                                        <p style="margin: 0 0 5px 0; font-weight: 600; color: #667eea; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">From:</p>
                                        <p style="margin: 0; color: #333; font-size: 14px;">{{ $contact->name }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
                                        <p style="margin: 0 0 5px 0; font-weight: 600; color: #667eea; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Email:</p>
                                        <p style="margin: 0; color: #333; font-size: 14px;">
                                            <a href="mailto:{{ $contact->email }}" style="color: #667eea; text-decoration: none;">{{ $contact->email }}</a>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="margin: 0 0 5px 0; font-weight: 600; color: #667eea; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Subject:</p>
                                        <p style="margin: 0; color: #333; font-size: 14px;">{{ $contact->subject }}</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Message Body -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #fafafa; padding: 20px; border-radius: 4px; border: 1px solid #eee; margin-bottom: 20px;">
                                <tr>
                                    <td>
                                        <h3 style="margin: 0 0 15px 0; color: #667eea; font-size: 16px;">Message:</h3>
                                        <p style="margin: 0; color: #555; line-height: 1.8; white-space: pre-wrap; word-wrap: break-word; font-size: 14px;">{{ $contact->message }}</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Timestamp -->
                            <p style="color: #999; font-size: 12px; margin: 15px 0 0 0; padding-top: 15px; border-top: 1px solid #eee;">
                                <strong>Received on:</strong> {{ $contact->created_at->format('d M Y, H:i A') }}
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f4f4f4; padding: 25px 20px; text-align: center; border-top: 1px solid #eee; font-size: 12px; color: #999;">
                            <p style="margin: 5px 0;"><strong>Portfolio Contact Form</strong></p>
                            <p style="margin: 5px 0;">This is an automated notification from your website.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
