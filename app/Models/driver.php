<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;

    protected $table ='drivers';
    protected $primarykey ='id';

    protected $fillable =[
        'first_name',
        'last_name',
        'driver_status']; 
    public function driverFullName(){
        return $this->first_name.' '.$this->last_name;
    }
    public function TransportRequest()
    {
        return $this->belongsTo(Transport::class);
    }
}
