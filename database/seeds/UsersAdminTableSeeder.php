<?php

use Illuminate\Database\Seeder;

class UsersAdminTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tbl_admin')->insert([
            'admin_name' => 'haidar',
            'admin_email_address' => 'haidarontor@gmail.com',
            'admin_password' => md5('1234567890'),
            'access_lebel' => '1',
        ]);
    }

}
