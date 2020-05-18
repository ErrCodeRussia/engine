<?php


namespace app\components;


use app\base\BaseComponent;
use base\App;
use base\exceptions\BaseException;
use PHPMailer\PHPMailer\PHPMailer;

class SMTPMailComponent extends BaseComponent
{
    /** @var PHPMailer */
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        $this->mail->isSMTP();
        $this->mail->Host = App::$config->mail['host'];
        $this->mail->SMTPAuth = true;
        $this->mail->Username = App::$config->mail['username'];
        $this->mail->Password = App::$config->mail['password'];
        $this->mail->SMTPSecure = (App::$config->mail['secure'] === 'tls') ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS;
        $this->mail->Port = App::$config->mail['port'];
    }

    public function confirmEmailMessage($address)
    {
        try {
            /** От кого: */
            $this->mail->setFrom('info@example.com', 'Можно указать имя или пропустить этот параметр');
            /** Кому: */
            $this->mail->addAddress($address);
            /** Кому отвечать (можно убрать, если отправителю): */
            $this->mail->addReplyTo('info@example.com');

            /** Поддержка HTML-тегов */
            $this->mail->isHTML(true);
            /** Кодировка */
            $this->mail->CharSet = "utf-8";
            /** Тема сообщения */
            $this->mail->Subject = 'Подтверждение регистрации';
            /** Сообщение */
            $this->mail->Body    = 'Текст в <b>HTML</b>';
            /** Сообщение для почтовых программ, не поддерживающих HTML */
            $this->mail->AltBody = 'Текст без HTML';

            /** Отправка сообщения */
            $this->mail->send();
        }
        catch (\Exception $e) {
            $e = new BaseException($e->getMessage());
            $e->getMessage();
        }
    }
}