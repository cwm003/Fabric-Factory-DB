<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Ordercloths;
	use App\Ordercloth;
	use App\Ordercustomer;
	use App\Customer;
	use App\Factor;
	
	class OrderclothController extends Controller
	{
		public function formpage($page){
			$ordercloth = Ordercloth::all();
			foreach($ordercloth as $ordercth)
			{
				$ordercth->linetotal = $ordercth->folding * $ordercth->unit_folding;
				$status = $ordercth->status;
				if($status == 0){
					$newStatus  = "Not Yet";
				}else{
					$newStatus  = "Done";
				}
				$ordercth->status = $newStatus;
				//$fac = Factor::findOrFail($ordercth->factory_id);
				//$ordercth->factory_id = $fac->name_factory;


			}
			return view('orderclothForm')->with('ordercloths',$ordercloth)->with('page',$page);
		}
		
		public function insertpage($page)
		{
			
			return view('insertFormOrderCloth')->with('page',$page);
		}
		
		public function editpage($id,$page)
		{
			$ordercloth = Ordercloth::findOrFail($id);
			return view('editFormOrderCloth')->with('id',$id)->with('ordercloth',$ordercloth)->with('page',$page);
		}

		public function editstatus(Request $request, $id,$page)
		{
			$ordercloth = Ordercloth::findOrFail($id);
			$ordercloth->status=$request->input('status');
			if ($request->input('status') == ''){
				echo "Please select!!!";
				echo"<form action=\"/ordercloths/page/$page\">
				<input type=\"submit\" value=\"Back To Order Cloths\">
				</form>";
			}else{
				$ordercloth->save();
				echo "Edit Complete!!";
				echo"<form action=\"/ordercloths/page/$page\">
				<input type=\"submit\" value=\"Back To Order Cloths\">
				</form>";
			}
			
		}

		
		public function save(Request $request,$page)
		{
			$ordercloth = new Ordercloth;
			$ordercloth->factory_id=$request->input('factory_id');
            $ordercloth->startorder=$request->input('startorder');
			$ordercloth->weight_cloth=$request->input('weight_cloth');

			$oc = Ordercustomer::findOrFail($request->input('OrderID'));
			$ordercloth->type_cloth=$oc->type_cloth;
			$ordercloth->color_cloth=$oc->color_cloth;
			$ordercloth->Total = $oc->Total;
            $ordercloth->date_recv=$request->input('date_recv');
            $ordercloth->width_cloth=$request->input('width_cloth');
            $ordercloth->folding=$request->input('folding');
            $ordercloth->unit_folding=$request->input('unit_folding');
			$ordercloth->order_clothid=$request->input('order_clothid');
			$ordercloth->OrderID=$request->input('OrderID');
			$ordercloth->status=$request->input('status');
			$ordercloth->date_tranfer=$request->input('date_tranfer');
			$ordercloth->linetotal=($request->input('folding'))*($request->input('unit_folding'));
			
			// $ordercloth->color_cloth=$request->input('color_cloth'); 
			// หยกเพิ่มใน migrate แต่เราจะดึงจาก ordercus
			
			// $factory = new Factor;
			// $factory->name_factory=$request->input('namefactory');
			// $factory->factory_id=$request->input('factory_id');
			// $factory->tel=$request->input('tel_factory');
			// $factory->address=$request->input('address_factory');
			// $factory->account=$request->input('account_factory');

			if (Ordercloth::where('order_clothid', '=', $request->input('order_clothid'))->first()) {
				echo "orderCloth id exits.";
			}else{
				if (Ordercustomer::where('OrderID', '=', $ordercloth->OrderID=$request->input('OrderID'))->first()) {
					$ordercloth->save();
					#$factory->save();
					echo "Add Success!!";
				}else{
					echo "OrderID exit.";
			}

			echo"<form action=\"/ordercloths/page/$page\">
			<input type=\"submit\" value=\"Back To Ordercloth\">
			</form>";
			}
		}
		
		public function delete($id,$page)
		{
			$ordercloth = Ordercloth::findOrFail($id);
			$ordercloth->delete();
			echo "Delete Success!!";
			echo"<form action=\"/ordercloths/page/$page\">
			<input type=\"submit\" value=\"Back To Ordercloth\">
			</form>";
		}
		
		public function editsave(Request $request, $id,$page)
		{
			$ordercloth = new Ordercloth;
			// $ordercloth->factory_id=$request->input('factory_id');
            $ordercloth->startorder=$request->input('startorder');
            $ordercloth->weight_cloth=$request->input('weight_cloth');
            // $ordercloth->type_cloth=$request->input('type_cloth');
            $ordercloth->date_recv=$request->input('date_recv');
            $ordercloth->width_cloth=$request->input('width_cloth');
            $ordercloth->folding=$request->input('folding');
            $ordercloth->unit_folding=$request->input('unit_folding');
			// $ordercloth->order_clothid=$request->input('order_clothid');
			// $ordercloth->OrderID=$request->input('OrderID');
			$ordercloth->status=$request->input('status');
			$ordercloth->date_tranfer=$request->input('date_tranfer');
			if (Ordercloth::where('order_clothid', '=', $request->input('order_clothid'))->first()) {
				echo "orderCloth id exits.";
			}else{
				$ordercloth->save();
				echo "Edit Success!!";
			}
			echo"<form action=\"/ordercloths/page/$page\">
			<input type=\"submit\" value=\"Back To Ordercloth\">
			</form>";
		}

		public function linktoordercus($id,$page){
			$ordercustomers = Ordercustomer::findOrFail($id);
            #$ordercustomers->linetotal = ($orordercustomers->Price) * ($ordercustomers->Total);
			return view('dataCloth')->with('ordercustomer',$ordercustomers)->with('id',$id)->with('page',$page);
		}

		public function linktocus($id){
			$cus = Customer::findOrfail($id);
			return view('dataClothFac')->with('customers',$cus);
	}

}