<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Postagem extends Model

{
    use HasFactory;

    protected $table = 'postagens';
    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class);
    }

}