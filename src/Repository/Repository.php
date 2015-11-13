<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 11/13/15
 * Time: 10:09 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\App\Repository;


interface Repository
{
    /**
     * Retrieves an entity by its id.
     *
     * @param $id
     *
     * @return mixed
     */
    public function find($id);


    /**
     * Adds a new entity to the storage.
     *
     * @param array|object $value
     *
     * @return mixed
     */
    public function add($value);

    /**
     * Deletes the entity with the given id.
     *
     * @param $id
     *
     * @return mixed
     */
    public function delete($id);
} 