<?php

namespace App\Controllers;

use App\Models\OrangModel;

use CodeIgniter\Database\Config;

class Orang extends BaseController
{
    protected $orangModel; 

    public function __construct()
    {
       $this->orangModel = new OrangModel();  
       
    }
    
    public function index()
    {
       $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') :
       1;

        $data = [
            'title' => 'Daftar Orang',
            'orang' =>$this->orangModel->paginate(5, 'orang'),
            'pager' => $this->orangModel->pager,
            'currentPage' => $currentPage
        ];
        return view('orang/index', $data);
    }

 }