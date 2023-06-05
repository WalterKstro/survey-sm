<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question','optional','survey_id','type_answer_id'];

    public function survey()
    {
        // this question belongs to a one Survey
        return $this->belongsTo(Survey::class);
    }
    use HasFactory;
}
