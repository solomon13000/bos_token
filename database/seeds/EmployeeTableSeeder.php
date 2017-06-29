<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->insert(array(
			array('name'=> 'Sparks Moreno','age'=> 38,'gender'=> 'male','company'=> 'ENERSON'),
			array('name'=> 'Donovan Herman','age'=> 40,'gender'=> 'male','company'=> 'ROCKABYE')
		));
    }
}
