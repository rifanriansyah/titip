<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Diri</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('pos/savename') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control"
                                            placeholder="Nama Sesuai KTP" required>
                                        <input type="text" name="id" class="form-control" value="{{ $data->Id }}"
                                            hidden>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nik" pattern="[0-9]+" class="form-control"
                                            placeholder="NIK" minlength="16" maxlength="16" required>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Foto KTP</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="ktp" class="custom-file-input"
                                            accept="image/png, image/jpeg">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->


<!--**********************************
            Footer start
        ***********************************-->

<!--**********************************
            Footer end
        ***********************************-->
