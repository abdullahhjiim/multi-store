<?php

namespace App\Http\Controllers;

use App\Services\Category\CategoryService;
use App\Services\Storage\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller

{
    protected $service;

    /**
     * CategoryController constructor.
     *
     * @param CategoryService $service
     */
    public function __construct( CategoryService $service ) {
        $this->service = $service;
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index( Request $request ) {
        $data = $this->service->all( $request->all() );

        return view( 'app.category.index', compact( 'data' ) );
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store( Request $request )
    {
        $this->validate( $request, [
            'name' => 'required',
        ] );

        try {
            $data = $request->all();

            if($request->hasFile('image')) {
                $data['photo_url'] = 'storage/'. (new FileManager())->upload($request->image, 'uploads/images/categories');
            }

            $this->service->store( $data );
            Session::flash( 'alert-success', 'Success! Category saved successfully.' );

            return response()->json( [ 'responseCode' => 1 ] );
        } catch ( \Exception $e ) {

            Session::flash( 'alert-danger', 'Failed! Something went wrong.' );

            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show ( $id )
    {
        $data = $this->service->getById( $id );

        return view( 'app.category.view', [ 'category' => $data ] );
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create ()
    {
        $url = route( 'categories.store' );

        return view( 'app.category.form', compact( 'url' ) );
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit ( $id )
    {
        $url = route( 'categories.update', $id );
        $category = $this->service->getById( $id );

        return view( 'app.category.form', compact( 'category', 'url' ) );
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update( $id, Request $request ) {
        $this->validate( $request, [
            'name' => 'required',
        ] );

        try {
            $this->service->update( $id , $request->all());
            Session::flash( 'alert-success', 'Success! Category saved successfully.' );

            return response()->json(['success' => true, 'message' => 'Category update successful']);
        } catch ( \Exception $e ) {
            Session::flash( 'alert-danger', 'Failed! Something went wrong.' );

            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }

    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try{
            $this->service->getById($id)->delete();
            Session::flash( 'alert-success', 'Category Deleted Successfully' );

            return redirect()->back();
        } catch (\Exception $e) {
            Session::flash( 'alert-danger', 'Failed! Something went wrong.' );

            return redirect()->back();
        }
    }

}
