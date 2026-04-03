<?php

namespace App\Interfaces;

interface DepartementRepositoryInterface
{
    public function getAllByEntreprise($entrepriseId);
    public function getById($id);
    public function store(array $data);
    public function update($id, array $data);
    public function delete($id);
}