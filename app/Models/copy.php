<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_copy_tabla', 'copy_id', 'usuario_id');
    }
}
