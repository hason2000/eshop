<?php

namespace App\Repositories;

use App\Repositories\AbstractRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements AbstractRepositoryInterface
{
    protected $model;

    public function store(array $data) : Model
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function show($id) : Model
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function all() : Collection
    {
        return $this->model->all();
    }
}

?>
