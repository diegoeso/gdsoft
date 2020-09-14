<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function web()
    {
        return view('diseno_web');
    }

    public function software()
    {
        return view('software');
    }

    public function movil()
    {
        return view('movil');
    }

    public function marketing()
    {
        return view('marketing');
    }

    public function social()
    {
        return view('social');
    }

    public function mantenimiento()
    {
        return view('mantenimiento');
    }

    //--------------------------------------------------------------------

}
