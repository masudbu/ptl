<?php

namespace App\Http\Controllers;
use App\Imports\UserImport;
use App\Exports\UsersExport;
use App\Models\User;
use App\Models\Production;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use PDF;
use DB;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //get monthly yarn dyeing production
       $monthlyYDProduction = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(yarndyeing) as yarndyeingMonthTotal, SUM(yarndyeing_outparty) as yarndyeing_outpartyMonthTotal, SUM(yd_outparty_mm) as dyedYarnMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

            

        //get monthly AOP Delivery Outparty
        $monthlyAOPDelivery = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(printing_woven_mm) as printingWovenMonthTotal,SUM(printing_knit_mm) as AopKnitMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

        //get monthly Woven Fabric Delivery
        $monthlyFabricDelivery = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(fabric_delivery_mm) as fabricMonthTotal, SUM(fabric_delivery_mm_others) as fabricMonthTotalOthers,SUM(fabric_delivery_mm_commission) as fabricMonthTotalCommission,SUM(printing_woven_mm) as printingWovenMonthTotal"),
            )
            ->whereYear('production_date',  date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

        //get monthly greige fabric inspection
        $monthlyGreigeInspection = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(greige_inspection) as greigeInspectionMonthTotal, SUM(greige_inspection_outparty) as greigeOutpartyMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

             //get monthly Weaving Production
        $monthlyWeaving = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(warping) as warpingMonthTotal, SUM(sizing) as sizingMonthTotal, SUM(weaving) as weavingMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

        //get monthly Pretreatment Production
        $monthlyPretreatment = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(pretreatment) as pretreatmentMonthTotal, SUM(pretreatment_others) as pretreatmentOthersgMonthTotal, SUM(mercerize) as mercerizeMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

        //get monthly Solid Dyeing Production
        $monthlySolidDyeing = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(cpb) as cpbMonthTotal, SUM(cpb_others) as cpbOthersgMonthTotal, SUM(thermosol) as thermosolMonthTotal,SUM(thermosol_others) as thermosolOthersMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

        //get monthly CSR Production
        $monthlySanforizing = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(sanforizing) as sanforizingMonthTotal, SUM(sanforizing_others) as sanforizingOthersgMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

         //get monthly SoftFlow Production
        $monthlySoftFlow = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(softflow_woven) as softflow_wovenMonthTotal, SUM(softflow_woven_others) as softflow_wovenOthersgMonthTotal,SUM(softflow_knit) as softflow_knitMonthTotal, SUM(softflow_knit_others) as softflow_knitOthersgMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

          //get monthly AOP Production
        $monthlyAOP = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(aop_flatbed_print_knit) as aop_flatbed_print_knitMonthTotal, SUM(aop_flatbed_print_woven) as aop_flatbed_print_wovenMonthTotal,SUM(aop_flatbed_print_outsite_woven) as aop_flatbed_print_outsite_wovenMonthTotal, SUM(aop_rotary_print_knit) as aop_rotary_print_knitMonthTotal,SUM(aop_rotary_print_woven) as aop_rotary_print_wovenMonthTotal,SUM(aop_rotary_print_outsite_woven) as aop_rotary_print_outsite_wovenMonthTotal,SUM(aop_digital_print_knit) as aop_digital_print_knitMonthTotal,SUM(aop_digital_print_woven) as aop_digital_print_wovenMonthTotal,SUM(aop_digital_print_outsite_woven) as aop_digital_print_outsite_wovenMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();

        //get monthly Final Ins Production
        $monthlyFinalInspection = Production::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(production_date) as month_name, SUM(final_inspection) as finalInspectionMonthTotal, SUM(final_inspection_others) as finaltOthersgMonthTotal"),
            )
            ->whereYear('production_date', date('Y'))
            ->groupBy('month_name')
            ->orderBy('production_date','ASC')
            ->get();
        //dd($items);
        //Carbon::now()->month
      
        $productionShortReview = Production::select('*')->orderBy('production_date','desc')->get()->first();
        return view('dashboard.home', compact('productionShortReview','monthlyYDProduction','monthlyAOPDelivery','monthlyFabricDelivery','monthlyGreigeInspection','monthlyWeaving','monthlyPretreatment','monthlyFinalInspection','monthlySolidDyeing','monthlySanforizing','monthlySoftFlow','monthlyAOP'));
    }
    public function dailyProductionEntryForm(){
        return view('dashboard.dailyProductionEntryForm');
    }

    public function dailyProductionEntry(Request $request){
        $request->validate([
            'yarndyeing'=>['required','string','max:7'],
            'yarndyeing_outparty'=>['required','string','max:7'],
            'warping'=>['required','string','max:6'],
            'sizing'=>['required','string','max:6'],
        ]);
        $productionInfo = array();
        $productionInfo['user_id']=auth()->user()->id;
        $productionInfo['production_date']=$request->get('production_date');
        $productionInfo['yarndyeing']=$request->get('yarndyeing');
        $productionInfo['yarndyeing_outparty']=$request->get('yarndyeing_outparty');
        $productionInfo['warping']=$request->get('warping');
        $productionInfo['sizing']=$request->get('sizing');
        $productionInfo['weaving']=$request->get('weaving');
        $productionInfo['weaving_outsite']=$request->get('weaving_outsite');
        $productionInfo['pretreatment']=$request->get('pretreatment');
        $productionInfo['pretreatment_others']=$request->get('pretreatment_others');
        $productionInfo['bleaching']=$request->get('bleaching');
        $productionInfo['bleaching_others']=$request->get('bleaching_others');
        $productionInfo['mercerize']=$request->get('mercerize');
        $productionInfo['mercerize_others']=$request->get('mercerize_others');
        $productionInfo['padsteam_pretreatment']=$request->get('padsteam_pretreatment');
        $productionInfo['padsteam_pretreatment_others']=$request->get('padsteam_pretreatment_others');

        $productionInfo['thermosol']=$request->get('thermosol');
        $productionInfo['thermosol_others']=$request->get('thermosol_others');
        $productionInfo['cpb']=$request->get('cpb');
        $productionInfo['cpb_others']=$request->get('cpb_others');
        $productionInfo['custic_padding']=$request->get('custic_padding');
        $productionInfo['yd_correction']=$request->get('yd_correction');
        $productionInfo['jigger']=$request->get('jigger');
        $productionInfo['jigger_others']=$request->get('jigger_others');
        $productionInfo['padsteam_sd']=$request->get('padsteam_sd');
        $productionInfo['padsteam_sd_others']=$request->get('padsteam_sd_others');
        $productionInfo['washing3_goller_sd']=$request->get('washing3_goller_sd');
        $productionInfo['washing3_goller_sd_others']=$request->get('washing3_goller_sd_others');
        $productionInfo['softflow_woven']=$request->get('softflow_woven');
        $productionInfo['softflow_woven_others']=$request->get('softflow_woven_others');
        $productionInfo['softflow_knit']=$request->get('softflow_knit');
        $productionInfo['softflow_knit_others']=$request->get('softflow_knit_others');

        $productionInfo['softflow_knit_delivery_grey']=$request->get('softflow_knit_delivery_grey');
        $productionInfo['softflow_knit_delivery_finish']=$request->get('softflow_knit_delivery_finish');

        $productionInfo['aop_rotary_print_knit']=$request->get('aop_rotary_print_knit');        
        $productionInfo['aop_rotary_print_woven']=$request->get('aop_rotary_print_woven');        
        $productionInfo['aop_rotary_print_outsite_woven']=$request->get('aop_rotary_print_outsite_woven');        
        $productionInfo['aop_flatbed_print_knit']=$request->get('aop_flatbed_print_knit');        
        $productionInfo['aop_flatbed_print_woven']=$request->get('aop_flatbed_print_woven');        
        $productionInfo['aop_flatbed_print_outsite_woven']=$request->get('aop_flatbed_print_outsite_woven');        
        $productionInfo['aop_digital_print_knit']=$request->get('aop_digital_print_knit');        
        $productionInfo['aop_digital_print_woven']=$request->get('aop_digital_print_woven');        
        $productionInfo['aop_digital_print_outsite_woven']=$request->get('aop_digital_print_outsite_woven');

        $productionInfo['aop_rotary_baby_knit']=$request->get('aop_rotary_baby_knit');           
        $productionInfo['aop_rotary_baby_woven']=$request->get('aop_rotary_baby_woven');           

        $productionInfo['final_inspection']=$request->get('final_inspection');
        $productionInfo['final_inspection_others']=$request->get('final_inspection_others');
        $productionInfo['greige_inspection']=$request->get('greige_inspection');
        $productionInfo['greige_inspection_outparty']=$request->get('greige_inspection_outparty');
        $productionInfo['yd_outparty_mm']=$request->get('yd_outparty_mm');
        $productionInfo['yd_outparty_mm_total_month']=$request->get('yd_outparty_mm_total_month');
        $productionInfo['printing_knit_mm']=$request->get('printing_knit_mm');
        $productionInfo['printing_knit_mm_total_month']=$request->get('printing_knit_mm_total_month');
        $productionInfo['printing_woven_mm']=$request->get('printing_woven_mm');
        $productionInfo['printing_woven_mm_total_month']=$request->get('printing_woven_mm_total_month');
        $productionInfo['fabric_delivery_mm']=$request->get('fabric_delivery_mm');
        $productionInfo['fabric_delivery_mm_total_month']=$request->get('fabric_delivery_mm_total_month');


            Production::insert($productionInfo);
            return redirect()->back();
    }
    public function dailyProductionView(){
        $dailyProductionView = Production::select('*')->orderBy("production_date", "desc")->get();
        return view('dashboard.dailyProductionView',compact('dailyProductionView'));
    }

    public function production_advance_search(Request $request){
      /*$startDate = Carbon::createFromFormat('m-d-Y', $request->get('start_date'));
        $endDate = Carbon::createFromFormat('m-d-Y', $request->get('end_date'));*/
        $request->validate([
            'start_date'=>['required'],
            'end_date'=>['required'],
        ]);

        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');

       if($startDate !== null && $endDate !==null){
        $productionInfo_sarch = Production::select('*')
            ->whereBetween('production_date', [$startDate, $endDate])
            ->orderBy('production_date','desc')
            ->get();
        return view('dashboard.production_search_view',compact('productionInfo_sarch'));
        }

    }

    public function show_production_slip(Request $request){
       $pro_id = $request->get('id');
       //dd($pro_id);
       if(isset($pro_id) && $pro_id !==null){
        $productionSlip = Production::select('*')->where('id', $pro_id)->get()->first();
        $data = [
            'title' => 'Daily Production PDF',
            'date' => date('m/d/Y'),
            'productionSlip' => $productionSlip
        ]; 
        
        $pdf = PDF::loadView('dashboard.pdf.productionSlipPdf', $data)->setPaper('legal', 'landscape');
     
        //return $pdf->download('productionSlip.pdf');
        return $pdf->stream('productionSlip.pdf');
        return view('dashboard.productionSlip',compact('productionSlip'));
        }
        else{
            
            return redirect()->route('dailyProductionList');


        }
    }
    public function show_production_view(Request $request){
        $pro_id = $request->get('id');
        if(isset($pro_id) && $pro_id !==null){
            $productionView = Production::select('*')->where('id', $pro_id)->get()->first();
            return view('dashboard.productionView',compact('productionView'));
        }
        else{
            return redirect()->route('dailyProductionList');
        }
    }

    // Show production for edit to update form

    public function showProduction(Request $request){
        $pro_id = $request->get('id');
        //dd($pro_id);
        if(is_null($pro_id)){
            return redirect()->route('dailyProductionList');
        }
        else{
            $productionShow = Production::select('*')->where('id', $pro_id)->get()->first();
            return view('dashboard.productionShow',compact('productionShow'));
        }
    }
    public function updateProduction(Request $request){
        //$pro_id = $request->get('hidden_id');
        $production = Production::find($request->get('hidden_id'));
        $production->yarndyeing = $request->get('yarndyeing');
        $production->yarndyeing_outparty=$request->get('yarndyeing_outparty');
        $production->warping = $request->get('warping');
        $production->sizing = $request->get('sizing');
        $production->weaving = $request->get('weaving');
        $production->weaving_outsite = $request->get('weaving_outsite');
        $production->pretreatment = $request->get('pretreatment');
        $production->pretreatment_others = $request->get('pretreatment_others');
        $production->bleaching = $request->get('bleaching');
        $production->bleaching_others = $request->get('bleaching_others');
        $production->mercerize = $request->get('mercerize');
        $production->mercerize_others = $request->get('mercerize_others');
        $production->padsteam_pretreatment = $request->get('padsteam_pretreatment');
        $production->padsteam_pretreatment_others = $request->get('padsteam_pretreatment_others');
        
        $production->thermosol = $request->get('thermosol');
        $production->thermosol_others = $request->get('thermosol_others');
        $production->cpb = $request->get('cpb');
        $production->cpb_others = $request->get('cpb_others');
        $production->custic_padding = $request->get('custic_padding');
        $production->custic_padding_others = $request->get('custic_padding_others');
        $production->yd_correction = $request->get('yd_correction');
        $production->jigger = $request->get('jigger');
        $production->jigger_others = $request->get('jigger_others');
        $production->padsteam_sd = $request->get('padsteam_sd');
        $production->padsteam_sd_others = $request->get('padsteam_sd_others');
        $production->washing3_goller_sd = $request->get('washing3_goller_sd');
        $production->washing3_goller_sd_others = $request->get('washing3_goller_sd_others');
        $production->softflow_woven = $request->get('softflow_woven');
        $production->softflow_woven_others = $request->get('softflow_woven_others');
        $production->softflow_knit = $request->get('softflow_knit');
        $production->softflow_knit_others = $request->get('softflow_knit_others');


        //AOP Part

        $production->aop_rotary_print_knit = $request->get('aop_rotary_print_knit');        
        $production->aop_rotary_print_woven = $request->get('aop_rotary_print_woven');        
        $production->aop_rotary_print_outsite_woven = $request->get('aop_rotary_print_outsite_woven');        
        $production->aop_flatbed_print_knit = $request->get('aop_flatbed_print_knit');        
        $production->aop_flatbed_print_woven = $request->get('aop_flatbed_print_woven');        
        $production->aop_flatbed_print_outsite_woven = $request->get('aop_flatbed_print_outsite_woven');        
        $production->aop_digital_print_knit = $request->get('aop_digital_print_knit');        
        $production->aop_digital_print_woven = $request->get('aop_digital_print_woven');        
        $production->aop_digital_print_outsite_woven = $request->get('aop_digital_print_outsite_woven');

        $production->aop_rotary_baby_knit = $request->get('aop_rotary_baby_knit');           
        $production->aop_rotary_baby_woven = $request->get('aop_rotary_baby_woven'); 

        //This part of Finishing
        $production->stenter = $request->get('stenter');
        $production->stenter_others = $request->get('stenter_others');
        $production->sanforizing = $request->get('sanforizing');
        $production->sanforizing_others = $request->get('sanforizing_others');
        $production->peach = $request->get('peach');
        $production->peach_others = $request->get('peach_others');
        $production->airo = $request->get('airo');



        $production->final_inspection = $request->get('final_inspection');
        $production->final_inspection_others = $request->get('final_inspection_others');
        $production->greige_inspection = $request->get('greige_inspection');
        $production->greige_inspection_outparty = $request->get('greige_inspection_outparty');
        $production->yd_outparty_mm = $request->get('yd_outparty_mm');
        $production->yd_outparty_mm_total_month = $request->get('yd_outparty_mm_total_month');
        $production->printing_knit_mm = $request->get('printing_knit_mm');
        $production->printing_knit_mm_total_month = $request->get('printing_knit_mm_total_month');
        $production->printing_woven_mm = $request->get('printing_woven_mm');
        $production->printing_woven_mm_total_month = $request->get('printing_woven_mm_total_month');

        //SoftFlow Delivery
        $production->softflow_knit_delivery_grey = $request->get('softflow_knit_delivery_grey');
        $production->softflow_knit_delivery_finish = $request->get('softflow_knit_delivery_finish');

        $production->fabric_delivery_mm = $request->get('fabric_delivery_mm');
        $production->fabric_delivery_mm_others = $request->get('fabric_delivery_mm_others');
        $production->fabric_delivery_mm_commission = $request->get('fabric_delivery_mm_commission');
        $production->fabric_delivery_mm_total_month = $request->get('fabric_delivery_mm_total_month');
        $production->updated_by = auth()->user()->name;

      
        $production->save();
        return redirect()->route('dailyProductionList');
    }

    //for daily production view date wise
    public function daily_production_review(){

        $productionReview = Production::select('*')->orderBy("production_date", "desc")->get()->first();
        return view('dashboard.dailyProductionReview', compact('productionReview'));

    }

    public function next_production_record(Request $request){
        $pro_id = $request->get('id');
        $latestId = Production::latest()->first()->id;
        //dd($latestId);
        if($pro_id == $latestId){
            $productionReview = Production::select('*')->get()->last();
            return view('dashboard.dailyProductionReview', compact('productionReview'));
        }
        else{

            $productionReview = Production::select('*')->where('production_date', '>', $pro_id)->get()->first();
            return view('dashboard.dailyProductionReview',compact('productionReview'));
            
        }
    }

    public function previous_production_record(Request $request){

        $pro_id = $request->get('id');
        $firstId = Production::first()->id;
        //dd($pro_id);
        if($pro_id==$firstId){
            $productionReview = Production::select('*')->get()->last();
            return view('dashboard.dailyProductionReview', compact('productionReview'));
        }
        else{

            $productionReview = Production::select('*')->where('production_date', '<', $pro_id)->orderBy('production_date','desc')->first();
            return view('dashboard.dailyProductionReview',compact('productionReview'));

        }
    }
    public function production_review_search(Request $request){

        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');
        //$productionReviewSearch=[];
        $getTotalProduction['yarndyeing'] = Production::whereBetween('production_date', [$startDate, $endDate])->sum('yarndyeing');
        $getTotalProduction['warping'] = Production::whereBetween('production_date', [$startDate, $endDate])->sum('warping');
        $getTotalProduction['sizing'] = Production::whereBetween('production_date', [$startDate, $endDate])->sum('sizing');
        $getTotalProduction['weaving'] = Production::whereBetween('production_date', [$startDate, $endDate])->sum('weaving');
        $getTotalProduction['pretreatment'] = Production::whereBetween('production_date', [$startDate, $endDate])->sum('pretreatment');
        $getTotalProduction['thermosol'] = Production::whereBetween('production_date', [$startDate, $endDate])->sum('thermosol');
        $getTotalProduction['cpb'] = Production::whereBetween('production_date', [$startDate, $endDate])->sum('cpb');

        $totalProduction = array(
            'startDate'=>$startDate,
            'endDate'=>$endDate,
            'yarndyeing'=>$getTotalProduction['yarndyeing'],
            'warping'=>$getTotalProduction['warping'],
            'sizing'=>$getTotalProduction['sizing'],
            'weaving'=>$getTotalProduction['weaving'],
            'pretreatment'=>$getTotalProduction['pretreatment'],
            'thermosol'=>$getTotalProduction['thermosol'],
            'cpb'=>$getTotalProduction['cpb'],
        );

         return view('dashboard.dailyProductionReviewSearch',$totalProduction);
    }
}