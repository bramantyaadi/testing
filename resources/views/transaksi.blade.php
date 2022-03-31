@extends('layout.app')


@section('content')
    <div class="container">
        <h5>Master Transaksi</h5>
        <br>
        <form action="{{ url('barang/store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <select name="barang" id="" class="form-control">
                            <option value="" disabled selected>Pilih barang</option>
                            
                        </select>
                      </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                        <input type="text" class="form-control">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <select name="barang" id="" class="form-control">
                            <option value="" disabled selected>Pilih barang</option>
                            
                        </select>
                      </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                        <input type="text" class="form-control">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <select name="barang" id="" class="form-control">
                            <option value="" disabled selected>Pilih barang</option>
                        </select>
                      </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                        <input type="text" class="form-control">
                      </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary btn-sm" value="Simpan" name="store"></input>
          </form>
    </div>
@endsection

@push('js')
@endpush

