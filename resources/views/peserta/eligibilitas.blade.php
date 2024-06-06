@extends('layouts.master')
@section('title')
    Eligibilitas
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Peserta @endslot
        @slot('title') Eligibilitas @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cek Eligibilitas Peserta</h4>
                    <p class="card-title-desc">Silahkan masukkan data peserta.</p>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="no_kartu" class="form-label">Nomor Kartu</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="noInheath" value="" id="no_kartu">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Pelayanan</label>
                                    <div class="input-group" id="datepicker2">
                                        <input type="text" class="form-control" name="tglPelayanan" id="tglPelayanan" placeholder="thn-bln-tgl" data-date-format="yyyy-mm-dd" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div><!-- input-group -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Jenis Pelayanan</label>
                                    <select class="form-control select2" name="jenisPelayanan" id="jenisPelayanan">
                                        <option>Pilih Jenis Pelayanan</option>
                                        <option value="1">Rawat Jalan Tingkat Pertama</option>
                                        <option value="2">Rawat Inap Tingkat Pertama</option>
                                        <option value="3">Rawat Jalan Tingkat Lanjut</option>
                                        <option value="4">Rawat Inap Tingkat Lanjut</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Poli Pelayanan</label>
                                    <select class="form-control select2" name="poli" id="poli">
                                        <option>Pilih Poli Pelayanan</option>
                                        @foreach ($poli as $key => $val)
                                            <option value="{{ $val['KDPOLI'] }}">{{ $val['NMPOLI'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary waves-effect waves-light w-md" data-bs-toggle="modal" data-bs-target="#myModal" id="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="font-size-16">Overflowing text to show scroll behavior</h5>
                    <p>Cras mattis consectetur purus sit amet fermentum.
                        Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur.
                        Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec
                        ullamcorper nulla non metus auctor
                        fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum.
                        Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur.
                        Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec
                        ullamcorper nulla non metus auctor
                        fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum.
                        Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros.</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    @isset($eligibilitas)
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @dd($eligibilitas)
                </div>
            </div>
        </div>
    </div>
    @endisset



@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var jsonData = {
                        "token": "inh_3b1035950374b628904ff1af8123b889",
                        "kodeprovider": "1305R006",
                        "nokainhealth": $('#no_kartu').val(),
                        "tglpelayanan": $('#tglPelayanan').val(),
                        "jenispelayanan": $('#jenisPelayanan').val(),
                        "poli": $('#poli').val()
                }
                console.log(jsonData);
                $.ajax({
                    url: '{{ env("API_URL") }}'+'api/eligibilitaspeserta',
                    method: 'POST',
                    contentType: "application/json",
                    dataType: 'json',
                    headers: {
                        'Accept': 'application/json',
                    },
                    success: function(response) {
                        $('#myModalLabel').text('Hasil Eligibilitas');
                        $('#dataId').text(response.id);
                        $('#dataName').text(response.name);
                        $('#dataEmail').text(response.email);
                        $('#dataModal').modal('show');
                    },
                    error: function(xhr) {
                        console.log('Error:', xhr.responseText);
                    }
                });
            });
        });
        </script>
@endsection
