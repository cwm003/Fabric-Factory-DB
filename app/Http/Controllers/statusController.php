<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Ordercloth;
    use App\Ordercut;
    use App\Ordersew;
    use App\Ordercustomer;
    use App\Customer;
    use App\Employee;
    
	class statusController extends Controller
	{
        public function formpage()
		{		
			return view('statusForm');	
        }
        public function result(Request $request)
		{	
            $id = $request->input('id');
            $occ = "None";
            $ocll = "None";
            $oss = "None";
            
                        if($ids = Ordercustomer::where('OrderID','=',$id)->first()){
                            if($ocl = Ordercloth::where('OrderID','=',$id)->first()){
                                if($ocl->status == 0){
                                    $ocll  = "Not yet";
                                }else{
                                    $ocll  = "Done";
                                }
                            }
                            if($oc = Ordercut::where('OrderID','=',$id)->first()){
                                if($oc->status == 0){
                                    $occ  = "Not yet";
                                }else{
                                    $occ  = "Done";
                                }
                            }
                            if($os = Ordersew::where('OrderID','=',$id)->first()){
                                if($os->status == 0){
                                    $oss  = "Not yet";
                                }else{
                                    $oss  = "Done";
                                }
                            }
                            $ids = Ordercustomer::where('OrderID','=',$id)->value("OrderID");
                        }else{
                            $ids = "Not found";
                        }
                        if($oss == "Done" and $occ == "Done" and $ocll == "Done"){
                            $op = "Success, You can recieve at Delivery date, thanks you.";
                           
                        }else if($oss == "Not yet" || $occ == "Not yet" || $ocll == "Not yet"){
                            $op = "Please wait.";
                        }else{
                            $op = "Not Found";
                        }
                        return view('statuscheckForm')->with('statusordercloth',$ocll)
                        ->with('statusordercut',$occ)->with('statusordersew',$oss)
                        ->with('id',$ids)->with('statusorder',$op);		
                    
            }
    }
        
    
?>