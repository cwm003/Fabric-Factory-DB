<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Ordercustomers;
	use App\Customer;
	use App\Ordercustomer;
	use App\Employee;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Pagination\LengthAwarePaginator;
	use App\Ordercloth;
	use App\Ordercut;
	use App\Ordersew;
	
	
	class OrdercustomerController extends Controller
	{

		public function formpage($page)
		{
			#$ordercustomer = DB::table('customers')->paginate(3);
			$ordercustomer = DB::table('ordercustomers')
			->orderByRaw('dateship ASC')
			->get();
			#$customer = Customer::all();
			foreach( $ordercustomer as $ordercus){
				$ordercus->linetotal = $ordercus->Total * $ordercus->Price;
				$emp = Employee::findOrFail($ordercus->employeeID_recv);
				$ordercus->employeeID_recv = $emp->Fname;
				$cus = Customer::findOrFail($ordercus->idcustomer);
				$ordercus->Address = $cus->Address;
				$ordercus->Tel = $cus->tel;
			}
			
			return view('ordercustomerForm')->with('ordercustomers',$ordercustomer)->with('page',$page);
			}



		public function insertpage($page)
		{
			return view('insertFormOrderCustomer')->with('page',$page);
		}
		
		public function editpage($id,$page)
		{
			$or = Ordercustomer::findOrFail($id);
			$customer =Customer::findOrFail($or->idcustomer);
			return view('editFormOrderCustomer')->with('id',$id)->with('customers',$customer)->with('page',$page);
		}

		public function save(Request $request,$page)
		{
			$ordercustomer = new Ordercustomer;
			//$ordercustomer->Fname=$request->input('Fname');
			$ordercustomer->idcustomer=$request->input('idcustomer');
			$cus =Customer::findOrFail($request->input('idcustomer'));
			$ordercustomer->Fname = $cus->nameCus;
			$ordercustomer->Address=$cus->Address;
			$ordercustomer->Tel=$cus->tel;
			$ordercustomer->OrderID=$request->input('OrderID');
            $ordercustomer->Detail=$request->input('Detail');
			$ordercustomer->typeproduct=$request->input('typeproduct');
			$ordercustomer->type_cloth=$request->input('type_cloth');
            $ordercustomer->color_cloth=$request->input('color_cloth');
			$ordercustomer->size=$request->input('size');
			$ordercustomer->Total=$request->input('Total');
			$ordercustomer->Price=$request->input('Price');
			$ordercustomer->linetotal=($request->input('Total')*$request->input('Price'));
            $ordercustomer->startdate=$request->input('startdate');
			$ordercustomer->dateship=$request->input('dateship');
            $ordercustomer->employeeID_recv=$request->input('employeeID_recv');
			
			//$ordersew = new Ordersew;
			//$ordersew->Total = $request->input('Total');

			if (Ordercustomer::where('OrderID', '=', $request->input('OrderID'))->first()) {
				echo "OrderID exist.";
			}else{	
				if (Customer::where('customerID', '=', $ordercustomer->idcustomer=$request->input('idcustomer'))->first()) {
					//if(Customer::where('nameCus', '=', $ordercustomer->Fname=$request->input('Fname'))->first()) {
						if(Employee::where('employeeID', '=', $ordercustomer->employeeID_recv=$request->input('employeeID_recv'))->first()) {
							$ordercustomer->save();
							echo "Add Success!!";
						}else{
							echo "Employee not exist.";
						}
					// }else{
					// 	echo "Name of Customer not exist.";
					// }
				}
				else{
					echo "Customer ID not exist.";
				}
			}
			echo"<form action=\"/ordercustomers/page/$page\">
			<input type=\"submit\" value=\"Back To Ordercustomer\">
			</form>";
		}
		
		public function delete($id,$page)
		{
			$ordercustomer = Ordercustomer::where('OrderID', '=',$id);
			$ordercustomer->delete();

			if(Ordercloth::where('OrderID', '=', $id )->first()){
				$oc = Ordercloth::where('OrderID', '=', $id )->get();
				foreach($oc as $orc){
					$orc->delete();
				}
			}
			if(Ordercut::where('OrderID', '=', $id )->first()){
				$oct = Ordercut::where('OrderID', '=', $id )->get();
				foreach($oct as $orct){
					$orct->delete();
				}
			}
			if(Ordersew::where('OrderID', '=', $id )->first()){
				$ocs = Ordersew::where('OrderID', '=', $id )->get();
				foreach($ocs as $orcs){
					$orcs->delete();
				}
			}
			
			echo "Delete Success!!";
			echo"<form action=\"/ordercustomers/page/$page\">
			<input type=\"submit\" value=\"Back To Ordercustomer\">
			</form>";
		}
		
		public function editsave(Request $request, $id,$page)
		{
			$ordercustomer = Ordercustomer::findOrFail($id);
            $ordercustomer->Detail=$request->input('Detail');
            $ordercustomer->Total=$request->input('Total');
			$ordercustomer->Price=$request->input('Price');
            $ordercustomer->startdate=$request->input('startdate');
            $ordercustomer->dateship=$request->input('dateship');
			$ordercustomer->typeproduct=$request->input('typeproduct');
			
			$ordercustomer->linetotal=($request->input('Total')*$request->input('Price'));

            $ordercustomer->color_cloth=$request->input('color_cloth');
            $ordercustomer->employeeID_recv=$request->input('employeeID_recv');
            $ordercustomer->size=$request->input('size');
            //$ordercustomer->Tel=$request->input('Tel');
			if(Employee::where('employeeID', '=', $ordercustomer->employeeID_recv=$request->input('employeeID_recv'))->first()) {
				$ordercustomer->save();
				echo "Edit Success!!";
			}else{
				echo "Employee not exist.";
			}
			
			echo"<form action=\"/ordercustomers/page/$page\">
			<input type=\"submit\" value=\"Back To Ordercustomer\">
			</form>";
		}

		public function linktocus($id,$page){
			$cus = Customer::findOrfail($id);
			return view('dataCus')->with('customer',$cus)->with('id',$id)->with('page',$page);
		}
	}