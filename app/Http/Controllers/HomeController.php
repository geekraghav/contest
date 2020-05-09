<?php

namespace App\Http\Controllers;

use App\Home;
use DB;
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

                            $updateData = ['is_approved' => 1, 'approval_time' => now(), 'approved_by' => $input['userid'], 'updated_at' => now()];

                            if ($data['is_approved'] == null) {

                                $checkIfUpdated = Home::where('id', $input['id'])->update($updateData);
                                if ($checkIfUpdated) {
                                    $tansactiosStatus['status'] = 200;
                                    $tansactiosStatus['message'] = "Marked Approved";
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

                dd($input);

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
