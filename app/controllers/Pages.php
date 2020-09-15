<?php

class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'title' => 'Hola we',
    ];

    $this->view('pages/start', $data);
  }
}
