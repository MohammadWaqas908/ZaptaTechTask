<?php
namespace App\Repositories\Student;

interface StudentInterface{
    public function getAllStudent();
    public function edit($id);
    public function show($id);
    public function store(array $data);
    public function Update(array $data, $id);
}