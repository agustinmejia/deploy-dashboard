<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicationTypeVersion extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    public $additional_attributes = ['full_name'];

    public function type(){
        return $this->belongsTo(ApplicationType::class);
    }

    public function getFullNameAttribute(){
        $type = ApplicationType::find($this->id);
        return "{$type->name} {$this->name}";
    }
}
