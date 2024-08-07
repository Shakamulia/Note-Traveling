<x-layout>
    <x-slot:page>Create Penduduk</x-slot:page>
    <x-slot:heading>Create Page</x-slot:heading>
    <div class="row justify-content-center p-5">
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="col-lg-6 ">
            <div class="card card-primary card-outline mb-2"> <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Create Page</div>
                </div> <!--end::Header--> <!--begin::Form-->
                <form method="POST" action="{{ route('Catatan.store') }}"> <!--begin::Body-->
                    @csrf
                    @method('post')
                    <div class="card-body">
                        <div class="mb-3"> <label class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control">
                        </div>
                        <div class="mb-3"> <label for="" class="form-label">Waktu</label>
                            <input type="time" name="waktu" class="form-control" id="">
                        </div>
                        <div class="mb-3"> <label for="" class="form-label">Suhu Tubuh</label>
                            <input type="number" name="suhu" class="form-control" id="">
                        </div>
                        <div class="mb-3"> <label for="" class="form-label">Lokasi</label> <input
                                type="text" name="lokasi" class="form-control" id=""> </div>
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                </form> <!--end::Form-->
            </div> <!--end::Quick Example-->
        </div>
    </div>

</x-layout>
