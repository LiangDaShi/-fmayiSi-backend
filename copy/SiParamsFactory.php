<?php

use App\Models\SiParams;
use Faker\Generator as Faker;

$factory->define(SiParams::class, function (Faker $faker) {

	return [
		'type' => 0,
		'year' => 2019,
		'area_id' => 1,
		'denominator' => 1000,

		'base_ei_min' => 361300,
		'base_ei_max' => 2356500,
		'base_mi_min' => 471300,
		'base_mi_max' => 2356500,

		'coef_ei' => 240,
		'coef_mi' => 10,
		'coef_ui' => 120,
		'coef_eii' => 4,
		'coef_mati' => 8,

		'others' => 300,

	];
});