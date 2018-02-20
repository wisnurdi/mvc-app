<?php

namespace app\C;

use mvc\Controller;
use app\M\Books;

Class SiteC extends Controller
{
	public function index()
	{
		// $project = new Project();
		// $data = (new Project)->all();
		// $data = (new Books)->where(['title'=>'mengapa bro'])->order_by('id', 'desc')->all();
		$data = (new Books)->order_by('id', 'desc')->all();
		// $data = ['judul' =>'satu', 'desc' => 'Keterangan'];

		$this->render('home', ['data'=>$data]);
		// $this->render('about');
		
	}

	public function about()
	{
		$this->render('about');
	}

	public function login()
	{
		$this->render('login');
	}

	public function contact()
	{
		$this->render('contact');
	}
	
}
