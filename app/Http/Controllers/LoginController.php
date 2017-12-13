<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Department;
    use App\Ordercloth;
    use App\Ordercut;
    use App\Ordersew;
    use App\Employee;
  
	class LoginController extends Controller
	{
        public function loginformpage()
		{		
			return view('login');	
        }
        public function loginresult(Request $request)
		{	
            $id = $request->input('id');
            $pwd = $request->input('pwd');
            if(Employee::where('employeeID','=',$id)->first()){
                if(Employee::where('employeeID','=',$id)->value('position')=='Supervisor'
                &&Employee::where('employeeID','=',$id)->value('password')==$pwd){
                    $departmentID = Employee::where('employeeID','=',$id)->value('departmentID');
                    if($departmentID == '999'){
                        return redirect('/ceo');
                    }else if($departmentID == '001'){
                        return redirect('/managerOrderCloth');
                    }else if($departmentID == '200'){
                        return redirect('/managerCut');
                    }else if($departmentID == '300'){
                        return redirect('/managerSew');                        
                    }else if($departmentID == '100'){
                        return redirect('/managerOrderCustomer'); 
                    }
                } 
            }
            return redirect('/login');
        }
    }
    // }
?>