<?php

namespace App\Http\Controllers\API\V1;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Carbon;

class InformationController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('api.information');
    }

    public function informationRequesr(Request $request)
    {
//        dd($_SERVER['REQUEST_METHOD']);

        $input = [
            'data'=>$request->all()
        ];
        $start = Carbon::now()->timestamp;
        $item = Information::create($input);
        $size = memory_get_usage();
        $time = $item->created_at->timestamp -  $start;

        return array("size"=>$size, "time"=>$time);
//        return response()->json([
//            'data' => array("size"=>$size, "time"=>$time),
//            'status'=>200 ,
//            'message'=>'New product was created.'
//        ]);
    }


    public function convert($size)
    {
        $unit=array('b','kb','mb','gb','tb','pb');
        return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
    }

}
