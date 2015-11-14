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
use NilPortugues\Laravel5\JsonApiSerializer\JsonApiRequestTrait;
use NilPortugues\Laravel5\JsonApiSerializer\JsonApiResponseTrait;
use NilPortugues\Laravel5\JsonApiSerializer\JsonApiSerializer;


/**
 * Class EmployeesController
 * @package App\Http\Controllers\Api
 */
class EmployeesController extends Controller
{
    use JsonApiResponseTrait;
    use JsonApiRequestTrait;

    /**
     * @var EmployeesRepository
     */
    private $repository;

    /**
     * @var JsonApiSerializer
     */
    private $serializer;

    /**
     * @param EmployeesRepository $repository
     * @param JsonApiSerializer   $serializer
     */
    public function __construct(EmployeesRepository $repository, JsonApiSerializer $serializer)
    {
        $this->repository = $repository;
        $this->serializer = $serializer;
    }


    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction(Request $request)
    {
        $apiRequest = $this->buildJsonApiRequest($request);

        $page = $apiRequest->getPageNumber();
        $limit = $apiRequest->getPageSize();

        $employees = Employees::query()->paginate($limit, ['*'], 'page', $page);

        if ($employees->lastPage() < $page) {
            return $this->resourceNotFoundResponse(
                'Employees Not Found',
                sprintf('Requested employees page %s was not found.', $page)
            );
        }

        return $this->responseCollection(__METHOD__, $this->serializer, $apiRequest, $employees, $employees->total());
    }


    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction(Request $request)
    {
        try {
            $employee   = $this->repository->find($request->id);
            $serialized = $this->serializer->serialize($employee);
            return $this->response($serialized);

        } catch (\Exception $e) {
            return $this->resourceNotFoundResponse(
                'Employee Not Found',
                sprintf('Employee with id %s was not found.', $request->id)
            );
        }
    }

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function postAction(Request $request)
    {
        try {
            $employee = $this->repository->add($request->all());
            $serialized = $this->serializer->serialize($employee);
            $locationUrl = action(sprintf("%s@%s", __CLASS__, 'getAction'), [ $employee->id ]);

            return $this->resourceCreatedResponse($serialized, $locationUrl);

        } catch (\Exception $e) {
            echo 'Many errors can happen!';
            die();
        }
    }


    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function patchAction(Request $request)
    {
        $employee = $this->repository->add(array_merge(['id' => $request->id], $request->all()));
        $serialized = $this->serializer->serialize($employee);

        return $this->resourceUpdatedResponse($serialized);
    }


    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function putAction(Request $request)
    {
        $employee = $this->repository->add(array_merge(['id' => $request->id], $request->all()));
        $serialized = $this->serializer->serialize($employee);

        return $this->resourceUpdatedResponse($serialized);
    }


    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction(Request $request)
    {
        $this->repository->delete($request->id);

        return $this->resourceDeletedResponse('');
    }
} 