@extends('layouts.master')
@section('title')
    Eligibilitas
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Peserta @endslot
        @slot('title') Daftar Peserta @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Daftar Peserta Asuransi</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor InHealth</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                                <th>Tgl. Masuk</th>
                                <th>Jenis Pasien</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($peserta as $peserta)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peserta->noinhealth }}</td>
                                    <td>{{ $peserta->nama_pasien }}</td>
                                    <td>{{ $peserta->kelamin == "1" ? "Perempuan" : "Laki-laki" }}</td>
                                    @php
                                        $alamat = "";
                                        if ($peserta->alamat_pasien!= null) {
                                            $alamat = $peserta->alamat_pasien;
                                        }
                                        if ($peserta->nama_kelurahan!= null) {
                                            $alamat = $alamat. ", ". $peserta->nama_kelurahan;
                                        }
                                        if ($peserta->nama_kecamatan!= null) {
                                            $alamat = $alamat. ", ". $peserta->nama_kecamatan;
                                        }
                                        if ($peserta->nama_kabupaten!= null) {
                                            $alamat = $alamat. ", ". $peserta->nama_kabupaten;
                                        }
                                    @endphp
                                    <td>{{ $alamat }}</td>
                                    <td>{{ $peserta->umur }}</td>
                                    <td>{{ $peserta->tanggal }}</td>
                                    <td>{{ $peserta->caradatang == "Rujukan" ? "Rujukan" : "Non Rujukan"}}</td>
                                    <td>Aksi</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
