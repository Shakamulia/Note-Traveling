<x-layout>
    <x-slot:page>Catatan</x-slot:page>
    <x-slot:heading>Catatan Page</x-slot:heading>
    <div class="container-fluid">
        <div class="col-xxl m-5">
            <div class="card mb-5">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <a href="{{ route('Catatan.create') }}" class="btn btn-primary">Create Catatan</a>
                    @if ('session')
                    @endif
                </div> <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th class="col-3">Tanggal</th>
                                <th class="col-3">Waktu</th>
                                <th class="col-1">Suhu</th>
                                <th class="col-5">Lokasi</th>
                                <th style="width: 150px;" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($catatans as $catatan)
                                <tr class="align-middle">
                                    <td>{{ $catatan->id }}</td>
                                    <td>{{ $catatan->tanggal }}</td>
                                    <td>{{ $catatan->waktu }}</td>
                                    <td>{{ $catatan->suhu }}</td>
                                    <td>{{ $catatan->lokasi }}</td>
                                    <td>
                                        <a href="{{ route('Catatan.edit', $catatan->id, ['Catatan' => $catatan]) }}"
                                            class="btn btn-warning col-12">Edit</a>
                                        <form method="post"
                                            action="{{ route('Catatan.destroy', ['Catatan' => $catatan]) }}">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="btn btn-danger col-12">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div> <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                    </ul>
                </div>
            </div> <!-- /.card -->
        </div>

        <x-slot:judul>Create Page</x-slot:judul>
</x-layout>
