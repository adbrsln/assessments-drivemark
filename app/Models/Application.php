<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Application extends Model
{
    use HasFactory;
    public $dates = ['approved_at'];
    protected $guarded = ['id'];

    public function applicant()
    {
        return $this->belongsTo('App\User', 'applied_by', 'id');
    }

    public function approver()
    {
        return $this->belongsTo('App\User', 'approved_by', 'id');
    }

    public function scopeUserApplications($query)
    {
        return $query->where('applied_by', Auth::user()->id);
    }
}
