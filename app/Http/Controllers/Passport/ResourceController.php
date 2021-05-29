<?php

namespace App\Http\Controllers\Passport;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\Passport\ResourceCreateRequest;
use App\Http\Requests\Passport\ResourceUpdateRequest;
use App\Repositories\Passport\ResourceRepository;
use App\Validators\Passport\ResourceValidator;
use App\Models\User;

/**
 * Class ResourceController.
 *
 * @package namespace App\Http\Controllers;
 */
class ResourceController extends Controller
{
    /**
     * @var ResourceRepository
     */
    protected $repository;

    /**
     * @var ResourceValidator
     */
    protected $validator;

    /**
     * ResourceController constructor.
     *
     * @param ResourceRepository $repository
     * @param ResourceValidator $validator
     */
    public function __construct(ResourceRepository $repository, ResourceValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->middleware('can', ['except' => ['index', 'store', 'show', 'update']]);
        //$this->middleware('can', ['except' => ['show']], User::class);
        //echo \Request::route()->getName();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $testbaks = $this->repository->paginate();

        if (true) {//request()->wantsJson()) {

            return response()->json([
                'data' => $testbaks,
            ]);
        }

        return view('testbaks.index', compact('testbaks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ResourceCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ResourceCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $testbak = $this->repository->create($request->all());

            $response = [
                'message' => 'Resource created.',
                'data'    => $testbak->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testbak = $this->repository->find($id);


            return response()->json([
                'data' => $testbak,
            ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testbak = $this->repository->find($id);

        return view('testbaks.edit', compact('testbak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ResourceUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ResourceUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $testbak = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Resource updated.',
                'data'    => $testbak->toArray(),
            ];

            if (true) {//$request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Resource deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Resource deleted.');
    }
}
