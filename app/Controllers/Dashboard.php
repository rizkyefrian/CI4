<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        // return view('dashboard/index');
        echo "Welcome back, ".$session->get('email');

    }
}