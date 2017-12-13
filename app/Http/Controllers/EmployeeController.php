<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Employees;
	use App\Employee;
	use App\Department;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Pagination\LengthAwarePaginator;
	
	class EmployeeController extends Controller
	{

		public function formpage($page)
		{
			
			
			if($page == 'ceo'){
				$employee = employee::all();
				foreach($employee as $employ){
					$dep = Department::findOrFail($employ->departmentID);
					$employ->departmentID = $dep->departmentname;
								}			
				return view('employeeForm')->with('employees',$employee)->with('page',$page);
			}
			else if($page == 'managerCut'){
				$emp = DB::table('employees')
				->where('departmentID','=','200')
				->get();
				return view('employeeForm')->with('employees',$emp)->with('page','managerCut');
			}
			else if($page == 'managerOrderCustomer'){
				$emp = DB::table('employees')
				->where('departmentID','=','100')
				->get();
				return view('employeeForm')->with('employees',$emp)->with('page','managerOrderCustomer');	
			}
			else if($page == 'managerSew'){
				$emp = DB::table('employees')
				->where('departmentID','=','300')
				->get();
				return view('employeeForm')->with('employees',$emp)->with('page','managerSew');
			}
			else if($page == 'managerOrderCloth'){
				$emp = DB::table('employees')
				->where('departmentID','=','001')
				->get();
				return view('employeeForm')->with('employees',$emp)->with('page','orderCloth');	
			}
		}
		#return view('employeeForm',[
		#	'employees'=>  $employee,
		#	'departments'=> $department->departmentname
		#]);
#$department = Department::all();
		public function insertpage($page)
		{
			return view('insertFormEmployee')->with('page',$page);
		}
		
		public function editpage($id,$page)
		{
			return view('editFormEmployee')->with('id',$id)->with('page',$page);		
		}

		public function save(Request $request,$page)
		{
			// if($request->input('departmentID') ,'=', )
			$employee = new Employee;
			$employee -> employeeID=$request->input('employeeID');
			$employee -> Fname=$request->input('Fname');
			$employee -> Lname=$request->input('Lname');
            $employee -> Ssn=$request->input('Ssn');
            $employee -> departmentID=$request->input('departmentID');
            $employee -> age=$request->input('age');
            $employee -> hire_date=$request->input('hire_date');
            $employee -> tel=$request->input('tel');
            $employee -> address=$request->input('address');
            $employee -> gender=$request->input('gender');
            $employee -> salary=$request->input('salary');
			$employee -> position=$request->input('position');
			$employee -> password=$request->input('password');

			if (Employee::where('employeeID', '=', $request->input('employeeID'))->first()) {
				echo "Employee id exists.";
			}else{
				if (Department::where('departmentID', '=', $request->input('departmentID'))->first()) {
					if(Employee::where('Ssn', '=', $request->input('Ssn'))->first()) {
						echo "Social security number id exits.";
					}else{
						$employee->save();
						echo "Add Success!!";
					}
				}else{
					echo "Employee id exists.";
				}
			}
			
		
			echo"<form action=\"/employees/page/$page\">
			<input type=\"submit\" value=\"Back to Employees\">
			</form>";
		}
		
		public function delete($id,$page)
		{
			$employee  = Employee::findOrFail($id);
			$employee ->delete();
			echo "Delete Success!!";
			echo"<form action=\"/employees/page/$page\">
			<input type=\"submit\" value=\"Back to Employees\">
			</form>";
		}
		
		public function editsave(Request $request, $id,$page)
		{
			$employee  = Employee::findOrFail($id);
			$employee -> Fname=$request->input('Fname');
			$employee -> Lname=$request->input('Lname');
            $employee -> Ssn=$request->input('Ssn');
            $employee -> departmentID=$request->input('departmentID');
            $employee -> age=$request->input('age');
            $employee -> hire_date=$request->input('hire_date');
            $employee -> tel=$request->input('tel');
            $employee -> address=$request->input('address');
            $employee -> gender=$request->input('gender');
            $employee -> salary=$request->input('salary');
			$employee -> position=$request->input('position');
			$employee -> password=$request->input('password');
			
			if (Department::where('departmentID', '=', $request->input('departmentID'))->first()) {
				if(Employee::where('Ssn', '=', $request->input('Ssn'))->first()) {
					echo "Social security number id exists.";
				}else{
					$employee->save();
					echo "Edit Success!!";
				}
			}

			echo"<form action=\"/employees/page/$page\">
			<input type=\"submit\" value=\"Back to Employees\">
			</form>";
		}
}