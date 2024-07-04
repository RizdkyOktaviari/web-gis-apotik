<?php

namespace App\Models;

use CodeIgniter\Model;

class ApotikModel extends Model
{
    protected $table = 'tb_apotik';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'contact', 'description', 'latitude', 'longitude', 'address', 'rating', 'open_to_close', 'close_to_open'];

    public function getRecommendedApotiks($userLatitude, $userLongitude, $limit = 10)
    {
        return $this->select('*')
            ->select("6371 * acos(cos(radians($userLatitude)) * cos(radians(latitude)) * cos(radians(longitude) - radians($userLongitude)) + sin(radians($userLatitude)) * sin(radians(latitude))) AS distance")
            ->orderBy('distance', 'asc')
            ->orderBy('rating', 'desc')
            ->findAll($limit);
    }

    public function getRecomendationByArea($userLatitude, $userLongitude, $area = 10, $limit = 10)
    {
        return $this->select('*')
            ->select("(6371 * acos(cos(radians($userLatitude)) * cos(radians(latitude)) * cos(radians(longitude) - radians($userLongitude)) + sin(radians($userLatitude)) * sin(radians(latitude)))) AS distance")
            ->having('distance <=', $area)
            ->orderBy('distance', 'asc')
            ->orderBy('rating', 'desc')
            ->limit($limit)
            ->findAll();
    }
}
