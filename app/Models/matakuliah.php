<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;
    protected $fillable = ['kode','nama','sks','semester'];

    protected $table = 'matakuliah';

    public function prodi()
    {
        return $this->belongsTo(DashboardProdi::class);
    }
}
