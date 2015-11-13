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
use NilPortugues\App\Repository\Eloquent\EmployeesRepository;


/**
 * Class EmployeesController
 * @package App\Http\Controllers\Api
 */
class EmployeesController extends Controller
{
    /**
     * @var \NilPortugues\App\Repository\Eloquent\EmployeesRepository
     */
    private $repository;

    /**
     * @param EmployeesRepository $repository
     */
    public function __construct(EmployeesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function listAction(Request $request)
    {
        $page   = $request->query('page', 1);
        $amount = $request->query('amount', 10);

        $employees = Employees::query()->paginate($amount, ['*'], 'page', $page);

        if ($employees->lastPage() < $page) {
            throw new \Exception("Out of bounds");
        }

        print_r($employees);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @throws \Exception
     *
     */
    public function getAction(Request $request)
    {
        $employee = $this->repository->find($request->id);

        print_r($employee);
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function postAction(Request $request)
    {
        $employee = $this->repository->add($request->all());

        print_r($employee);
    }


    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function patchAction(Request $request)
    {
        $employee = $this->repository->add(
            array_merge(['id' => $request->id], $request->all())
        );

        print_r($employee);
    }


    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function putAction(Request $request)
    {
        $employee = $this->repository->add(
            array_merge(['id' => $request->id], $request->all())
        );

        print_r($employee);
    }


    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public function deleteAction(Request $request)
    {

        $this->repository->delete($request->id);

        echo 'tried delete';
    }
} 