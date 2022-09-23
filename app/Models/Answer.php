<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $quarded = false;

    public function question()
    {
        return $this->BelongsTo(Question::class, 'question_id', 'id');
    }

}
