<?php

namespace App\Interfaces;

interface RestaurantRepositoryInterface
{
    public function index($data);
    public function getById($id);
    public function store(array $data);
    public function update(array $data,$id);
    public function delete($id);
}
