<?php

namespace App\Controllers;
use App\Models\ApotikModel;

class Home extends BaseController
{
	public function index()
	{
		$apotikModel = new ApotikModel();
        $data['apoteks'] = $apotikModel->findAll();

		return view('home', $data);
	}
}
