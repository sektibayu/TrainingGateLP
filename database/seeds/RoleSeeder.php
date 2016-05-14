<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        $nama = array(
        	'admin',
        	'user'
        	);

        for($i=0;$i<2;$i++){
        	$role = new Role;
        	$role->rolename = $nama[$i];
        	$role->save();
        }
    }
}