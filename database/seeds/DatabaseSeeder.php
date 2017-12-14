<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('UserTableSeeder');

        $this->command->info('User table seeded!');

        $this->call('InvoiceTableSeeder');

        $this->command->info('Invoice table seeded!');

		// $this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
             array('name'=>'john','email'=>'john@clivern.com','password'=>'PHPNinga'),
             array('name'=>'mark','email'=>'mark@clivern.com','password'=>'JSNinga'),
             array('name'=>'Karl','email'=>'karl@clivern.com','password'=>'JqueryNinga'),
             array('name'=>'marl','email'=>'marl@clivern.com','password'=>'NotNinga'),
             array('name'=>'mary','email'=>'mary@clivern.com','password'=>'HTMLNinga'),
             array('name'=>'sels','email'=>'sels@clivern.com','password'=>'CSSNinga'),
             array('name'=>'taylor','email'=>'taylor@clivern.com','password'=>'LaravelNinga'),

          ));
 

}

class InvoiceTableSeeder extends Seeder {

    public function run()
    {
        DB::table('invoices')->delete();

        DB::table('invoices')->insert(array(
             array('totalAmmount'=> 100),
             array('totalAmmount'=> 100),
             array('totalAmmount'=> 100),
             array('totalAmmount'=> 100),
             array('totalAmmount'=> 100),
             array('totalAmmount'=> 100),
             array('totalAmmount'=> 100),

          ));
 

}
