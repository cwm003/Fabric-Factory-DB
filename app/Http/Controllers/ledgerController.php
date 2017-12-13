<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Ordercloths;
	use App\Ordercloth;
    use App\Ordercustomer;
    use Illuminate\Support\Facades\DB;
    use App\Factor;
    #use config\Charts;
	
    class ledgerController extends Controller
    {
        public function formpage($page){
            //$dt = Carbon::now();
            // $result = DB::table('ordercustomers')
            //                ->orderByRaw('dateship ASC')
            //                ->get();
          
            $total = DB::table('ordercustomers')
            ->select(DB::raw('SUM(linetotal) sum'),DB::raw('MONTH(startdate) month'),DB::raw('YEAR(startdate) year'))
            ->groupBy('month','year')
            ->get();
        
            
                // $orderclo = DB::table('ordercloths')
                //             ->orderByRaw('startorder ASC')
                //             ->get();
                // foreach($orderclo as $oc){
                //     $fac = Factor::findOrFail($oc->factory_id);
                //     $oc->employeeID_recv = $fac->account;
                // }

            
            $expense = DB::table('ordercloths')
            ->select(DB::raw('SUM(linetotal) sum'),DB::raw('MONTH(startorder) month'),DB::raw('YEAR(startorder) year'))
            ->groupBy('month','year')
            ->get();

            
            
            return view('ledgerForm')
            ->with('total',$total)
            ->with('expense',$expense)
            ->with('page',$page)
            ;
            
            
            //->with('orc',$orc)->with('result',$result)->with('orderclo',$orderclo)



        //     $chart = Charts::create('line', 'highcharts')
        //     ->setView('custom.line.chart.view') // Use this if you want to use your own template
        //     ->setTitle('My nice chart')
        //     ->setLabels(['First', 'Second', 'Third'])
        //     ->setValues([5,10,20])
        //     ->setDimensions(1000,500)
        //     ->setResponsive(false);
        // return view('test', ['chart' => $chart]);
        }

        // public function chart()
        // {
        //   $result = DB::table('ordercustomers')
        //               ->where('linetotal','=','Infosys')
        //               ->orderBy('dateship', 'ASC')
        //               ->get();
        //   return response()->json($result);
        // }
       

        
    }

    // $orc = Ordercloth::all();
            // foreach($orc as $oc){
            //     $oc->order_clothid = $expense;
            // }
           
            // ->whereDate('startorder','>=', )
            //->having(MONTH('startorder'));

            //$monthEx =  DB::table('ordercloths')