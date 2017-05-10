<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class DTBaseAPIController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dtpizzasapi
	 *
	 * @return Response
	 */
	public function apiIndex()
	{
		return response()->json(['success' => false, 'message' => 'Methon not implement']);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dtpizzasapi/create
	 *
	 * @return Response
	 */
	public function apiCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dtpizzasapi
	 *
	 * @return Response
	 */
	public function apiStore()
	{
        return response()->json(['success' => false, 'message' => 'Methon not implement']);
	}

	/**
	 * Display the specified resource.
	 * GET /dtpizzasapi/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function apieShow($id)
	{
        return response()->json(['success' => false, 'message' => 'Methon not implement']);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dtpizzasapi/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function apiEdit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dtpizzasapi/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function apieUpdate($id)
	{
        return response()->json(['success' => false, 'message' => 'Methon not implement']);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dtpizzasapi/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        return response()->json(['success' => false, 'message' => 'Methon not implement']);
	}

}