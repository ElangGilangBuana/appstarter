<?php

namespace App\Controllers;

use App\Models\SapiModel;
use \Hermawan\DataTables\DataTable;

use CodeIgniter\Database\Config;


class Sapi extends BaseController
{
    protected $sapiModel; 

    public function __construct()
    {
        
        $this->sapiModel = new SapiModel();
  

       
    }
    
    public function index()
    {
        
                $data = [
        
                    'title' => 'Daftar sapi',
                    'sapi' => $this->sapiModel->get_sapi()->getResult(),
                 
                   
                ];
        
                // dd($data['sapi']);
        
                return view('sapi/indexnew', $data);   
    }

    // public function listData(){
    //     $sapi = $this->sapiModel;
    //     $data = [];
    //     $i = 1;

    //     foreach ($sapi as $datas) {
    //         $data['sapi'][] = [
    //             $i++,
    //             $datas['eartag'],
    //             $datas['id_hospital_pen'],
    //             $datas['penyakit'],
    //         ];
    //     } return json_encode($data);


        // if($this->request->isAJAX()){
        //     $db = \Config\Database::connect();
        //     $builder = $db->table('sapi')->select('eartag, id_hospital_pen, penyakit');
            
        //     return DataTable::of($builder)
        //     ->addNumbering('No')
        //     ->toJson(true);
        // }  
    // }

    public function detail ($eartag)
    {
        $data = [
            'title' => 'Daftar sapi',
            'sapi' => $this->sapiModel->getDetail($eartag)->getResult()
        ];

        // dd($data['sapi']);
      
        return view('sapi/detail', $data);

    }

    public function kesehatan ($eartag)
    {
        $data = [
            'title' => 'Daftar sapi',
            'sapi' => $this->sapiModel->getKesehatan($eartag)->getResult()
        ];

        // dd($data['sapi']);
      
        return view('sapi/kesehatan', $data);

    }
}

    
//     public function pagination()
//     {
//         $data = [
//             'title' => 'Daftar sapi',
//             'sapi' => $this->sapiModel->paginate(1),
//             'pager' => $this->sapiModel->pager
//         ];

//         // dd($data['sapi']);
      
//         return view('sapi/index', $data);

//     }