<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 11/13/15
 * Time: 10:07 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\App\Repository\Eloquent;

use App\Employees;
use NilPortugues\App\Repository\EloquentRepository;

/**
 * Class $classRepository
 * @package src\Repository\Eloquent
 */
class EmployeesRepository extends EloquentRepository
{
    /**
     * @var array
     */
    protected $columns = [
        'company',
        'last_name',
        'first_name',
        'email_address',
        'job_title',
        'business_phone',
        'home_phone',
        'mobile_phone',
        'fax_number',
        'address',
        'city',
        'state_province',
        'zip_postal_code',
        'country_region',
        'web_page',
        'notes',
        'attachments',
    ];

    /**
     * @return mixed
     */
    protected function getClassName()
    {
        return Employees::class;
    }

} 