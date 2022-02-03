<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'employee_id',
        'biometric_device_id',
        'attendance',
    ];
    
    // public function setAttendanceAttribute($value)
    // {
    //     // $this->attributes['attendance'] = Carbon::parse($value)->addHours(3);
    // }

    public function getAttendanceAttribute($value)
    {
        return Carbon::parse($value)->addHours(3)->format('l F j, Y, g:i a');
    }

    /**
     * Get the employee that owns the Attendance
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    /**
     * Get the biometric_device that owns the Attendance
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function biometric_device(): BelongsTo
    {
        return $this->belongsTo(BiometricDevice::class, 'biometric_device_id', 'id');
    }
}
