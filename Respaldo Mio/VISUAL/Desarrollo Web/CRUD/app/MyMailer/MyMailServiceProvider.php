<?php
namespace App\MyMailer;

class MyMailServiceProvider extends \Illuminate\Mail\MailServiceProvider
{
    public function registerSwiftTransport()
    {
        $this->app['swift.transport'] = $this->app->share(function ($app) {

            return new MyTransportManager($app);
        });
    }
}



