<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;
use Carbon;
use DB;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $images = DB::table('message_synch_t1')->select('conversation_id','user_id','mobile_no','image_url','created_at')->where('is_approved',1)->whereRaw("created_at >= DATE_SUB(NOW(), INTERVAL 23 HOUR)")->get()->toArray();
        // $imageData = $imageKey = [];
        // if(sizeof($images)>0){
        //     $lastImageTime = strtotime($images[0]->created_at);
        //     $lastImageTime = date('H', $lastImageTime);
        //     $before6HourTime = $lastImageTime-7; 
        //     foreach ($images as $value) {
        //         $hour = strtotime($value->created_at);
        //         $hour = date('H', $hour); 
        //         if( ($lastImageTime<=$hour) && ($lastImageTime-1>=$hour) ){
        //              $imageData['hour-'.$hour][] = $value;
        //         }else{
        //             $lastImageTime--;
        //             $imageData['hour-'.$hour][] = $value;
        //         }
        //        if($lastImageTime==$before6HourTime)
        //             break;
        //     }
        //     $imageKey = array_keys($imageData); 
        // }
        return view('front_end.pages.download');//->with('imageData',$imageData)->with('imageKey',$imageKey);
    }    
    
    public function ApiCall(Request $request)
    { 
        if($request->has('from_hour') && $request->has('to_hour')){
            $fromHour = $request->from_hour;
            $toHour = $request->to_hour;
            $fromData = date('Y-m-d')." $fromHour:00:00"; 
            $toData = date('Y-m-d')." $toHour:59:59";   
        }
        
        if(isset($fromData) && isset($toData)){
        $images = DB::table('message_synch_t1')->select('conversation_id','user_id','mobile_no','image_url','created_at')->where('is_approved',1)->whereBetween('created_at', [$fromData, $toData])->get()->toArray(); 
        }else{
        $images = DB::table('message_synch_t1')->select('conversation_id','user_id','mobile_no','image_url','created_at')->where('is_approved',1)->whereRaw("created_at >= DATE_SUB(NOW(), INTERVAL 23 HOUR)")->get()->toArray(); 
        } 
        return $images;
    }

    public function winnerApi(Request $request)
    {
        if($request->has('from_hour') && $request->has('to_hour')){
            $fromHour = $request->from_hour;
            $toHour = $request->to_hour;
            $fromData = date('Y-m-d')." $fromHour:00:00"; 
            $toData = date('Y-m-d')." $toHour:59:59";   
        }
        
        if(isset($fromData) && isset($toData)){
        $images = DB::table('message_synch_t1')->select('conversation_id','user_id','mobile_no','image_url','created_at')->where('is_winner',1)->whereBetween('created_at', [$fromData, $toData])->get()->toArray(); 
        }else{
        $images = DB::table('message_synch_t1')->select('conversation_id','user_id','mobile_no','image_url','created_at')->where('is_winner',1)->whereRaw("created_at >= DATE_SUB(NOW(), INTERVAL 23 HOUR)")->get()->toArray(); 
        } 
        return $images;
    }

    // share view
    public function share()
    {
        return view('front_end.pages.share');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
