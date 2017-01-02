<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'document_name', 'text_name', 'due_date', 'translation_type',
        'original_language', 'translated_language','document_type',
        'upload_user_id','remark','translator1_id','translator2_id',
        'translator3_id','translator4_id','payment_type','money',
    ];
    
    
    public function translator1()
    {
        return  $this->belongsTo('App\User');
    }
    public function translator2()
    {
        return  $this->belongsTo('App\User');
    }
     public function translator3()
    {
        return  $this->belongsTo('App\User');
    }
        public function translator4()
    {
        return  $this->belongsTo('App\User');
    }
}
