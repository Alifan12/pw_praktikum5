<?php

namespace App\Controllers;

class DevicesController extends BaseController
{
  protected $deviceModel;
  public function __construct()
  {
    $this->deviceModel = new \App\Models\deviceModel();
  }

  public function index()
  {

    $device = $this->deviceModel->findAll();

    $data = [
      'title' => 'Daftar Device',
      'device' => $device
    ];

    return view('devicescontroller/index', $data);
  }
}