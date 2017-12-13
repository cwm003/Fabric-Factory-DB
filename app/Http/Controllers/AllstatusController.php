<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
	use Illuminate\Pagination\LengthAwarePaginator;
    use App\Ordercloth;
    use App\Ordercut;
    use App\Ordersew;

	class AllstatusController extends Controller
	{
        
        public function allstatusformpage($page)
		{	
            #$ordercloths = Ordercloth::all();
			$ordercloths = DB::table('ordercloths')->paginate(3);
            foreach($ordercloths as $ordercloth ){
				$id = $ordercloth->OrderID;
				$ordercuts = Ordercut::where('OrderID','=',$id)->first();
				$ordercut = $ordercuts->status;
				$ordersews = Ordersew::where('OrderID','=',$id)->first();
				$ordersew = $ordersews->status;
				
				if($ordercloth->status == 0){
                    $ordercloth->status  = "Not yet";
                }else{
                    $ordercloth->status  = "Done";
                }
				
				if($ordercut == 0){
                    $ordercloth->folding  = "Not yet";
                }else{
                    $ordercloth->folding  = "Done";
                }
				
				if($ordersew == 0){
                    $ordercloth->unit_folding  = "Not yet";
                }else{
                    $ordercloth->unit_folding  = "Done";
                }
            }
            return view('allstatusForm')->with('statusordercloths',$ordercloths)->with('page',$page);	
		}
        
       
    }
?>