<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Customers;
	use App\Customer;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Pagination\LengthAwarePaginator;
	
	class CustomerController extends Controller
	{
		public function formpage($page)
		{
			$customer = DB::table('customers')->paginate(3);
			return view('customerForm')->with('customers',$customer)->with('page',$page);
			
		}

		public function index()
		{
			return view('insertFormCustomer');
		}
		
		public function insertpage($page)
		{
			return view('insertFormCustomer')->with('page',$page);
		}

		public function editpage($id,$page)
		{
			
			return view('editFormCustomer')->with('id',$id)->with('page',$page);
		}

		public function save(Request $request,$page)
		{
			$customer = new Customer;
			$customer->nameCus=$request->input('nameCus');
			$customer->customerID=$request->input('customerID');
			$customer->Address=$request->input('Address');
			$customer->tel=$request->input('tel');

			if (Customer::where('customerID', '=', $request->input('customerID'))->first()) {
				echo "Customer id exits.";
			}else{
				$customer->save();
				echo "Add Success!!";
			}

			echo"<form action=\"/customers\">
			<input type=\"submit\" value=\"Go To Customer\">
			</form>";
		}
		
		public function delete($id)
		{
			$customer = Customer::findOrFail($id);
			$customer->delete();
			echo "Delete Success!!";
			echo"<form action=\"/customers/page/$page\">
			<input type=\"submit\" value=\"Go To Customers\">
			</form>";
		}
		
		public function editsave(Request $request, $id,$page)
		{
			$customer = Customer::findOrFail($id);
			$customer->nameCus=$request->input('nameCus');
			//$customer->customerID=$request->input('customerID');
			$customer->Address=$request->input('Address');
			$customer->tel=$request->input('tel');
			if (Customer::where('customerID', '=', $request->input('customerID'))->first()) {
				echo "Customer id exits.";
			}else{
				$customer->save();
				echo "Edit Success!!";
			}

			
			echo"<form action=\"/customers/page/$page\">
			<input type=\"submit\" value=\"Go To Customers\">
			</form>";
		}
	}