@extends('layouts.admin')

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Penilaian</li>
        <li class="breadcrumb-item active">Input Nilai Karyawan</li>
    </ol>
    <div class="container-fluid">
        <div class="row align-content-center">
            <div class="alert alert-primary ">
                <p style='margin: 0; padding: 0'>
                    sebelum dilakukan penilaian, nilai yang didapat diinisial terlebih dahulu.
                    <p>setiap nilai kriteria diinisialkan dapat diliahat sebagai berikut : </p>
                    <p>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th style="width: 3px">
                                            Kriteria
                                        </th>
                                        <th style="width: 3px">
                                            Nilai
                                        </th>
                                        <th style="width: 3px">
                                            Nilai Inisialisasi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <br>
                                            <br>
                                            <br>
                                            Kehadiran
                                        </td>
                                        <td>
                                            <p>
                                                81 - 100
                                            </p>
                                            <p>
                                                61 - 80
                                            </p>
                                            <p>
                                                41 - 60
                                            </p>
                                            <p>
                                                21 - 40
                                            </p>
                                            1 - 20
                                        </td>
                                        <td>
                                            <p>
                                                5
                                            </p>
                                            <p>
                                                4
                                            </p>
                                            <p>
                                                3
                                            </p>
                                            <p>
                                                2
                                            </p>
                                            1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                            <br>
                                            <br>
                                            Kedisiplinan
                                        </td>
                                        <td>
                                            <p>
                                                24 - 30
                                            </p>
                                            <p>
                                                19 - 23
                                            </p>
                                            <p>
                                                13 - 18
                                            </p>
                                            <p>
                                                7 - 12
                                            </p>
                                            1 - 6
                                        </td>
                                        <td>
                                            <p>
                                                5
                                            </p>
                                            <p>
                                                4
                                            </p>
                                            <p>
                                                3
                                            </p>
                                            <p>
                                                2
                                            </p>
                                            1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                            <br>
                                            <br>
                                            Kerjasama
                                        </td>
                                        <td>
                                            <p>
                                                17 - 20
                                            </p>
                                            <p>
                                                13 - 16
                                            </p>
                                            <p>
                                                9 - 12
                                            </p>
                                            <p>
                                                5 - 8
                                            </p>
                                            1 - 4
                                        </td>
                                        <td>
                                            <p>
                                                5
                                            </p>
                                            <p>
                                                4
                                            </p>
                                            <p>
                                                3
                                            </p>
                                            <p>
                                                2
                                            </p>
                                            1
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </p>
                </p>
            </div>
            <div class="alert alert-primary">
                <p style='margin: 0; padding: 0'>
                    sebelum dilakukan penilaian, nilai yang didapat diinisial terlebih dahulu.
                    <p>setiap nilai kriteria diinisialkan dapat diliahat sebagai berikut : </p>
                    <p>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th style="width: 3px">
                                            Kriteria
                                        </th>
                                        <th style="width: 3px">
                                            Nilai
                                        </th>
                                        <th style="width: 3px">
                                            Nilai Inisialisasi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <br>
                                            <br>
                                            <br>
                                            Kreativitas
                                        </td>
                                        <td>
                                            <p>
                                                9 - 10
                                            </p>
                                            <p>
                                                7 - 8
                                            </p>
                                            <p>
                                                5 - 6
                                            </p>
                                            <p>
                                                3 - 4
                                            </p>
                                            1 - 2
                                        </td>
                                        <td>
                                            <p>
                                                5
                                            </p>
                                            <p>
                                                4
                                            </p>
                                            <p>
                                                3
                                            </p>
                                            <p>
                                                2
                                            </p>
                                            1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                            <br>
                                            <br>
                                            Sikap
                                        </td>
                                        <td>
                                            <p>
                                                24 - 30
                                            </p>
                                            <p>
                                                19 - 23
                                            </p>
                                            <p>
                                                13 - 18
                                            </p>
                                            <p>
                                                7 - 12
                                            </p>
                                            1 - 6
                                        </td>
                                        <td>
                                            <p>
                                                5
                                            </p>
                                            <p>
                                                4
                                            </p>
                                            <p>
                                                3
                                            </p>
                                            <p>
                                                2
                                            </p>
                                            1
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </p>
                </p>
            </div>

            <div class="col-sm-12">
                <div class="card card-block">

                    <!-- Message Status -->
                    @if(Session::has('success_message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success_message') }}
                    </div>
                    @endif

                    @if(Session::has('error_message'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error_message') }}
                    </div>
                    @endif
                    <!--End Message Status -->

                    <form action="{{ route('admin.penilaian.store') }}" method="POST">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="karyawan_id">Nama Karyawan</sup></label>
                                <select name="karyawan_id" id="karyawan_id"
                                    class="form-control @if ($errors->has('karyawan_id')) is-invalid @endif">
                                    <option value="">Select a karyawan</option>
                                    @foreach($karyawan1 as $karyawan)
                                    <option value="{{ $karyawan->id }}"><b>{{$karyawan->nik." : ".$karyawan->name}}</b>
                                    </option>
                                    @endforeach
                                </select>
                                @error('karyawan_id')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kriteria_id">Kriteria </sup></label>
                                <select name="kriteria_id" id="kriteria_id"
                                    class="form-control @if ($errors->has('kriteria_id')) is-invalid @endif">
                                    <option value="">Select a kriteria</option>
                                    @php
                                    $No = 1;
                                    @endphp
                                    @foreach($kriterias as $kriteria)
                                    <option value="{{ $kriteria->id }}">{{$No++." : ".$kriteria->name }}</option>
                                    @endforeach
                                </select>
                                @error('kriteria_id')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nilai">Nilai Karyawan </label>
                                <input type="text" placeholder="Enter Nilai Karyawan" name="nilai" id="inputName"
                                    class="form-control @if ($errors->has('nilai')) is-invalid @endif"
                                    value="{{ old('nilai') }}">
                                @error('nilai')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <a class="btn btn-danger" href="{{ route('admin.penilaian.index') }}">Cancel</a>
                            <input type="submit" value="Create Kriteria" class="btn btn-success float-right">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-block">

                            <!-- Message Status -->
                            @if(Session::has('success_message_nilai'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success_message_nilai') }}
                            </div>
                            @endif

                            @if(Session::has('error_message_nilai'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error_message_nilai') }}
                            </div>
                            @endif
                            <!--End Message Status -->

                            <div class="card-title-block">
                                <h3 class="title">Showing Nilai Karyawan</h3>
                            </div>
                            <section>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" style="text-align: center">
                                        <thead>
                                            <tr>
                                                <th style="width: 3%">No</th>
                                                <th style="width: 10%">Nomor Induk Karyawan</th>
                                                <th style="width: 10%">Nama Karyawan</th>

                                                @foreach ($kriterias as $kriteria)
                                                <th style="width: 10%">{{$kriteria->name}}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($karyawans as $karyawan)
                                            <tr>
                                                <td>
                                                    {{$no++}}
                                                </td>
                                                <td>
                                                    {{$karyawan->nik}}
                                                </td>
                                                <td>
                                                    {{$karyawan->name}}
                                                </td>
                                                @inject('penilaian', 'App\Http\Controllers\Admin\PenilaianController')
                                                @foreach ($penilaian->penilaianKaryawan($karyawan->id) as $penilaian)
                                                <td>
                                                    {{$penilaian->nilai_inisial}}
                                                </td>
                                                @endforeach
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a class="btn btn-primary float-right btn-lg"
                                        href="{{ route('admin.penilaian.index') }}">DONE</a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
