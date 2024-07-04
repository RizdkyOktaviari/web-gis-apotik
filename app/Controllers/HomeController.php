<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApotikModel;
use CodeIgniter\I18n\Time;

class HomeController extends BaseController
{
    public function index()
    {
        $apotikModel = new ApotikModel();
        $data['apoteks'] = $apotikModel->findAll();
        var_dump($data['apoteks']);
        die();
        return view('home', $data);
    }

    public function getApotiks()
    {
        $data_apotek = new ApotikModel();
        $data['data_apotek'] = $data_apotek->findAll();
        // format 24 jam
        $time_now = Time::now()->toLocalizedString('HH:mm:ss');

        foreach ($data['data_apotek'] as $key => $value) {
            $open_time = $value['open_to_close'];
            $close_time = $value['close_to_open'];
            if ($time_now >= $open_time && $time_now <= $close_time) {
                $data['data_apotek'][$key]['status'] = 'Open';
            } else {
                $data['data_apotek'][$key]['status'] = 'Close';
            }
        }

        return view('data_apotik', $data);
    }

    public function showDetail($id)
    {
        $apotikModel = new ApotikModel();
        $apotik = $apotikModel->find($id);

        if ($apotik) {
            $data['apotik'] = $apotik;

            return view('new', $data);
        } else {
            return redirect()->to('/data-apotiks')->with('error', 'Apotik not found');
        }
    }

    public function showRecomendation()
    {
        $apotikModel = new ApotikModel();
        $latitude = $this->request->getGet('latitude');
        $longitude = $this->request->getGet('longitude');
        $area = $this->request->getGet('radius');

        $recomendation = $area == 'all' ? $apotikModel->getRecommendedApotiks($latitude, $longitude) : $apotikModel->getRecomendationByArea($latitude, $longitude);
        $viewData['data_apotek'] = $recomendation;

        return view('data_apotik', $viewData);
    }
}
