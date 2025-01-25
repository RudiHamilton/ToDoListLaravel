<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class taskmodel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks';
    protected $primaryKey = 'task_id'; 
    public $incrementing = true; 
    protected $keyType = 'int'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_name',
        'task_description',
        'task_date_assigned',
        'task_date_due',
        'task_urgency',
        'task_complete',
        'task_complete_date',
    ];

}
