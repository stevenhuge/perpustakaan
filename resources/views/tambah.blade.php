@extends('layouts.app')
@section('content')

<form action="{{ route('store') }}" class="d-flex align-items justify-content-center" method="POST">
    @csrf
    <div class="form-control mt-5" id="content">
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th class="text-center" id="main">FORM PENGISIAN DATA BUKU</th>
                </tr>
                <tr>
                    <td>
                        <label>Nama buku :</label><br />
                        <input type="text" class="form-control mt-1" placeholder="Nama buku . . ." name="name">

                        <label class="mt-3">Jumlah buku :</label>
                        <input type="number" class="form-control" placeholder="Jumlah buku . . ." name="jumlah_buku">

                        <label class="mt-3">Tipe buku :</label> <br />
                        <select id="" class="form-control mt-1" name="tipe_buku">
                            <option value="Pilih Opsi" selected>Pilih Opsi</option>
                            <option value="novel">Novel</option>
                            <option value="komik">Komik</option>
                            <option value="pelajaran">Pelajaran</option>
                            <option value="panduan">Panduan</option>
                        </select>

                        <label class="mt-3">Penulis :</label>
                        <input name="penulis" type="text" class="form-control" placeholder="Penulis . . .">

                        <label class="mt-3">Penerbit :</label>
                        <input name="penerbit" type="text" class="form-control" placeholder="Penerbit . . .">
                        
                        <button type="submit" class="mt-3 btn btn-success" style="width: 100%">Submit</button>
                    </td>
                </tr>
               
            </thead>
        </table>
    </div>
</form>

<style>
    #content {
        width: 50%;
        height: auto;
    }

    #main {
        color: rgba(52, 50, 54, 0.726);
    }
</style>


@endsection