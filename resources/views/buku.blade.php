@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr class="text-center">
            <th>Nama Buku</th>
            <th>Jumlah Produk</th>
            <th>Tipe Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
        <tr class="text-center">
            <td> {{ $row->name }} </td>
            <td> {{ $row->jumlah_buku }} </td>
            <td> {{ $row->tipe_buku }} </td>
            <td> {{ $row->penulis }} </td>
            <td> {{ $row->penerbit }} </td>
            <td>
                <a href="{{ route('destroy', $row->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                <a href="{{ route('edit', $row->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                <a href="" class="btn btn-info"><i class="fa fa-info-circle"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection