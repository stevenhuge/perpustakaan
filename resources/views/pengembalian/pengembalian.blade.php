@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nama Peminjam</th>
            <th>Nama Buku</th>
            <th>Tanggal</th>
            <th>Denda</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
        <tr>
            <td>{{ $row->anggota->name }}</td>
            <td>{{ $row->buku->name }}</td>
            <td>{{ $row->tanggal_kembali }}</td>
            <td>{{ $row->denda }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
