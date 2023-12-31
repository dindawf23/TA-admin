@extends('master')

@section('main')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">State</h5>
            <a href="/admin/state/create">
                <button type="button" class="btn btn-danger">Tambah Data</button>
            </a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Price</th>
                        <th>Room</th>
                        <th>Bedroom</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($states as $state)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $state->name }}</strong></td>
                            <td>{{ $state->price }}</td>
                            <td>{{ $state->room }}</td>
                            <td>{{ $state->bedroom }}</td>
                            <td>
                                <a href="/admin/state/{{ $state->id }}/image"
                                    class="btn btn-sm btn-primary me-2">
                                    <i class="bx bx-images"></i>
                                </a>
                                <a href="/admin/state/{{ $state->id }}/edit" class="btn btn-sm btn-success me-2">
                                    <i class="bx bx-edit-alt"></i>
                                </a>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus"
                                    onclick="hapus({{ $state->id }})">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end px-3 py-3">
            {!! $states->links() !!}
        </div>
    </div>

    <div class="modal fade" id="hapus" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" id="hapusLink">
                    @csrf
                    @method('DELETE')

                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <p>Apakah anda yakin ingin menghapus data ini ?</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end py-3">
                            <div class="px-3">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary">Hapus</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function hapus(id) {
            $('#hapusLink').attr('action', `/admin/state/${id}`);
        }
    </script>
@endpush
