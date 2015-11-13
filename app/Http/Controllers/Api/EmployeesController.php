<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 11/12/15
 * Time: 11:42 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers\Api;

use App\Employees;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * Class EmployeesController
 * @package App\Http\Controllers\Api
 */
class EmployeesController extends Controller
{
    public function listAction(Request $request)
    {
        $page = $request->get('page', 1);
        $amount = $request->get('amount', 10);

        $employees = Employees::query()->paginate($amount, ['*'], 'page', $page);

        print_r($employees);
        die();
    }

    public function getAction($id)
    {
        $employee = Employees::query()->findOrFail($id);

        print_r($employee);
        die();
    }
} 