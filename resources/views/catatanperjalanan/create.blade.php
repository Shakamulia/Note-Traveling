<x-layout>
    <x-slot:page>Create Penduduk</x-slot:page>
    <x-slot:heading>Create Page</x-slot:heading>
    <div class="row justify-content-center p-5">
        <div class="col-lg-6 ">
            <div class="card card-primary card-outline mb-2"> <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Create Page</div>
                </div> <!--end::Header--> <!--begin::Form-->
                <form> <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Tanggal</label> <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">Waktu</label> <input type="password" class="form-control" id="exampleInputPassword1"> </div>
                        <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">Suhu Tubuh</label> <input type="password" class="form-control" id="exampleInputPassword1"> </div>
                        <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">Lokasi</label> <input type="password" class="form-control" id="exampleInputPassword1"> </div>
                        <div class="input-group mb-3"> <input type="file" class="form-control" id="inputGroupFile02"> <label class="input-group-text" for="inputGroupFile02">Upload</label> </div>
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
                </form> <!--end::Form-->
            </div> <!--end::Quick Example-->
        </div>
    </div>

</x-layout>

