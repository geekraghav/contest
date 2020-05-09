<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'message_synch_t1';

    public static function getContestData()
    {
        $result = Home::select('id', 'user_id', 'conversation_id', 'mobile_no', 'image_url', 'is_approved', 'approved_by', 'is_winner', 'created_at')->orderBy('created_at','DESC')->get();

        if ($result->isNotEmpty()) {
            return $result;
        } else {
            return false;
        }
    }
}
