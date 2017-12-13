<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Ordersews;
	use App\Ordersew;
	use App\Ordercustomer;
	use App\Employee;
	use App\Customer;
	
	class OrdersewController extends Controller
	{

		public function formpage($page){

			$ordersews = Ordersew::all();
			
			
			foreach($ordersews as $sew){
				$status = $sew->status;
				if($status == 0){
					$newStatus  = "Not yet";
				}else{
					$newStatus  = "Done";
				}
			$sew->status = $newStatus;
			$emp = Employee::findOrFail($sew->EmployeeSewID);
			$sew->EmployeeSewID = $emp->Fname;

			 
			$oc = Ordercustomer::findOrFail($sew->OrderID);
			$sew->Total = $oc->Total;
			
			}
			
			return view('ordersewForm')->with('ordersews',$ordersews)->with('page',$page);
			}
			
			
	
		public function insertpage($page)
		{
			
			return view('insertFormOrdersew')->with('page',$page);
		}
		
		public function editpage($id,$page)
		{
			$osew = Ordersew::findOrFail($id);
			
			return view('editFormOrderSew')->with('id',$id)->with('osews',$osew)->with('page',$page);
		}

		public function save(Request $request,$page)
		{
			
			// $StartDate = DB::table('ordersews')
			// ->orderBy('StartDate','desc')
			// ->get();
			// echo "$users";
			$ordersew = new Ordersew;
			$ordersew->OrderID=$request->input('OrderID');
			$ordersew->OrderSewID=$request->input('OrderSewID');
            $ordersew->EmployeeSewID=$request->input('EmployeeSewID');
            $ordersew->StartDate=$request->input('StartDate');
            $ordersew->EndDate=$request->input('EndDate');
			$ordersew->status=$request->input('status');
			$ordercustomer = Ordercustomer::findOrFail($request->input('OrderID'));
			$ordersew->Total = $ordercustomer->Total;

			if (Ordersew::where('OrderSewID', '=', $request->input('OrderSewID'))->first()) {
				echo "orderSew id exist.";
			}else{
				if (Ordercustomer::where('OrderID', '=', $request->input('OrderID'))->first()) {
					$ordersew->save();
					echo "Add Success!!";
				}else{
					echo "OrderID exist.";
				}
			}
			echo"<form action=\"/ordersews/page/$page\">
			<input type=\"submit\" value=\"Back To Ordersew\">
			</form>";
		}
		
		public function delete($id,$page)
		{
			$ordersew = Ordersew::findOrFail($id);
			$ordersew->delete();
			echo "Delete Success!!";
			echo"<form action=\"/ordersews/page/$page\">
			<input type=\"submit\" value=\"Back To Ordersew\">
			</form>";
		}
		
		public function editsave(Request $request, $id,$page)
		{
			$ordersew = Ordersew::findOrFail($id);
			//$ordersew->OrderSewID=$request->input('OrderSewID');
            $ordersew->EmployeeSewID=$request->input('EmployeeSewID');
            $ordersew->StartDate=$request->input('StartDate');
            $ordersew->EndDate=$request->input('EndDate');
			$ordersew->status=$request->input('status');
			//$ordercustomer = Ordercustomer::findOrFail($ordersew->OrderID);
			//$ordersew->Total = $ordercustomer->Total;
			if (Ordersew::where('OrderSewID', '=', $request->input('OrderSewID'))->first()) {
				echo "orderSew id exist.";
			}else{
				$ordersew->save();
				echo "Edit Success!!";
			}
			echo"<form action=\"/ordersews/page/$page\">
			<input type=\"submit\" value=\"Back To Ordersew\">
			</form>";
		}

		
		public function editstatus(Request $request, $id,$page)
		{
			$ordersew = Ordersew::findOrFail($id);
			$ordersew->status=$request->input('status');
			
			if ($request->input('status') == ''){
				echo "Please select!!!";
				echo"<form action=\"/ordersews/page/$page\">
				<input type=\"submit\" value=\"Back To Order Sews\">
				</form>";
			}else{
				$ordersew->save();
				echo "Edit Complete!!";
				echo"<form action=\"/ordersews/page/$page\">
				<input type=\"submit\" value=\"Back To Order Sews\">
				</form>";
			}
			
			
		}

		public function linktoordercus($id,$page){
			$orcus = Ordercustomer::findOrfail($id);
            #$orcus->linetotal = ($orcus->Price) * ($orcus->Total);
			return view('dataSew')->with('ordercustomer',$orcus)->with('id',$id)->with('page',$page);
		}


	}