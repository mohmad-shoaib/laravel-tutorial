<?php

use Illuminate\Database\Seeder;

Use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user 				=	new User();

        $user->name 		=	'Shoaib Mohmad';
        $user->email 		=	'mohmad.shoaib@gmail.com';
        $user->password 	=	Hash::make('123');
        $user->mobile_no 	=	'+919596545092';
        $user->address 		=	'Zakura, Hazratbal, Srinagar';
        $user->state 		=	'Jammu and Kashmir';
        $user->country 		=	'India';
        $user->pin 			=	'190006';
        $user->level 		=	'admin';
        $user->job_profile 	=	'Manages the Application.';

        $user->save();
    }
}
