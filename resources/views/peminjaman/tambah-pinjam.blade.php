@extends('layouts.app')
@section('content')
<form action="{{ route('store-peminjaman') }}" class="mt-5" method="POST">
    @csrf
    <table class="table table-striped d-flex align-items justify-content-center">
        <tr>
            <td>
                <label for="">nama anggota</label>  
                <select name="id_anggota" class="form-control">
                    <option selected>pilih anggota</option>
                    @foreach ($anggotas as $anggota)
                        <option value="{{ $anggota->id }}">{{ $anggota->name }}</option>
                    @endforeach
                </select>
                <label for="">nama buku</label>
                <select name="id_buku" class="form-control">
                    <option selected>pilih buku</option>
                    @foreach ($bukus as $buku)
                        <option value="{{ $buku->id }}">{{ $buku->name }}</option>
                    @endforeach
                </select>
                <label for="">tanggal pinjam</label>
                <input type="date" name="tanggal_pinjam" class="form-control">
                <label for="">tanggal_kembali</label>
                <input type="date" name="tanggal_kembali" class="form-control">
                <button type="submit" class="btn btn-secondary mt-2">Submit</button>
            </td>
        </tr>
    </table>
    
</form>
@endsection