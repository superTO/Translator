<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    protected $fillable = [
        'id','document_name', 'text_name', 'due_date', 
        'original_language', 'translated_language','document_type','uploader_user_id',
        'translation_type','translator1_id','translator2_id','translator3_id','translator4_id',
        'payment_type','remark',
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
