<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

    public function copies()
    {
        return $this->belongsToMany(Copy::class, 'usuario_copy_tabla', 'usuario_id', 'copy_id');
    }
}
