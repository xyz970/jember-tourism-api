<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Wisata extends Model
{
    use HasFactory,HasUuids;
    // protected $primaryKey = 'id';
    protected $table = 'wisata';
    protected $guarded = [];
    
    protected $keyType = 'string';
    protected function id(): Attribute {
        return Attribute::make(
            set: fn() => Str::uuid(),
        );
    }
}
