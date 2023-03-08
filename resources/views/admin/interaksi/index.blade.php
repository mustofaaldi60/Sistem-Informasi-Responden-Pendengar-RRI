@extends('admin.layouts.app')

@section('breadcrumb')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="h1 text-dark">Interaksi Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Interaksi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
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
            <a href="/interaksi/create" class="btn btn-sm btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Nama Acara</th>
                        <th scope="col">Nama Respon Pendengar</th>
                        <th scope="col">Usia</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Respon Pendengar</th>
                        <th scope="col">Rating Pendengar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($interaksis as $interaksi)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $interaksi->jadwal }}</td>
                        <td>{{ $interaksi->nama_acara }}</td>
                        <td>{{ $interaksi->pendengar}}</td>
                        <td>{{ $interaksi->usia }}</td>
                        <td>{{ $interaksi->kelamin }}</td>
                        <td>{{ $interaksi->telepon }}</td>
                        <td>{{ $interaksi->respon_pendengar}}</td>
                        <td>{{ $interaksi->rating }}</td>

                        <td>
                            <a href="{{ route('interaksi.edit', $interaksi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('interaksi.destroy', $interaksi->id) }}" method="post" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $interaksis->links() }}
        </div>
    </div>
</section>
@endsection
