<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\MataKuliah;
use App\Models\Kelas;

class Mahasiswa extends Model
{
    protected $table="mahasiswa";
    public $timestamps= false;
    protected $primaryKey = 'Nim';

    protected $fillable=[
        'Nim',
        'Nama',
        'Foto',
        'Email',
        'Tanggal_Lahir',
        'kelas_id',
        'Jurusan',
        'No_Handphone'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function matakuliah(){
        return $this->belongsToMany(MataKuliah::class, 'mahasiswa_matakuliah2', 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    }
}
