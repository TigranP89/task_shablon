<?php

namespace App\Http\Controllers\API\V1;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Information;

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
//    public function index()
//    {
//        return view('api.information');
//    }

    public function informationRequesr(Request $request)
    {
//        dd($request->input());
//        dd($request->input('data'));
//        dd($_SERVER['REQUEST_METHOD']);
//        $data = json_encode();

//        $data = $request->input();
//        $item = Information::create($data);


//        $data = new Information();
//        $data->data =$request->data;
//        $data->save;
//        dd($data);


        $input = [
            'data'=>$request->input()
        ];
        $item = Information::create($input);
        $size = memory_get_usage();

//        dd(memory_get_usage($this->convert(true)));
//        dd($this->print_mem());
        dd($item['created_at']);

    }


    public function convert($size)
    {
        $unit=array('b','kb','mb','gb','tb','pb');
        return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
    }

//    public function print_mem()
//    {
//        /* Currently used memory */
//        $mem_usage = memory_get_usage();
//
//        /* Peak memory usage */
//        $mem_peak = memory_get_peak_usage();
//
//        return round($mem_usage / 1024);
//
//
////        echo 'The script is now using: <strong>' . round($mem_usage / 1024) . 'KB</strong> of memory.<br>';
////        echo 'Peak usage: <strong>' . round($mem_peak / 1024) . 'KB</strong> of memory.<br><br>';
//    }
}
