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
            'title' => 'App List | Buat Catatan',
            'btn' => 'Simpan Catatan'
        ];
        echo view("pages/create-view", $data);
    }

    public function edit($input)
    {
        $note = $this->dataNote->where(['id' => $input])->first();
        $data = [
            'title' => "App List | Edit Catatan No-$input",
            'btn' => 'Edit Catatan',
            'note' => $note
        ];

        echo view("pages/create-view", $data);
    }

    public function saveNote(){
        $note = $this->dataNote->save([
            'judul' => $this->request->getVar('judul-note'),
            'isi' => $this->request->getVar('isi-note')
        ]);

        return redirect()->to('list');
    }

    public function deleteNote($id){
        $note = $this->dataNote->delete([
            'id' => $id
        ]);

        return redirect()->to('list');
    }

    public function editNote($id){
        $note = $this->dataNote->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul-note'),
            'isi' => $this->request->getVar('isi-note')
        ]);

        return redirect()->to('list');
    }
}
