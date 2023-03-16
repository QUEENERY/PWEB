@extends('pages.main')

@section('content')
    <h3 class="mb-5">Edit Produk</h3>

    <div class="col-6">
      <form action="/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="judulproduk" class="form-label">Judul Produk</label>
          <input type="text" name="judulproduk" id="judulproduk" value="{{ $product->judulproduk }}" class="form-control" required>
          @error('judulproduk')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-3">
          <label for="judul-produk" class="form-label">Deskripsi Produk</label>
          <textarea rows="5" name="deskripsi" id="deskripsi" class="form-control" required>{{ $product->deskripsi }}</textarea>
          @error('deskripsi')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-3">
          <label for="harga" class="form-label">Harga Produk</label>
          <input type="number" name="harga" id="harga" value="{{ $product->harga }}" class="form-control" required>
          @error('harga')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>  

        <button type="submit" class="btn btn-custom">Edit</button>
      </form>
    </div>
@endsection