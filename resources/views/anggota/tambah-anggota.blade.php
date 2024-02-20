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
                        <label>nama anggota</label><br />
                        <input type="text" class="form-control mt-1" placeholder="nama" name="name">

                        <label class="mt-3">alamat anggota</label>
                        <input type="text" class="form-control" placeholder="alamat" name="alamat">
                      
                        <label class="mt-3">no-telepon</label>
                        <input name="telepon" type="text" class="form-control" placeholder="no-telepon">

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