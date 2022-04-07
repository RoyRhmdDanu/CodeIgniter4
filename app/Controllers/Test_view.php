<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Test_view extends Controller
{
    public function index()
    {
        $data['title']  = 'CodeIgniter Framework Test 1';
        $data['msg1']    = 'Selamat datang di CodeIgniter';
        $data['msg2']    = 'Membuat aplikasi CRUD sederhana dengan CodeIgniter 4';
        echo view('test_view', $data);
    }
}