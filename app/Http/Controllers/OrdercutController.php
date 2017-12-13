<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Ordercuts;
	use App\Ordercut;
	use App\Ordercustomer;
	use App\Employee;
	
	class OrdercutController extends Controller
	{
		public function formpage($page){
			$ordercut = Ordercut::all();

			foreach($ordercut as $cut){
				$empID = Employee::findOrFail($cut->EmployeeCutID);
				$cut->EmployeeCutID = $empID->Fname;
				$status = $cut->status;
				if($status == 0){
					$newStatus  = "Not yet";
				}else{
					$newStatus  = "Done";
				}
				$cut->status = $newStatus;

			
			$oc = Ordercustomer::findOrFail($cut->orderID);
			$cut->Total = $oc->Total;
			}
			return view('ordercutForm')->with('ordercuts',$ordercut)->with('page',$page);
			
		}
		public function insertpage($page)
		{
			return view('insertFormOrderCut')->with('page',$page);
		}
		
		public function editpage($id,$page)
		{
			$ordercut = Ordercut::findOrFail($id);
			return view('editFormOrderCut')->with('id',$id)->with('ordercut',$ordercut)->with('page',$page);
		}

		public function save(Request $request,$page)
		{
			
			$ordercut = new Ordercut;
			$cus = Ordercustomer::findOrFail($request->input('orderID'));
			$ordercut->orderID=$request->input('orderID');
			$ordercut->typeCloth=$cus->type_cloth;
			$ordercut->OrderCutID=$request->input('OrderCutID');
			$ordercut->ColorID=$cus->color_cloth;
			$ordercut->Total = $cus->Total;
			$ordercut->EmployeeCutID=$request->input('EmployeeCutID');
			//$ordercut->factory_id=$request->input('factory_id');
            $ordercut->StartDate=$request->input('StartDate');
            $ordercut->EndDate=$request->input('EndDate');
			$ordercut->status=$request->input('status');
			

			if (Ordercut::where('OrderCutID', '=', $request->input('OrderCutID'))->first()) {
				echo "orderCut id exist.";
			}else{
				if (Ordercustomer::where('OrderID', '=', $ordercut->orderID=$request->input('orderID'))->first()) {
					$ordercut->save();
					echo "Add Success!!";
				}else{
					echo "OrderID exist.";
			}}
			echo"<form action=\"/ordercuts/page/$page\">
			<input type=\"submit\" value=\"Back To Ordercut\">
			</form>";
			
		}
		
		public function delete($id,$page)
		{
			$ordercut = Ordercut::findOrFail($id);
			$ordercut->delete();
			echo "Delete Success!!";
			echo"<form action=\"/ordercuts/page/$page\">
			<input type=\"submit\" value=\"Back To Ordercut\">
			</form>";
		}
		
		public function editsave(Request $request, $id,$page)
		{
			$ordercut = Ordercut::findOrFail($id);
			//$ordercut->orderID=$request->input('orderID');
			//$ordercut->typeCloth=$request->input('typeCloth');
            //$ordercut->OrderCutID=$request->input('OrderCutID');
            //$ordercut->ColorID=$request->input('ColorID');
			$ordercut->EmployeeCutID=$request->input('EmployeeCutID');
			//$ordercut->factory_id=$request->input('factory_id');
            $ordercut->StartDate=$request->input('StartDate');
            $ordercut->EndDate=$request->input('EndDate');
			$ordercut->status=$request->input('status');
			if (Ordercut::where('OrderCutID', '=', $request->input('OrderCutID'))->first()) {
				echo "orderCut id exist.";
			}else{
				$ordercut->save();
				echo "Edit Success!!";
			}
			echo"<form action=\"/ordercuts/page/$page\">
			<input type=\"submit\" value=\"Back To Ordercut\">
			</form>";
		}
		
		public function editstatus(Request $request, $id,$page)
		{
			$ordercut = Ordercut::findOrFail($id);
			$ordercut->status=$request->input('status');
			if ($request->input('status') == ''){
				echo "Please select!!!";
				echo"<form action=\"/ordercuts/page/$page\">
				<input type=\"submit\" value=\"Back To Order Cuts\">
				</form>";
			}else{
				$ordercut->save();
				echo "Edit Complete!!";
				echo"<form action=\"/ordercuts/page/$page\">
				<input type=\"submit\" value=\"Back To Order Cuts\">
				</form>";
			}
			
		}

		public function linktoordercus($id,$page){
			$orcus = Ordercustomer::findOrfail($id);
            #$orcus->linetotal = ($orcus->Price) * ($orcus->Total);
			return view('dataCut')->with('ordercustomer',$orcus)->with('id',$id)->with('page',$page);
		}

	}

	