<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Gorkhabyte Academy</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
        }
        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
            padding: 40px 30px;
            text-align: center;
        }
        .logo {
            width: 60px;
            height: 60px;
            margin: 0 auto 16px;
        }
        .email-header h1 {
            color: #ffffff;
            font-size: 24px;
            font-weight: 700;
            margin: 0;
        }
        .email-body {
            padding: 40px 30px;
        }
        .greeting {
            font-size: 18px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 20px;
        }
        .content {
            font-size: 15px;
            line-height: 1.6;
            color: #4b5563;
            margin-bottom: 30px;
        }
        .button-container {
            text-align: center;
            margin: 40px 0;
        }
        .reset-button {
            display: inline-block;
            padding: 14px 32px;
            background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
            color: #ffffff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
            transition: transform 0.2s;
        }
        .reset-button:hover {
            transform: translateY(-2px);
        }
        .info-box {
            background-color: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 16px;
            margin: 30px 0;
            border-radius: 8px;
        }
        .info-box p {
            margin: 0;
            font-size: 14px;
            color: #92400e;
        }
        .security-note {
            background-color: #f3f4f6;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
        }
        .security-note p {
            margin: 0;
            font-size: 14px;
            color: #6b7280;
        }
        .email-footer {
            background-color: #1f2937;
            padding: 30px;
            text-align: center;
        }
        .email-footer p {
            margin: 0 0 10px 0;
            font-size: 14px;
            color: #9ca3af;
        }
        .email-footer a {
            color: #818cf8;
            text-decoration: none;
        }
        .divider {
            height: 1px;
            background-color: #e5e7eb;
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <div class="logo">
                <svg viewBox="0 0 100 100" fill="white">
                    <circle cx="50" cy="50" r="45" fill="white" opacity="0.2"/>
                    <path d="M50 20 L65 40 L50 35 L35 40 Z" fill="white"/>
                    <rect x="35" y="40" width="30" height="35" rx="5" fill="white"/>
                    <circle cx="50" cy="57" r="8" fill="#4f46e5"/>
                </svg>
            </div>
            <h1>Gorkhabyte Academy</h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            <div class="greeting">Hello!</div>
            
            <div class="content">
                <p>You are receiving this email because we received a password reset request for your Gorkhabyte Academy account.</p>
            </div>

            <div class="button-container">
                <a href="{{ $url }}" class="reset-button">Reset Password</a>
            </div>

            <div class="info-box">
                <p><strong>⏱️ Important:</strong> This password reset link will expire in 60 minutes for security reasons.</p>
            </div>

            <div class="content">
                <p>If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:</p>
                <p style="word-break: break-all; color: #6366f1; font-size: 13px;">{{ $url }}</p>
            </div>

            <div class="divider"></div>

            <div class="security-note">
                <p><strong>🔒 Security Notice:</strong> If you did not request a password reset, no further action is required. Your account remains secure. We recommend enabling two-factor authentication for additional security.</p>
            </div>

            <div class="content" style="margin-top: 30px;">
                <p>Best regards,<br>
                <strong>The Gorkhabyte Academy Team</strong></p>
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Gorkhabyte Academy. All rights reserved.</p>
            <p>Empowering the next generation of tech leaders</p>
            <p style="margin-top: 15px;">
                <a href="{{ url('/') }}">Visit our website</a> • 
                <a href="{{ url('/contact') }}">Contact Support</a>
            </p>
        </div>
    </div>
</body>
</html>
