<?php

namespace App\Controllers;

use App\Core\Controller;

class Makanan extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Makanan();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('Makanan/index', $data);
	}

	public function input()
	{
		$this->dashboard('Makanan/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/Makanan');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('Makanan/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/Makanan');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/Makanan');
	}
}
