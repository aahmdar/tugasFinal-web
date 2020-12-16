<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
            'title' => 'Home | Komik.id',
            'komik' => $this->komikModel->getKomik()
		];
		return view('pages/home', $data);
	}
}


