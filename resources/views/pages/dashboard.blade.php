@extends('pages.main')

@section('content')

<h4 class="text-center mb-5">𝚂𝚎𝚕𝚊𝚖𝚊𝚝 𝚍𝚊𝚝𝚊𝚗𝚐 𝚍𝚒 𝚑𝚊𝚕𝚊𝚖𝚊𝚗 𝚍𝚊𝚜𝚑𝚋𝚘𝚊𝚛𝚍</h4>

<div class="row">
  <div class="col-lg-3 col-sm-12">
    <p class="text-center">Jumlah Data Produk</p>
    <div class="card">
      <div class="card-body text-center">
        <h5>{{ $total }}</h5>
        <span>Produk</span>
      </div>
    </div>
  </div>
</div>

@endsection