<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Models\Departments;
	use App\Department;
	use App\Employee;
	class DepartmentController extends Controller
	{
		public function formpage($page)
		{
		
			$department = Department::all();
			// $employee = employee::all();			
			
			// foreach($department as $dep){
			// 	$emp = Employee::findOrFail($dep->supervisor);
			// 	$dep->supervisor = $emp->Fname;
			// }
			return view('departmentForm')->with('departments',$department)->with('page',$page);



		}


		public function insertpage($page)
		{
			return view('insertFormDepartment')->with('page',$page);
		}
		
		public function editpage($id,$page)
		{
			return view('editFormDepartment')->with('id',$id)->with('page',$page);
		}

		public function save(Request $request,$page)
		{
			$department = new Department;
			$department->departmentname=$request->input('departmentname');
			$department->departmentID=$request->input('departmentID');
			$department->supervisor=$request->input('supervisor');
			
			if (Department::where('departmentID', '=', $request->input('departmentID'))->first()) {
				echo "Department id exits.";
			}else{
				if (Employee::where('employeeID', '=', $request->input('supervisor'))->first()) {
					if(Department::where('supervisor', '=', $request->input('supervisor'))->first()) {
						echo "Supervisor id exits.";
					}else{
						$department->save();
						echo "Add Success!!";
					}
				}else{
					echo "Employee id exits.";
				}
			}

			echo"<form action=\"/departments/page/$page\">
			<input type=\"submit\" value=\"Back To Department\">
			</form>";
		}
		
		public function delete($id,$page)
		{
			$department = Department::findOrFail($id);
			$department->delete();
			echo "Delete Success!!";
			echo"<form action=\"/departments/page/$page\">
			<input type=\"submit\" value=\"Back To Department\">
			</form>";
		}
		
		public function editsave(Request $request, $id,$page)
		{
			$department = Department::findOrFail($id);
			$department->departmentname=$request->input('departmentname');
			$department->departmentID=$request->input('departmentID');
			$department->supervisor=$request->input('supervisor');
			
			if (Department::where('departmentID', '=', $request->input('departmentID'))->first()) {
				echo "Department id exits.";
			}else{
				if (Employee::where('employeeID', '=', $request->input('supervisor'))->first()) {
					if(Department::where('supervisor', '=', $request->input('supervisor'))->first()) {
						echo "Supervisor id exits.";
					}else{
						$department->save();
						echo "Edit Success!!";
					}
				}else{
					echo "Employee id exits.";
				}
			}
			
			echo"<form action=\"/departments/page/$page\">
			<input type=\"submit\" value=\"Back To Department\">
			</form>";
		}
	}