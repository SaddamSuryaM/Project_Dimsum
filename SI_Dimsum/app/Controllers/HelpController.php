<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Help;

class HelpController extends BaseController
{
    public function index()
    {
        $helpModel = new Help();
        $help = $helpModel->findAll();

        $data = [
            'title'=>'Help',
            'help' => $help
        ];

        return view('admin/help/Help',$data);
    }

    public function create(){
        $data = [
            'title'=>'Create Help'
        ];

        return view('admin/help/tambahHelp', $data);
    }

    public function store(){
        if (!$this->validate([
            'pertanyaan' => 'required|string',
            'jawaban' => 'required|string',
        ])) {
            return redirect()-> to('/create');
        };
        
        $helpModel = new Help();
        
        $data = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'jawaban' => $this->request->getPost('jawaban'),
        ];
        $helpModel->save($data);
        return redirect()->to('Help');
    }
    
    public function delete($id)
    {
        $helpModel = new Help();
        $helpModel->delete($id);
        return redirect()->to('Help');
    }
    
    public function edit($id)
    {
        $helpModel = new Help();
        
        $data = [
            'help' => $helpModel->find($id),
            'title' => 'Edit Help'
        ];
        return view('/help/edit', $data);
    }

    public function update($id){
        if (!$this->validate([
            'pertanyaan' => 'required|string',
            'jawaban' => 'required|string',
        ])) {
            return redirect()-> to('/edit/'.$id);
        }

        $helpModel = new Help();
        $data = [
            'pertanyaan' => $this->request->getVar('pertanyaan'),
            'jawaban' => $this->request->getVar('jawaban'),

        ];
        $helpModel->update($id,$data);
        return redirect()->to('/help');
    }
}
