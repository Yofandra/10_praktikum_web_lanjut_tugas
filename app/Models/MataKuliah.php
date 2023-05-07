<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table="matakuliah";
    public $timestamps= false;
    protected $primaryKey = 'id';

    public function mahasiswa(){
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matakuliah2', 'mahasiswa_id', 'matakuliah_id');
    }
}
