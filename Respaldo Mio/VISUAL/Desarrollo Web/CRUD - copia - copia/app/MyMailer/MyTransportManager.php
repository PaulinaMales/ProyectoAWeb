<?php

namespace App\MyMailer;


class MyTransportManager extends \Illuminate\Mail\TransportManager
{
    /**
     * Create an instance of the SMTP Swift Transport driver.
     *
     * @return \Swift_SmtpTransport
     */
    protected function createSmtpDriver()
    {
        $transport = parent::createSmtpDriver();
        $config = $this->app->make('config')->get('mail');


        if (isset($config['authmode'])) {
            $transport->setAuthMode($config['authmode']);
        }

        return $transport;
    }
}