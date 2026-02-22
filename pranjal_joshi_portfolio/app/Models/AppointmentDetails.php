<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppointmentDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'dob',
        'gender',
        'contact_mobile',
        'address',
        'appointment_date',
        'appointment_time',
        'appointment_type',
        'visit_reason',
        'current_symptoms',
        'allergies',
        'past_psychiatric_history',
        'additional_notes',
        'status',
    ];
}
