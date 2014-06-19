<?php


class StudentController extends BaseController{
	
	public function index()
	{
		if(Session::has('role')){

			if (Session::get('role')=='administrator') {
				$students = DB::table('tblstudent')->orderBy('student_id', 'desc')->paginate(10);
			}
			else{

				$role = Session::get('role');
				$students = DB::table('tblstudent')->where('branch_id','=', $role)->orderBy('student_id', 'desc')->paginate(10);
			}

			$students = DB::table('tblstudent')->orderBy('student_id', 'desc')->paginate(10);

			return View::make('student.show')->with('students',$students)->with('title','Student Management');
			
		}
		else{

			return Redirect::to('/login')->with('title','Please log in');
			
		}

		

		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return 'From add student';
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return 'Store student';
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'Edit Student';
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'Update it';
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$remove = Student::where('student_id', '=', $id)->delete();
		return Redirect::to('/student')->with('message', 'Student remove successfully');
	}



	
	

	


}



?>