<?php

class EnrolController  extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
    {
    	
    	return 'checked';

    }

	public function index()
	{
		return 'hello';
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		return View::make('service.create')->with('title','Create service for'.$id);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$student = Student::where('student_id', '=', $id)->firstOrFail();
		$services = Enrol::where('student_id', '=', $student->student_id)->get();
		$total = DB::table('tblenrol')->where('student_id', '=', $student->student_id)->sum('price');
		$disposit = DB::table('tblenrol')->where('student_id', '=', $student->student_id)->sum('dispositAmount');
		$remain = DB::table('tblenrol')->where('student_id', '=', $student->student_id)->sum('remainAmount');
		return View::make('service.service')
		->with('title', $student->englishName."'s Detail")
		->with("student",$student)
		->with("services",$services)
		->with("total",$total)
		->with("disposit",$disposit)
		->with("remain",$remain);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
