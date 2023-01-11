<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table = "announcements";
    protected $primaryKey="announcement_id";
    protected $fillable = [
            'header', 
            'sub_header', 
            'user_id',
            'description', 
            'photo'
    ];


}
