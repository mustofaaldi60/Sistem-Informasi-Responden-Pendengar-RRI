@extends('admin.layouts.app')

@section('breadcrumb')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="h1 text-dark">Page Lagu</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">List Lagu</li>
        </ol>
      </div>
    </div>
  </div>
</section>
@endsection

@section('main')
<section class="content">
  <div class="card">
    <div class="card-header">
      @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <a href="/lagu/create" class="btn btn-sm btn-primary">Tambah</a>
    </div>
    <div class="card-body">
      
    </div>
  </div>
</section>
@endsection