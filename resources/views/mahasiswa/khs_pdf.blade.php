@extends('mahasiswa.layout')
@section('content')
<div class="container mt-3">
    <div class="text-center">
        <h4>JURUSAN TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG</h4>
    </div>
    <h2 class="text-center mt-4 mb-5">KARTU HASIL STUDI</h2>
    <div class="row">
        <div class="col">
            <strong>Name: </strong> {{$Mahasiswa->Nama}}<br>
            <strong>NIM: </strong> {{$Mahasiswa->Nim}}<br>
            <strong>Class: </strong> {{$Mahasiswa->Kelas->nama_kelas}}
        </div>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Jam</th>
                <th scope="col">Semester</th>
                <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Mahasiswa->MataKuliah as $matkul)
            <tr>
                <td>{{ $matkul->nama_matkul }}</td>
                <td>{{ $matkul->sks }}</td>
                <td>{{ $matkul->sks }}</td>
                <td>{{ $matkul->semester }}</td>
                <td>{{ $matkul->pivot->nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
