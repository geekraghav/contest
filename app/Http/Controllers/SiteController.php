<?php

namespace App\Http\Controllers;

use App\Site;
use DB;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request) {

            $param = $request->all();

            if (@$param['data'] == "winner" || @$param['data'] == "current" || @$param['data'] == 'timeslot') {

                if ($param['data'] == "winner") {
                    $images = DB::table('message_synch_t1')->select('conversation_id', 'user_id', 'mobile_no', 'image_url', 'created_at')->where('is_winner', 1)->get()->toArray();
                } else if ($param['data'] == "current") {
                    $images = DB::table('message_synch_t1')->select('conversation_id', 'user_id', 'mobile_no', 'image_url', 'created_at')->where('is_approved', 1)->get()->toArray();
                } else if ($param['data'] == "timeslot") {

                    $timeSlot = explode('-', $param['timing']);
                    $fromData = date('Y-m-d') . " $timeSlot[0]:00:00";
                    $toData = date('Y-m-d') . " $timeSlot[1]:59:59";

                    $images = DB::table('message_synch_t1')->select('conversation_id', 'user_id', 'mobile_no', 'image_url', 'created_at')->where('is_approved', 1)->whereBetween('created_at', [$fromData, $toData])->get()->toArray();

                }

            } else {
                $images = DB::table('message_synch_t1')->select('conversation_id', 'user_id', 'mobile_no', 'image_url', 'created_at')->where('is_approved', 1)
                //->whereRaw("created_at >= DATE_SUB(NOW(), INTERVAL 1 HOUR)")
                    ->get()->toArray();
            }

        } else {

            $images = DB::table('message_synch_t1')->select('conversation_id', 'user_id', 'mobile_no', 'image_url', 'created_at')->where('is_approved', 1)
            //->whereRaw("created_at >= DATE_SUB(NOW(), INTERVAL 1 HOUR)")
                ->get()->toArray();

        }


        return view('front_end.pages.home', compact('images'));
    }

    public function ApiCall(Request $request)
    {
        if ($request->has('timeSlot')) {

            $timeSlot = explode('-', $request->timeSlot);

            $toHour = $request->to_hour;
            $fromData = date('Y-m-d') . " $timeSlot[0]:00:00";
            $toData = date('Y-m-d') . " $timeSlot[1]:59:59";
        }

        if (isset($fromData) && isset($toData)) {
            $images = DB::table('message_synch_t1')->select('conversation_id', 'user_id', 'mobile_no', 'image_url', 'created_at')->where('is_approved', 1)->whereBetween('created_at', [$fromData, $toData])->get()->toArray();
        } else {
            $images = DB::table('message_synch_t1')->select('conversation_id', 'user_id', 'mobile_no', 'image_url', 'created_at')->where('is_approved', 1)->whereRaw("created_at >= DATE_SUB(NOW(), INTERVAL 1 HOUR)")->get()->toArray();
        }
        return $images;
    }

    public function winnerApi(Request $request)
    {

        $images = DB::table('message_synch_t1')->select('conversation_id', 'user_id', 'mobile_no', 'image_url', 'created_at')->where('is_winner', 1)->get()->toArray();

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
