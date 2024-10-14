<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    protected $table = 'prodis';

    public function mahasiswa(){
        return $this->hasMany(DashoboardMahasiswa::class);
    }
}
