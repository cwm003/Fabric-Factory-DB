<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Factors;
	use App\Factor;
	use App\Ordercloth;
	
	class FactoryController extends Controller
	{

		public function formpage($page)
		{

			$factors = Factor::all();

			return view('factorForm')->with('factors',$factors)->with('page',$page);			
		}


		public function insertpage($page)
		{
			return view('insertFormFactory')->with('page',$page);
		}
		
		public function editpage($id,$page)
		{
			return view('editFormFactory')->with('id',$id)->with('page',$page);
		}

		public function save(Request $request,$page)
		{
			$factory = new Factor;
			$factory->name_factory=$request->input('name_factory');
			$factory->factory_id=$request->input('factory_id');
            $factory->tel=$request->input('tel');
            $factory->address=$request->input('address');
            $factory->account=$request->input('account');
			if (Factor::where('factory_id', '=', $request->input('factory_id'))->first()) {
				echo "Factory id exits.";
			}else{
				$factory->save();
				echo "Add Success!!";
				
			}
			
			echo"<form action=\"/factors/page/$page\">
			<input type=\"submit\" value=\"Back To Factory\">
			</form>";
		}
		
		public function delete($id,$page)
		{
			$factory = Factor::findOrFail($id);
			$factory->delete();
			
			if(Ordercloth::where('factory_id', '=', $id )->first()){
				$orcloth=Ordercloth::where('factory_id', '=', $id )->get();
				foreach($orcloth as $ocloth){
					$ocloth->factory_id = NULL;
					$ocloth->save();
				}	
				
				
				
			}

			// $orc=Ordercloth::where('factory_id', '=', $id );
			// foreach($orc as $oc){

			// }


			
			echo "Delete Success!!";
			echo"<form action=\"/factors/page/$page\">
			<input type=\"submit\" value=\"Back To Factory\">
			</form>";
		}
		
		public function editsave(Request $request, $id,$page)
		{
			$factory = Factor::findOrFail($id);
			$factory->name_factory=$request->input('name_factory');
			//$factory->factory_id=$request->input('factory_id');
            $factory->tel=$request->input('tel');
            $factory->address=$request->input('address');
            $factory->account=$request->input('account');
			// if (Factor::where('factory_id', '=', $request->input('factory_id'))->first()) {
			// 	echo "Factory id exits.";
			// }else{
			$factory->save();
			echo "Edit Success!!";	
			
		
			echo"<form action=\"/factors/page/$page\">
			<input type=\"submit\" value=\"Back To Factory\">
			</form>";
		}
	}