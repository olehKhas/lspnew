@extends('dashboard.partials.dashboard')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data pengajuan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info card-outline">
                        <div class="container">
                            <div class="container">

                            </div>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success text-center" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                </div>
                            @endif
                            @if (session()->has('danger'))
                                <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ session('danger') }}</strong>
                                </div>
                            @endif
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Mahasiswa</th>
                                        <th scope="col">File</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($mhs1->count())
                                        @foreach ($mhs1 as $dp)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $dp->user->name }}</td>
                                                <td>{{ $dp->nama_dokumen }}</td>
                                                <td>
                                                    @if ($dp->user->status == 0)
                                                        belum disetujui
                                                    @else
                                                        sudah disetujui
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($dp->user->status == 0)
                                                        <form action="/ubahStatus/{{ $dp->id_user }}" method="POST"
                                                            class="d-inline">
                                                            @method('put')
                                                            @csrf
                                                            <button class="btn btn-warning text-white"
                                                                onclick="return confirm('Anda yakin ingin submit?')"
                                                                type="submit">Submit</button>
                                                        </form>
                                                    @else
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">
                                                <h2 class="text-center" colspan="4">belum ada data</h2>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    </div>
@endsection
