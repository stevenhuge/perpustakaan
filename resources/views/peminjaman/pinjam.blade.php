@extends('layouts.app')
@section('content')
<table class="table table-striped text-center">
    <thead>
        <tr>
            <td>Anggota</td>
            <td>Buku</td>
            <td>tanggal_pinjam</td>
            <td>tanggal_kembali</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
        <tr>
            <td> {{ $row->anggota->name }} </td>
            <td> {{ $row->buku->name }} </td> 
            <td> {{ $row->tanggal_pinjam }} </td>
            <td> {{ $row->tanggal_kembali }} </td>
        </tr> 
        @endforeach 
    </tbody>
</table>
@endsection