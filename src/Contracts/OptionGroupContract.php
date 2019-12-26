<?php

namespace ConfrariaWeb\Option\Contracts;

interface OptionGroupContract
{

    public function all();

    public function create(array $data);

    public function destroy(int $id);

    public function find(int $id);

    public function findBy(string $field, string $value);

    public function update(array $data, int $id);

    public function updateOrCreate(array $attributes, array $values);

    public function where(array $data);

}
