<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;

    protected $table="all_products";

    protected $fillable = [
        // 'title',
        // 'subject',
        // 'price',
        // 'description',
        // 'teacher_id',
        // 'exam_type',
        // 'num_students',
        // 'img_src',
        // 'video_src'
    ];
}