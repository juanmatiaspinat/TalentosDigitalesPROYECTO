<?php

namespace App\Controllers;

class Home extends BaseController
{
    

    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }

    public function inicio(){
        $data['titulo']='Inicio';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }

    public function quienes_somos(){
        $data['titulo']='Quienes Somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    
    public function acercade(){
        $data['titulo']='Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acercade');
        echo view('front/footer_view');
    }

    public function formacion(){
        $data['titulo']='formacion';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/formacion');
        echo view('front/footer_view');
    }

    public function registro(){
        $data['titulo']='registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function login(){
        $data['titulo']='login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }
}
