<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    protected $dataNote;
    
    public function __construct(){
        $this->dataNote = new HomeModel();
    }

    public function index()
    {
        $data = [
            'title' => 'App List | Halaman Utama'
        ];

        echo view('pages/home-view', $data);
    }

    public function list()
    {
        $note = $this->dataNote->findAll();

        $data = [
            'title' => 'App List | List Catatan',
            'note' => $note
        ];
        echo view("pages/list-view", $data);
    }

    public function input()
    {
        $data = [
            'title' => 'App List | Buat Catatan'
        ];
        echo view("pages/create-view", $data);
    }

    public function edit($input)
    {
        $note = $this->dataNote->where(['id' => $input])->first();
        $data = [
            'title' => "App List | Edit Catatan No-$input",
            'note' => $note
        ];

        echo view("pages/create-view", $data);
    }
}
