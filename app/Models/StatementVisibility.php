<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatementVisibility extends Model
{
    use HasFactory;

    protected $table = 'statement_visibility';

    protected $fillable = [
        'statement_id',
        'parent_id',
        'seen_timestamp',
    ];

    public function statement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Statement::class);
    }
    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'parent_id');
    }
}

