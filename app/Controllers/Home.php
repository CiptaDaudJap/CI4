<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		// echo " Cipta Daud";
	}

	//--------------------------------------------------------------------
	// test saja coba di bawah 
	// kita ketik url 8080/home/test akan muncul funtion nama di bawah
	public function test()
	{
		// echo " Cipta Daud";  kalau pakai ' ' tdk akan jalan 
		echo "$this->nama.";
	}
}
