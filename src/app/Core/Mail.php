<?php

namespace App\Core;

use PHPMailer\PHPMailer\PHPMailer;

class Mail
{
    protected function send($subject, $body)
    {
        $mail = new PHPMailer();
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = APP_NOTIFY_EMAIL;
            $mail->Password = APP_NOTIFY_PASS;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->From = APP_NOTIFY_EMAIL;

            $mail->setFrom(APP_NOTIFY_EMAIL, 'Admin Book Catalog');
            $mail->addAddress(APP_NOTIFY_EMAIL);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;

            $mail->send();

        } catch (\Exception $e) {
            return false;
        }

        return true;
    }

    public function sendNewOrderNotification($name, $address, $count, $book)
    {
        $macro = [
            'user_name' => $name,
            'user_address' => $address,
            'count' => $count,
            'book' => $book['title'],
            'price' => $book['price'],
        ];

        ob_start();
        include APP_ROOT_PATH . '/views/mail/order.php';
        $template = ob_get_contents();
        ob_clean();

        return $this->send('New order', $template);
    }
}
