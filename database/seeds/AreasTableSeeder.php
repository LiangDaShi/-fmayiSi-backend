<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$data=Storage::get('area_data.json');
		$data=json_decode($data);

		dd($data);
    }
}
