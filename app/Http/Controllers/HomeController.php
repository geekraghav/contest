<?php

namespace App\Http\Controllers;

use App\Home;
use DB;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function approveImage(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'id' => ['required'],
                'userid' => ['required'],
            ]);
            if ($validator->fails()) {

                return response()->json(['error' => $validator->errors()], 401);
            } else {

                $input = $request->all();

                try {

                    $tansactiosStatus = DB::transaction(function () use ($input) {

                        $data = Home::where('id', $input['id'])->first();
                        if ($data) {

                            $client = new Client();

                            $updateData = ['is_approved' => 1, 'approval_time' => now(), 'approved_by' => $input['userid'], 'updated_at' => now()];

                            if ($data['is_approved'] == null) {

                                $checkIfUpdated = Home::where('id', $input['id'])->update($updateData);
                                if ($checkIfUpdated) {
                                    $tansactiosStatus['status'] = 200;
                                    $tansactiosStatus['message'] = "Marked Approved";
                                    $tansactiosStatus['approvalMessage'] = 'Yes';

                                    $conversationID = $data['conversation_id'];

                                    $whatsAppPostFix = "/messages";
                                    $whatsAppAPIURL = config('app.myoperator.whatsappsendmessageapi');
                                    $finalMsgAPI = $whatsAppAPIURL . $conversationID . $whatsAppPostFix;
                                    $bearerToken = config('app.myoperator.brearertoken');

                                    $headers = [
                                        'Authorization' => 'Bearer ' . $bearerToken,
                                        'Content-Type' => 'application/json',
                                    ];

                                    $sendJson2 = [
                                        "actor_type" => "user",
                                        "actor_id" => "00bda69e-1c88-4f61-bec3-3dcf6bc8e18f",
                                        "message_type" => "normal",
                                        "message_parts" => [
                                            [
                                                "text" => [
                                                    'content' =>
                                                    'In case of any other Query, send "Help"',
                                                ],
                                            ],
                                        ],
                                    ];

                                    $sendJson = [
                                        "actor_type" => "user",
                                        "actor_id" => "00bda69e-1c88-4f61-bec3-3dcf6bc8e18f",
                                        "message_type" => "normal",
                                        "message_parts" => [
                                            [
                                                "text" => [
                                                    "content" =>
                                                    "Congrats! Your image has been approved for the competition. Please visit lenskart.com/mom/ to find out the winners.",
                                                ],
                                            ],
                                        ],
                                    ];

                                    $res = $client->post($finalMsgAPI, [
                                        'headers' => $headers,
                                        'json' => $sendJson,
                                    ]);

                                    $res = $client->post($finalMsgAPI, [
                                        'headers' => $headers,
                                        'json' => $sendJson2,
                                    ]);

                                    return $tansactiosStatus;
                                }

                            } else if ($data['is_approved'] == 1) {
                                $tansactiosStatus['status'] = 200;
                                $tansactiosStatus['message'] = "Already Marked Approved";
                                $tansactiosStatus['approvalMessage'] = 'Yes';
                                return $tansactiosStatus;
                            } else if ($data['is_approved'] == 2) {
                                $tansactiosStatus['status'] = 200;
                                $tansactiosStatus['message'] = "Already Reject";
                                $tansactiosStatus['approvalMessage'] = 'Yes';
                                return $tansactiosStatus;
                            } else if ($data['is_approved'] == 3) {
                                $checkIfUpdated = Home::where('id', $input['id'])->update($updateData);
                                if ($checkIfUpdated) {
                                    $tansactiosStatus['status'] = 200;
                                    $tansactiosStatus['message'] = "Marked Approved";
                                    $tansactiosStatus['approvalMessage'] = 'Yes';

                                    $conversationID = $data['conversation_id'];

                                    $whatsAppPostFix = "/messages";
                                    $whatsAppAPIURL = config('app.myoperator.whatsappsendmessageapi');
                                    $finalMsgAPI = $whatsAppAPIURL . $conversationID . $whatsAppPostFix;
                                    $bearerToken = config('app.myoperator.brearertoken');

                                    $headers = [
                                        'Authorization' => 'Bearer ' . $bearerToken,
                                        'Content-Type' => 'application/json',
                                    ];

                                    $sendJson2 = [
                                        "actor_type" => "user",
                                        "actor_id" => "00bda69e-1c88-4f61-bec3-3dcf6bc8e18f",
                                        "message_type" => "normal",
                                        "message_parts" => [
                                            [
                                                "text" => [
                                                    'content' =>
                                                    'In case of any other Query, send "Help"',
                                                ],
                                            ],
                                        ],
                                    ];

                                    $sendJson = [
                                        "actor_type" => "user",
                                        "actor_id" => "00bda69e-1c88-4f61-bec3-3dcf6bc8e18f",
                                        "message_type" => "normal",
                                        "message_parts" => [
                                            [
                                                "text" => [
                                                    "content" =>
                                                    "Congrats! Your image has been approved for the competition. Please visit lenskart.com/mom/ to find out the winners.",
                                                ],
                                            ],
                                        ],
                                    ];

                                    $res = $client->post($finalMsgAPI, [
                                        'headers' => $headers,
                                        'json' => $sendJson,
                                    ]);

                                    $res = $client->post($finalMsgAPI, [
                                        'headers' => $headers,
                                        'json' => $sendJson2,
                                    ]);

                                    return $tansactiosStatus;
                                }
                            }

                        } else {
                            return response()->json(['error' => 'Some error while fetching data.']);
                        }

                    });
                } catch (\Exception $ex) {

                    return response()->json(['error' => 'Some error while fetching data.']);
                }

                if ($tansactiosStatus['status'] == 200) {

                    //send message

                    //

                    return response()->json([$tansactiosStatus]);
                } else {
                    return response()->json(['error' => 'Some error while fetching data.']);
                }
            }

        } else {
            return response()->json(['error' => $request->method() . '  is not allowed'], 401);
        }
    }

    public function rejectImage(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'id' => ['required'],
                'userid' => ['required'],
            ]);
            if ($validator->fails()) {

                return response()->json(['error' => $validator->errors()], 401);
            } else {

                $input = $request->all();

                try {

                    $tansactiosStatus = DB::transaction(function () use ($input) {

                        $data = Home::where('id', $input['id'])->first();

                        if ($data) {

                            $updateData = ['is_approved' => 2, 'approval_time' => now(), 'approved_by' => $input['userid'], 'updated_at' => now()];

                            if ($data['is_approved'] == null) {

                                $checkIfUpdated = Home::where('id', $input['id'])->update($updateData);
                                if ($checkIfUpdated) {
                                    $tansactiosStatus['status'] = 200;
                                    $tansactiosStatus['message'] = "Marked Reject";
                                    $tansactiosStatus['approvalMessage'] = 'Yes';
                                    return $tansactiosStatus;
                                }

                            } else if ($data['is_approved'] == 1) {
                                $tansactiosStatus['status'] = 200;
                                $tansactiosStatus['message'] = "Already Marked Approved";
                                $tansactiosStatus['approvalMessage'] = 'Yes';
                                return $tansactiosStatus;
                            } else if ($data['is_approved'] == 2) {
                                $tansactiosStatus['status'] = 200;
                                $tansactiosStatus['message'] = "Already Reject";
                                $tansactiosStatus['approvalMessage'] = 'Yes';
                                return $tansactiosStatus;
                            } else if ($data['is_approved'] == 3) {
                                $checkIfUpdated = Home::where('id', $input['id'])->update($updateData);
                                if ($checkIfUpdated) {
                                    $tansactiosStatus['status'] = 200;
                                    $tansactiosStatus['message'] = "Marked Approved";
                                    $tansactiosStatus['approvalMessage'] = 'Yes';
                                    return $tansactiosStatus;
                                }
                            }

                        } else {
                            return response()->json(['error' => 'Some error while fetching data.']);
                        }

                    });
                } catch (\Exception $ex) {

                    return response()->json(['error' => 'Some error while fetching data.']);
                }

                if ($tansactiosStatus['status'] == 200) {

                    return response()->json([$tansactiosStatus]);
                } else {
                    return response()->json(['error' => 'Some error while fetching data.']);
                }
            }

        } else {
            return response()->json(['error' => $request->method() . '  is not allowed'], 401);
        }
    }

    public function getAllContestList(Request $request)
    {
        $data = Home::getContestData();
        return view('contestlist', compact('data'));
    }

}
