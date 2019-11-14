<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
	//
	public function root ()
	{
		return view('pages.root');
	}

	public function demo ()
	{
		$data = Storage::get('area_data.json');
//		dd($data);
		$data  = json_decode($data , true);
		$temp  = [];
		$_data = reset($data);
		unset($data[86]);

		echo '<pre>';
		print_r($data[130000]);
		echo '</pre>';

		foreach ($_data as $key => $value) {
			$temp[$key] = [
				'name'     => $value ,
				'children' => [] ,
			];
		}
		echo '<pre>';
//		print_r($data);
		echo '</pre>';
		foreach ($data as $key => $value) {
			if (isset($temp[$key]))
				echo $temp[$key];
		}


	}
}
