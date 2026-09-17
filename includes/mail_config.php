<?php
/**
 * Sudipan Mandal Portfolio - Mail Configuration & Mailer Helper
 * 
 * Configured to use PHPMailer with SMTP (Gmail, Hostinger, cPanel, Brevo, SendGrid, etc.)
 */

// Load .env if present
if (!function_exists('loadPortfolioEnv')) {
    function loadPortfolioEnv($filePath) {
        if (!file_exists($filePath)) {
            return;
        }
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line) || str_starts_with($line, '#')) {
                continue;
            }
            if (strpos($line, '=') !== false) {
                [$key, $value] = explode('=', $line, 2);
                $key = trim($key);
                $value = trim($value, " \t\n\r\0\x0B\"'");
                if (!array_key_exists($key, $_ENV)) {
                    putenv("$key=$value");
                    $_ENV[$key] = $value;
                }
            }
        }
    }
}

loadPortfolioEnv(__DIR__ . '/../.env');

// Helper to get environment variable with fallback
if (!function_exists('getPortfolioConfig')) {
    function getPortfolioConfig($key, $default = '') {
        $val = getenv($key);
        if ($val !== false && $val !== '') {
            return $val;
        }
        if (isset($_ENV[$key]) && $_ENV[$key] !== '') {
            return $_ENV[$key];
        }
        return $default;
    }
}

// Mail Settings
define('MAIL_SMTP_HOST', getPortfolioConfig('SMTP_HOST', 'smtp.gmail.com'));
define('MAIL_SMTP_PORT', (int)getPortfolioConfig('SMTP_PORT', 587));
define('MAIL_SMTP_SECURE', strtolower(getPortfolioConfig('SMTP_SECURE', 'tls')));
define('MAIL_SMTP_USER', getPortfolioConfig('SMTP_USER', 'sudipanmandal@gmail.com'));
define('MAIL_SMTP_PASS', getPortfolioConfig('SMTP_PASS', ''));
define('MAIL_TO_ADDRESS', getPortfolioConfig('MAIL_TO', 'sudipanmandal@gmail.com'));
define('MAIL_TO_NAME', getPortfolioConfig('MAIL_TO_NAME', 'Sudipan Mandal'));
define('MAIL_FROM_ADDRESS', getPortfolioConfig('MAIL_FROM', MAIL_SMTP_USER));
define('MAIL_FROM_NAME', getPortfolioConfig('MAIL_FROM_NAME', 'Sudipan Portfolio Website'));

/**
 * Creates and configures a fresh PHPMailer instance.
 */
function createConfiguredMailer(string &$errorDetails = ''): ?PHPMailer\PHPMailer\PHPMailer {
    $password = MAIL_SMTP_PASS;
    if (empty($password) || strpos($password, 'your_16_character_app_password_here') !== false) {
        $errorDetails = 'SMTP authentication is not configured yet. Please enter your Gmail App Password in .env (or includes/mail_config.php).';
        return null;
    }

    $phpMailerDir = __DIR__ . '/PHPMailer/src';
    if (!file_exists($phpMailerDir . '/PHPMailer.php')) {
        $errorDetails = 'PHPMailer library files were not found in ' . $phpMailerDir;
        return null;
    }

    require_once $phpMailerDir . '/Exception.php';
    require_once $phpMailerDir . '/PHPMailer.php';
    require_once $phpMailerDir . '/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = MAIL_SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = MAIL_SMTP_USER;
        $mail->Password   = $password;
        $mail->CharSet    = 'UTF-8';
        $mail->Timeout    = 15;

        if (MAIL_SMTP_SECURE === 'ssl' || MAIL_SMTP_PORT === 465) {
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
        } else {
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        }
        $mail->Port = MAIL_SMTP_PORT;

        return $mail;
    } catch (\Throwable $e) {
        $errorDetails = $e->getMessage();
        return null;
    }
}

/**
 * Sends portfolio contact inquiry notification to Sudipan (owner)
 * 
 * @param array $data ['name' => ..., 'email' => ..., 'subject' => ..., 'message' => ..., 'ip' => ...]
 * @param string &$errorDetails Output variable for error description if failed
 * @return bool True if successfully sent, false otherwise
 */
