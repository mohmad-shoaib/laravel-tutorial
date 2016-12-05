<?php

namespace App\Listeners;

use App\Events\DbInsertEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Users;

class DbInsertEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  DbInsertEvent  $event
     * @return void
     */
    public function handle(DbInsertEvent $event)
    {
        $user               =   new Users();

        $user->name         =   'Test Name';
        $user->email        =   'test@test.com';
        $user->mobile_no    =   '+91 9999999999';
        $user->store_id     =   '1';
        $user->level        =   'pos';
        $user->job_profile  =   'Test Profile';   
        $user->password     =   bcrypt('123');            
        $user->country      =   'India';
        $user->state        =   'Kashmir';
        $user->address      =   'Hazratbal';
        $user->pin          =   '190006';
        $user->created_by   =   $event->dbInsertEvent;
        $user->save();

        return true;
    }
}
