<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configure SMTP settings for Hostinger
ini_set('SMTP', 'smtp.hostinger.com');
ini_set('smtp_port', '465');

if ($_POST) {
    try {
        // Get form data
        $name = $_POST['name'] ?? 'Not provided';
        $email = $_POST['email'] ?? 'Not provided';
        $phone = $_POST['phone'] ?? 'Not provided';
        $subject = $_POST['subject'] ?? 'Not provided';
        $message = $_POST['message'] ?? 'Not provided';
        
        // Email details
        $to = 'info@lennore.in';
        $emailSubject = "New Contact Form: $subject";
        
        // Create email headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Create HTML email body
        $emailBody = "
        <html>
        <body style='font-family: Arial, sans-serif; line-height: 1.6;'>
            <div style='max-width: 600px; margin: 0 auto; padding: 20px;'>
                <h2 style='color: #2a7d2e;'>New Contact Form Submission</h2>
                <table style='width: 100%; border-collapse: collapse;'>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Name:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'>$name</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Email:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'>$email</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Phone:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'>$phone</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Subject:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'>$subject</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Message:</strong></td>
                        <td style='padding: 10px; border-bottom: 1px solid #eee;'>$message</td>
                    </tr>
                </table>
                <p style='color: #666; font-size: 12px; margin-top: 20px;'>
                    <em>Submitted on: " . date('Y-m-d H:i:s') . "</em>
                </p>
            </div>
        </body>
        </html>
        ";
        
        // Debug information
        $debug_info = [
            'to' => $to,
            'subject' => $emailSubject,
            'from' => $email,
            'headers' => $headers,
            'body_length' => strlen($emailBody),
            'php_version' => phpversion(),
            'mail_function_exists' => function_exists('mail'),
            'smtp_host' => ini_get('SMTP'),
            'smtp_port' => ini_get('smtp_port')
        ];
        
        // Try to send email
        $mail_result = mail($to, $emailSubject, $emailBody, $headers);
        
        if ($mail_result) {
            echo json_encode([
                'result' => 'success',
                'message' => 'Email sent successfully!',
                'debug' => $debug_info
            ]);
        } else {
            // Get the last error
            $error = error_get_last();
            throw new Exception('Mail function failed. Error: ' . ($error['message'] ?? 'Unknown error'));
        }
        
    } catch (Exception $e) {
        echo json_encode([
            'result' => 'error',
            'message' => 'Failed to send email: ' . $e->getMessage(),
            'debug' => $debug_info ?? 'No debug info available'
        ]);
    }
} else {
    echo json_encode([
        'result' => 'error',
        'message' => 'No POST data received'
    ]);
}
?> 