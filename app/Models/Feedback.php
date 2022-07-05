<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table ='feedbacks';
    protected $primarykey ='id';
    protected $fillable =[
        'feedback_rate',
        'feedback_text',
        'feedback_By',
    ];
    public function TransportRequest()
    {
        return $this->belongsTo(Transport::class);
    }
    public function MaintenanceRequest()
    {
        return $this->belongsTo(Maintenance::class);
    }
}
