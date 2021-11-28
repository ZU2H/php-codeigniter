<?php

namespace App\Controllers;

class kategori extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo "<h1> belajar ci4 </h1>";
    }
    public function select()
    {
        echo "menampilkan semua data";
    }
    public function selectWhere($id = null)
    {
        echo "menampilkan data yang dipilih";
    }
    public function formInsert()
    {
        echo "menampilkan form insert";
    }
    public function formUpdate()
    {
        echo "menampilkan form update";
    }
    public function update($id = null)
    {
        echo "proses update data $id";
    }
    public function delete($id = null)
    {
        echo "proses delete data";
    }
}
