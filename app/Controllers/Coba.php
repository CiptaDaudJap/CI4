<?php

namespace App\Controllers;

class Coba extends BaseController
// class Coba mewarisi perilaku dari
// class BaseController ( Inheritance ) bisa dilihat di folder
// Controllers 
{
    public function index()
    {
        // return view('welcome_message');
        echo " Ini Controller Coba method index";
    }

    //--------------------------------------------------------------------
    // test saja test  di bawah
    // jadi property nama tadi kita bisa akses di mana saja
    // selama extends ke BaseController

    public function test()
    {
        echo " Hallo , nama saya Cipta Daud .";
        // kita ambil dari BaseControllers isi nama tsb 

        echo " Hallo 2 , nama saya $this->nama.";
    }
}
