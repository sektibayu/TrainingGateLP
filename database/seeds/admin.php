<?php

use Illuminate\Database\Seeder;
use App\User;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();
        $admin = new User;
        // $admin->userid = '1';
        $admin->username = 'admin';
        $admin->password = 'admin';
        $admin->role_role_id = '1';
        $admin->password = bcrypt($admin->password);
        $admin->save();
    }
}