function sendPortfolioEmail(array $data, string &$errorDetails = ''): bool {
    $mail = createConfiguredMailer($errorDetails);
    if (!$mail) {
        return false;
    }

    $name    = htmlspecialchars(trim($data['name'] ?? 'Visitor'));
    $email   = trim($data['email'] ?? '');
    $subject = htmlspecialchars(trim($data['subject'] ?? 'New Portfolio Inquiry'));
    $message = htmlspecialchars(trim($data['message'] ?? ''));
    $ip      = htmlspecialchars(trim($data['ip'] ?? ($_SERVER['REMOTE_ADDR'] ?? 'Unknown')));
    $time    = date('Y-m-d H:i:s T');

    try {
        // Recipients
        $mail->setFrom(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
        $mail->addAddress(MAIL_TO_ADDRESS, MAIL_TO_NAME);
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Portfolio Contact: {$subject} [From: {$name}]";

        $formattedMessage = nl2br($message);
        $replyMailto = "mailto:{$email}?subject=" . rawurlencode("Re: {$subject}");

        $mail->Body = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Portfolio Contact Notification</title>
</head>
<body style="margin: 0; padding: 20px; background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #e2e8f0;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #1e293b; border-radius: 16px; border: 1px solid #334155; overflow: hidden;">
        <tr>
            <td style="padding: 24px 30px; background: linear-gradient(135deg, #4f46e5 0%, #10b981 100%); text-align: left;">
                <h1 style="margin: 0; font-size: 20px; font-weight: 700; color: #ffffff; letter-spacing: -0.5px;">
                    Sudipan Mandal &bull; Portfolio Inquiry
                </h1>
                <p style="margin: 4px 0 0 0; font-size: 13px; color: rgba(255, 255, 255, 0.85);">
                    A new visitor has submitted a message via your portfolio website.
                </p>
            </td>
        </tr>
        <tr>
            <td style="padding: 24px 30px 10px 30px;">
                <table width="100%" cellpadding="8" cellspacing="0" style="background-color: #0f172a; border-radius: 12px; border: 1px solid #334155; font-size: 13px;">
                    <tr>
                        <td width="30%" style="color: #94a3b8; font-weight: 600; padding: 10px 14px; border-bottom: 1px solid #1e293b;">From:</td>
                        <td width="70%" style="color: #f8fafc; font-weight: 600; padding: 10px 14px; border-bottom: 1px solid #1e293b;">
                            {$name} &lt;<a href="mailto:{$email}" style="color: #38bdf8; text-decoration: none;">{$email}</a>&gt;
                        </td>
                    </tr>
                    <tr>
                        <td style="color: #94a3b8; font-weight: 600; padding: 10px 14px; border-bottom: 1px solid #1e293b;">Topic / Subject:</td>
                        <td style="color: #10b981; font-weight: 600; padding: 10px 14px; border-bottom: 1px solid #1e293b;">{$subject}</td>
                    </tr>
                    <tr>
                        <td style="color: #94a3b8; font-weight: 600; padding: 10px 14px; border-bottom: 1px solid #1e293b;">Sent At:</td>
                        <td style="color: #cbd5e1; padding: 10px 14px; border-bottom: 1px solid #1e293b;">{$time}</td>
                    </tr>
                    <tr>
                        <td style="color: #94a3b8; font-weight: 600; padding: 10px 14px;">Sender IP:</td>
                        <td style="color: #cbd5e1; padding: 10px 14px;">{$ip}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding: 15px 30px 25px 30px;">
                <h3 style="margin: 0 0 10px 0; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px; color: #a5b4fc;">
                    Message Content:
                </h3>
                <div style="background-color: #0f172a; padding: 18px 20px; border-radius: 12px; border-left: 4px solid #10b981; color: #f1f5f9; font-size: 14px; line-height: 1.6; white-space: pre-line;">
{$message}
                </div>
                <div style="margin-top: 25px; text-align: center;">
                    <a href="{$replyMailto}" style="display: inline-block; padding: 12px 28px; background: linear-gradient(135deg, #6366f1 0%, #10b981 100%); color: #ffffff; text-decoration: none; font-size: 13px; font-weight: 600; border-radius: 10px; box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);">
                        &rarr; Reply Directly to {$name}
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td style="padding: 16px 30px; background-color: #0f172a; border-top: 1px solid #334155; text-align: center; font-size: 11px; color: #64748b;">
                Sent automatically by Sudipan Mandal's Portfolio Website Contact Engine.
            </td>
        </tr>
    </table>
</body>
</html>
HTML;

        $mail->AltBody = "New Message from Portfolio Website\n\n"
            . "Name: {$name}\n"
            . "Email: {$email}\n"
            . "Subject: {$subject}\n"
            . "Timestamp: {$time}\n"
            . "IP: {$ip}\n\n"
            . "Message:\n{$message}\n";

        $mail->send();
        return true;

    } catch (PHPMailer\PHPMailer\Exception $e) {
        $errorDetails = $mail->ErrorInfo ?: $e->getMessage();
        return false;
    } catch (\Throwable $t) {
        $errorDetails = $t->getMessage();
        return false;
    }
}

/**
 * Sends an automated Thank You & Confirmation email to the visitor who submitted an inquiry.
 * 
 * @param array $data ['name' => ..., 'email' => ..., 'subject' => ..., 'message' => ...]
 * @param string &$errorDetails
 * @return bool
 */
function sendInquiryAcknowledgmentEmail(array $data, string &$errorDetails = ''): bool {
    $mail = createConfiguredMailer($errorDetails);
    if (!$mail) {
        return false;
    }

    $name    = htmlspecialchars(trim($data['name'] ?? 'Friend'));
    $email   = trim($data['email'] ?? '');
    $subject = htmlspecialchars(trim($data['subject'] ?? 'General Inquiry'));
    $message = htmlspecialchars(trim($data['message'] ?? ''));

    if (empty($email)) {
        $errorDetails = 'Visitor email address is missing.';
        return false;
    }

    try {
        $mail->setFrom(MAIL_FROM_ADDRESS, 'Sudipan Mandal | Full Stack Developer');
        $mail->addAddress($email, $name);
        $mail->addReplyTo('sudipanmandal@gmail.com', 'Sudipan Mandal');

        $mail->isHTML(true);
        $mail->Subject = "Thank you for reaching out, {$name}! 🚀 [Message Received]";

        $mail->Body = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank you for reaching out</title>
</head>
<body style="margin: 0; padding: 20px; background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #e2e8f0;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #1e293b; border-radius: 16px; border: 1px solid #334155; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5);">
        
        <!-- Header Banner -->
        <tr>
            <td style="padding: 30px; background: linear-gradient(135deg, #6366f1 0%, #10b981 100%); text-align: center;">
                <div style="width: 50px; height: 50px; background-color: rgba(255, 255, 255, 0.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 12px; font-size: 24px;">
                    ✨
                </div>
                <h1 style="margin: 0; font-size: 22px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
                    Thank You for Getting in Touch!
                </h1>
                <p style="margin: 6px 0 0 0; font-size: 13px; color: rgba(255, 255, 255, 0.9);">
                    Your inquiry has been delivered directly to Sudipan Mandal.
                </p>
            </td>
        </tr>

        <!-- Main Content -->
        <tr>
            <td style="padding: 30px; line-height: 1.7; font-size: 14px; color: #cbd5e1;">
                <p style="margin: 0 0 16px 0; font-size: 16px; font-weight: 600; color: #ffffff;">
                    Hi {$name},
                </p>
                <p style="margin: 0 0 16px 0;">
                    Thank you for contacting me through my portfolio website regarding <strong style="color: #38bdf8;">"{$subject}"</strong>.
                </p>
                <p style="margin: 0 0 20px 0;">
                    I have received your message and wanted to confirm that it is in my priority queue. I review all technical and collaboration requests personally and will get back to you with detailed feedback within <strong style="color: #10b981;">24 hours</strong>.
                </p>

                <!-- Message Recap Card -->
                <div style="background-color: #0f172a; border-radius: 12px; border: 1px solid #334155; padding: 18px 20px; margin-bottom: 24px;">
                    <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: #94a3b8; margin-bottom: 8px;">
                        Copy of Your Submitted Message:
                    </div>
                    <div style="color: #f1f5f9; font-size: 13px; font-style: italic; white-space: pre-line; border-left: 3px solid #6366f1; padding-left: 12px;">
{$message}
                    </div>
                </div>

                <!-- While you wait section -->
                <div style="background: rgba(99, 102, 241, 0.08); border-radius: 12px; border: 1px solid rgba(99, 102, 241, 0.25); padding: 16px 20px; margin-bottom: 24px;">
                    <div style="font-size: 13px; font-weight: 700; color: #a5b4fc; margin-bottom: 6px;">
                        While you wait, feel free to explore:
                    </div>
                    <ul style="margin: 0; padding-left: 20px; font-size: 13px; color: #cbd5e1;">
                        <li style="margin-bottom: 4px;">Explore my flagship <strong style="color: #10b981;">MRV Platform Case Study</strong> (Enhanced Rock Weathering & Climate-Tech).</li>
                        <li style="margin-bottom: 4px;">Browse my open-source projects on <a href="https://github.com/sudipan-dev-sr" style="color: #38bdf8; text-decoration: underline;">GitHub (@sudipan-dev-sr)</a>.</li>
                        <li>Connect with me on <a href="https://linkedin.com/in/sudipan-mandal" style="color: #38bdf8; text-decoration: underline;">LinkedIn</a>.</li>
                    </ul>
                </div>

                <p style="margin: 0;">
                    Looking forward to connecting with you soon!
                </p>

                <div style="margin-top: 24px; padding-top: 18px; border-top: 1px solid #334155;">
                    <strong style="color: #ffffff; font-size: 15px; display: block;">Sudipan Mandal</strong>
                    <span style="font-size: 12px; color: #94a3b8; display: block;">Junior Engineer & Full Stack Developer</span>
                    <span style="font-size: 12px; color: #10b981; display: block;">EELAB CARBON Pvt Ltd &bull; Kolkata, India</span>
                    <span style="font-size: 12px; color: #64748b; display: block; margin-top: 4px;">
                        Email: <a href="mailto:sudipanmandal@gmail.com" style="color: #38bdf8; text-decoration: none;">sudipanmandal@gmail.com</a> &bull; Phone: +91 97486 42879
                    </span>
                </div>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="padding: 16px 30px; background-color: #0f172a; border-top: 1px solid #334155; text-align: center; font-size: 11px; color: #64748b;">
                You received this confirmation email because you submitted an inquiry at Sudipan Mandal's Portfolio Website.
            </td>
        </tr>
    </table>
</body>
</html>
HTML;

        $mail->AltBody = "Hi {$name},\n\n"
            . "Thank you for reaching out through my portfolio website regarding \"{$subject}\"!\n\n"
            . "I have received your message and will review it and get back to you within 24 hours.\n\n"
            . "Copy of your message:\n{$message}\n\n"
            . "Best regards,\nSudipan Mandal\nJunior Engineer & Full Stack Developer\nEELAB CARBON Pvt Ltd\nEmail: sudipanmandal@gmail.com\nPhone: +91 97486 42879\n";

        $mail->send();
        return true;

    } catch (PHPMailer\PHPMailer\Exception $e) {
        $errorDetails = $mail->ErrorInfo ?: $e->getMessage();
        return false;
    } catch (\Throwable $t) {
        $errorDetails = $t->getMessage();
        return false;
    }
}

/**
 * Sends a welcome & thank you email to new newsletter subscribers.
 * 
 * @param string $subscriberEmail
 * @param string &$errorDetails
 * @return bool
 */
function sendNewsletterWelcomeEmail(string $subscriberEmail, string &$errorDetails = ''): bool {
    $mail = createConfiguredMailer($errorDetails);
    if (!$mail) {
        return false;
    }

    $email = trim($subscriberEmail);
    if (empty($email)) {
        $errorDetails = 'Subscriber email is empty.';
        return false;
    }

    try {
        $mail->setFrom(MAIL_FROM_ADDRESS, 'Sudipan Mandal | Engineering Insights');
        $mail->addAddress($email);
        $mail->addReplyTo('sudipanmandal@gmail.com', 'Sudipan Mandal');

        $mail->isHTML(true);
        $mail->Subject = "Welcome to Engineering Insights! 🚀 | Sudipan Mandal";

        $mail->Body = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to Engineering Insights</title>
</head>
<body style="margin: 0; padding: 20px; background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #e2e8f0;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #1e293b; border-radius: 16px; border: 1px solid #334155; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5);">
        
        <!-- Header Banner -->
        <tr>
            <td style="padding: 32px 30px; background: linear-gradient(135deg, #10b981 0%, #6366f1 100%); text-align: center;">
                <div style="font-size: 36px; margin-bottom: 10px;">
                    🚀
                </div>
                <h1 style="margin: 0; font-size: 24px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
                    Welcome to Engineering Insights!
                </h1>
                <p style="margin: 8px 0 0 0; font-size: 13px; color: rgba(255, 255, 255, 0.9);">
                    Architecture &bull; Climate-Tech Systems &bull; Backend Engineering &bull; Applied AI
                </p>
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding: 30px; font-size: 14px; line-height: 1.7; color: #cbd5e1;">
                <p style="margin: 0 0 16px 0; font-size: 16px; font-weight: 600; color: #ffffff;">
                    Hello & Welcome! 👋
                </p>
                <p style="margin: 0 0 16px 0;">
                    Thank you so much for subscribing to my newsletter. You are now part of a community interested in high-performance web backends, climate-tech MRV engines, and modern software architectures.
                </p>

                <!-- What to Expect Box -->
                <div style="background-color: #0f172a; border-radius: 12px; border: 1px solid #334155; padding: 20px; margin-bottom: 24px;">
                    <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: #10b981; margin-bottom: 12px;">
                        📌 What You'll Receive in Your Inbox:
                    </div>
                    
                    <div style="margin-bottom: 12px;">
                        <strong style="color: #ffffff; display: block; font-size: 13px;">🌿 Climate-Tech & MRV Engineering</strong>
                        <span style="font-size: 12px; color: #94a3b8;">Deep dives into Enhanced Rock Weathering (ERW), geochemical modeling, and spatial soil data processing.</span>
                    </div>

                    <div style="margin-bottom: 12px;">
                        <strong style="color: #ffffff; display: block; font-size: 13px;">⚡ Decoupled & Headless Backends</strong>
                        <span style="font-size: 12px; color: #94a3b8;">Practical guides on Strapi Headless CMS, TypeScript typing, Node.js, and PostgreSQL indexing.</span>
                    </div>

                    <div>
                        <strong style="color: #ffffff; display: block; font-size: 13px;">🤖 Practical AI Integrations</strong>
                        <span style="font-size: 12px; color: #94a3b8;">Real-world implementations of the OpenAI API for document parsing and intelligent web utilities.</span>
                    </div>
                </div>

                <!-- Featured Article -->
                <div style="background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(16, 185, 129, 0.1) 100%); border-radius: 12px; border: 1px solid rgba(99, 102, 241, 0.3); padding: 18px 20px; margin-bottom: 24px;">
                    <span style="display: inline-block; padding: 2px 8px; border-radius: 6px; background-color: rgba(16, 185, 129, 0.2); color: #34d399; font-size: 10px; font-weight: 700; text-transform: uppercase; margin-bottom: 6px;">
                        Recommended Read
                    </span>
                    <div style="font-size: 14px; font-weight: 700; color: #ffffff; margin-bottom: 4px;">
                        Architecting the MRV Platform: Building a Scalable System for Carbon Removal
                    </div>
                    <p style="margin: 0; font-size: 12px; color: #94a3b8;">
                        How we architected the backend for nature-based carbon accounting at EELAB CARBON with Node.js, Strapi, and PostgreSQL.
                    </p>
                </div>

                <p style="margin: 0 0 24px 0;">
                    Have questions, project ideas, or want to discuss engineering challenges? Just reply directly to this email—I read every response!
                </p>

                <!-- Sign off -->
                <div style="padding-top: 18px; border-top: 1px solid #334155;">
                    <strong style="color: #ffffff; font-size: 15px; display: block;">Sudipan Mandal</strong>
                    <span style="font-size: 12px; color: #94a3b8; display: block;">Junior Engineer & Full Stack Developer</span>
                    <span style="font-size: 12px; color: #10b981; display: block;">EELAB CARBON Pvt Ltd &bull; Kolkata, India</span>
                    <div style="margin-top: 8px; font-size: 12px;">
                        <a href="https://linkedin.com/in/sudipan-mandal" style="color: #38bdf8; text-decoration: none; margin-right: 12px;">LinkedIn &rarr;</a>
                        <a href="https://github.com/sudipan-dev-sr" style="color: #38bdf8; text-decoration: none;">GitHub &rarr;</a>
                    </div>
                </div>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="padding: 16px 30px; background-color: #0f172a; border-top: 1px solid #334155; text-align: center; font-size: 11px; color: #64748b;">
                You subscribed to Engineering Insights via Sudipan Mandal's Portfolio Website.<br>
                If you ever wish to unsubscribe, reply with "Unsubscribe" and you will be removed immediately.
            </td>
        </tr>
    </table>
</body>
</html>
HTML;

        $mail->AltBody = "Welcome to Engineering Insights!\n\n"
            . "Hi,\n\n"
            . "Thank you for subscribing to Engineering Insights by Sudipan Mandal!\n\n"
            . "You'll be receiving deep dives on:\n"
            . "- Climate-Tech MRV Systems & Carbon Accounting\n"
            . "- Decoupled & Headless Backends (Strapi, Node.js, TypeScript, PostgreSQL)\n"
            . "- Real-world Applied AI Integrations (OpenAI API)\n\n"
            . "Feel free to reply to this email at any time to connect.\n\n"
            . "Warm regards,\nSudipan Mandal\nJunior Engineer & Full Stack Developer\nEmail: sudipanmandal@gmail.com\n";

        $mail->send();
        return true;

    } catch (PHPMailer\PHPMailer\Exception $e) {
        $errorDetails = $mail->ErrorInfo ?: $e->getMessage();
        return false;
    } catch (\Throwable $t) {
        $errorDetails = $t->getMessage();
        return false;
    }
}
