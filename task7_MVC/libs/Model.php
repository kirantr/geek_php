<?php

class Model
{

    public function __construct()
    {
        $this->placeHolder['%TITLE%'] = 'Contact Form';
        $this->placeHolder['%ERRORS%'] = 'Empty field';
        $this->placeHolder['%FULLNAME%'] = 'Full Name';
        $this->placeHolder['%FULLNAME_ERROR%'] = '';
        $this->placeHolder['%EMAIL%'] = 'Em@il.com';
        $this->placeHolder['%EMAIL_ERROR%'] = '';
        $this->placeHolder['%SUBJECT_ERROR%'] = '';
        $this->placeHolder['%MESSAGE%'] = 'Message';
        $this->placeHolder['%MESSAGE_ERROR%'] = '';
        $this->placeHolder['%OPT_selected%'] = OPT_selected;
        $this->placeHolder['%OPT_1%'] = OPT_1;
        $this->placeHolder['%OPT_2%'] = OPT_2;
        $this->placeHolder['%OPT_3%'] = OPT_3;
        $this->placeHolder['%SUCCES%'] = '';
    }

    public function getArray()
    {
        return $this->placeHolder;
    }

    public function checkForm()
    {
        $this->placeHolder['%ERRORS%'] = '';
        foreach ($_POST as $key => $value)
        {
            $_POST[$key] = trim(strip_tags($value));
        }
        $this->checkFullName();
        $this->checkSubject();
        $this->checkEmail();
        $this->checkMessage();
        if (
                ($this->checkFullName()) 
                && ($this->checkSubject()) 
                && ($this->checkEmail()) 
                && ($this->checkMessage())
        )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function checkFullName()
    {
        if ($_POST['fullName'] !== '')
        {
            $this->placeHolder['%FULLNAME%'] = $_POST['fullName'];
            $this->fullName = $this->placeHolder['%FULLNAME%'];
            return true;
        }
        else
        {
            $this->placeHolder['%FULLNAME_ERROR%'] = 'Enter your name!';
            return false;
        }
    }

    public function checkSubject()
    {
        $subj = $_POST['subject'];
        if ($subj == 'selected')
        {
            $this->placeHolder['%SUBJECT_ERROR%'] = 'Select a subject!';
            return false;
        }
        elseif ($subj == 'opt_1')
        {
            $this->subject = OPT_1;
            return true;
        }
        elseif ($subj == 'opt_2')
        {
            $this->subject = OPT_2;
            return true;
        }
        elseif ($subj == 'opt_3')
        {
            $this->subject = OPT_3;
            return true;
        }
    }

    public function checkEmail()
    {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $this->placeHolder['%EMAIL%'] = $_POST['email'];
            $this->email = $this->placeHolder['%EMAIL%'];
            return true;
        }
        else
        {
            $this->placeHolder['%EMAIL_ERROR%'] = 'This email address is not conrrect';
            return false;
        }
    }

    public function checkMessage()
    {
        if ($_POST['message'] !== '')
        {
            $this->placeHolder['%MESSAGE%'] = $_POST['message'];
            $this->message = $this->placeHolder['%MESSAGE%'];
            return true;
        }
        else
        {
            $this->placeHolder['%MESSAGE_ERROR%'] = 'Enter your message';
            return false;
        }
    }

    public function sendEmail()
    {
        date_default_timezone_set('Europe/Kiev');
        $message = 'From: ' . $this->fullName . "\r\n";
        $message .= 'Message: ' . $this->message . "\r\n";
        $message .= "\r\n" . 'IP-adress: ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
        $message .= 'Date \ time: ' . date("Y-m-d H:i:s");

        $header = 'From: ' . $this->email . "\r\n"
                . 'Content-type: text/html; charset=utf-8' . "\r\n"
                . 'Reply-To: ' . $this->email . "\r\n";

        $send = mail(EMAIL_TO, $this->subject, $message, $header);
//        $send = EMAIL_TO . $this->subject . $message . $header;
        if ($send)
        {
            $this->placeHolder['%FULLNAME%'] = '';
            $this->placeHolder['%SELECT_selected%'] = "selected";
            $this->placeHolder['%EMAIL%'] = '';
            $this->placeHolder['%MESSAGE%'] = '';
            $this->placeHolder['%SUCCES%'] = 'Successfull sent mail';
//            $this->placeHolder['%SUCCES%'] = $send;
            return true;
        }
        else
        {
            $this->placeHolder['%ERR_SEND%'] = 'Error to send email';
            return false;
        }
    }

}
