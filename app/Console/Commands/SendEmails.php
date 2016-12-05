<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Contracts\Mail\Mailer;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SendEmails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Just testing to send emails through php artisan command line.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('emails.welcome', ['data'=>'data'], function ($message) {
            $message->from('mohmad.shoaib@gmail.com', 'Shoaib Mohmad');
            $message->subject('Command Testing Email');
            $message->to('shoaib.mohmad@tarento.com');
        });
    }
}
