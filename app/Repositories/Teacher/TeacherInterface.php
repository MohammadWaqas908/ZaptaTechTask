<?php
namespace App\Repositories\Teacher;

interface TeacherInterface{
    public function index();
    public function edit($id);
    public function show($id);
    public function store(array $data);
    public function Update(array $data, $id);
}