<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 11/13/15
 * Time: 10:13 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\App\Repository\Eloquent\Exceptions;


use ReflectionClass;

class EloquentModelNotFound extends \Exception
{
    /**
     * @param string $id
     * @param int    $class
     */
    public function __construct($id, $class)
    {
        $message = sprintf("Could not find %s with id %s", (new ReflectionClass($class))->getShortName(), $id);

        parent::__construct($message);
    }
} 