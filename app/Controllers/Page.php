<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function index()
	{
		$data = [
			'tittle' => 'Home | Dany Pradana'
		];

		return view('pages/home', $data);
	}

	public function about()
	{
		$data = [
			'tittle' => 'About Me'
		];

		return view('pages/about', $data);
	}

	public function contact()
	{

		$data = [
			'tittle' => 'Contact',
			'alamat' => [
				[
					'tipe' => 'rumah',
					'alamat' => 'Jl. abc no 24',
					'kota' => 'Semarang'
				]
			]
		];


		return view('pages/contact', $data);
	}

	//--------------------------------------------------------------------

}
