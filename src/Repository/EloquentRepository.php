<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 11/13/15
 * Time: 11:04 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\App\Repository;

use Illuminate\Database\Eloquent\Model;
use NilPortugues\App\Repository\Eloquent\Exceptions\EloquentModelMissingProperties;
use NilPortugues\App\Repository\Eloquent\Exceptions\EloquentModelNotFound;
use stdClass;

/**
 * Class EloquentRepository
 * @package NilPortugues\App\Repository\Eloquent
 */
abstract class EloquentRepository implements Repository
{
    /**
     * @var array
     */
    protected $columns = [];

    /**
     * @return array
     */
    protected function getColumns()
    {
        return $this->columns;
    }

    /**
     * @return mixed
     */
    protected abstract function getClassName();

    /**
     * Retrieves an entity by its id.
     *
     * @param $id
     *
     * @throws EloquentModelNotFound
     * @return Model
     */
    public function find($id)
    {
        $class = $this->getClassName();
        $model = $class::query()->find($id);

        if (null === $model) {
            throw new EloquentModelNotFound($id, $this->getClassName());
        }

        return $model;
    }

    /**
     * Adds a new entity to the storage.
     *
     * @param array $input
     *
     * @throws EloquentModelNotFound
     * @return Model
     */
    public function add($input)
    {
        $class = $this->getClassName();

        /** @var Model $model */
        $model = new $class();
        $input = (object)$input;

        if (property_exists($input, $model->getKeyName())) {
            $model = $class::query()->find($input->id);

            if (!$model) {
                throw new EloquentModelNotFound($input->id, $this->getClassName());
            }

            return ($this->hasAllProperties($input)) ?
                $this->update($input, $model) : $this->partialUpdate($input, $model);
        }

        return $this->create($input);
    }

    /**
     * @param stdClass  $input
     *
     * @return bool
     */
    private function hasAllProperties(stdClass $input)
    {
        $hasAll = true;

        foreach ($this->getColumns() as $attribute) {
            $hasAll = $hasAll && property_exists($input, $attribute);
        }

        return $hasAll;
    }


    /**
     * Updates one element in the repository with the given $values.
     *
     * @param stdClass       $input
     * @param Model $model
     *
     * @return Model
     */
    private function update(stdClass $input, Model $model)
    {
        $model = $this->massAssignment($input, $model);
        $model->update();

        return $model;
    }

    /**
     * @param stdClass  $input
     * @param Model $model
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    private function massAssignment(stdClass $input, Model $model)
    {
        foreach ($this->getColumns() as $attribute) {
            $model->$attribute = $input->$attribute;
        }


        return $model;
    }

    /**
     * Updates partially an element in the repository with the given $values.
     *
     * @param stdClass  $input
     * @param Model $model
     *
     * @return Model
     */
    private function partialUpdate(stdClass $input, Model $model)
    {
        foreach ($this->getColumns() as $attribute) {
            if (property_exists($input, $attribute)) {
                $model->$attribute = $input->$attribute;
            }
        }
        $model->update();

        return $model;
    }

    /**
     * @param stdClass $input
     *
     * @return \Illuminate\Database\Eloquent\Model
     * @throws EloquentModelMissingProperties
     */
    private function create(stdClass $input)
    {
        $class = $this->getClassName();
        $model = new $class();

        if (!$this->hasAllProperties($input, $model)) {
            throw new EloquentModelMissingProperties();
        }

        $model = $this->massAssignment($input, $model);
        $model->save();

        return $model;
    }

    /**
     * Deletes the entity with the given id.
     *
     * @param $id
     *
     * @throws EloquentModelNotFound
     * @return mixed
     */
    public function delete($id)
    {
        $class = $this->getClassName();

        /** @var Model $model */
        $model = $class::query()->find($id);

        if (null === $model) {
            throw new EloquentModelNotFound($id, $this->getClassName());
        }

        $model->delete($id);
    }
} 