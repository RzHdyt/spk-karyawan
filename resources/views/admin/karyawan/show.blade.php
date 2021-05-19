@extends('layouts.admin')

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Karyawan</li>
        <li class="breadcrumb-item active">Tambah Karyawan</li>
    </ol>
    <div class="container-fluid">
        <div class="row">
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

                    <div class="card-title-block">
                        <h3 class="title">Tambah Karyawan</h3>
                    </div>

                    <form action="{{ route('admin.karyawan.update', [$karyawan->id]) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nik">Nomer Induk Karyawan <sup style='color:red'>*</sup></label>
                                <input type="text" disabled placeholder="Enter NIK" name="nik" id="inputNik"
                                    class="form-control @if ($errors->has('nik')) is-invalid @endif"
                                    value="{{ $karyawan->nik }}">
                                @error('nik')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Karyawan <sup style='color:red'>*</sup></label>
                                <input type="text" placeholder="Enter Name of Employee" name="name" id="inputName"
                                    class="form-control @if ($errors->has('name')) is-invalid @endif"
                                    value="{{ $karyawan->name }}">
                                @error('name')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="gender">Pilih Jenis Kelamin</sup></label>
                                <select name="gender" id="gender"
                                    class="form-control @if ($errors->has('gender')) is-invalid @endif"
                                    value='{{$karyawan->gender}}'>
                                    <option value="">Select a Gender</option>
                                    <option value="Laki - Laki" @if($karyawan->gender=='Laki - Laki' )
                                        selected="selected" @endif>Laki - Laki
                                    </option>
                                    <option value="Perumpuan" @if($karyawan->gender=='Perumpuan' ) selected="selected"
                                        @endif>
                                        Perumpuan</option>
                                </select>
                                @error('gender')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address </sup></label>
                                <input type="text" placeholder="Enter Address of Employee" name="address" id="inputName"
                                    class="form-control @if ($errors->has('address')) is-invalid @endif"
                                    value="{{ $karyawan->address }}">
                                @error('address')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number </label>
                                <input type="text" placeholder="Enter Phone Number" name="phone_number" id="inputName"
                                    class="form-control @if ($errors->has('phone_number')) is-invalid @endif"
                                    value="{{ $karyawan->phone_number }}">
                                @error('phone_number')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" placeholder="Enter Birthday" name="birthday" id="inputbirthday"
                                    class="form-control @if ($errors->has('birthday')) is-invalid @endif"
                                    value="{{ $karyawan->birthday }}">
                                @error('birthday')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="religion">Pilih Agama</sup></label>
                                <select name="religion" id="religion" value="{{$karyawan->religion}}"
                                    class="form-control @if ($errors->has('religion')) is-invalid @endif"
                                    value='{{$karyawan->religion}}'>
                                    <option value="">Select a religion</option>
                                    <option value="Islam" @if($karyawan->religion=='Islam' ) selected="selected" @endif>
                                        Islam</option>
                                    <option value="Protestan" @if($karyawan->religion=='Protestan' ) selected="selected"
                                        @endif>Protestan</option>
                                    <option value="Katolik" @if($karyawan->religion=='Katolik' ) selected="selected"
                                        @endif>
                                        Katolik</option>
                                    <option value="Hindu" @if($karyawan->religion=='Hindu' ) selected="selected" @endif>
                                        Hindu</option>
                                    <option value="Buddha" @if($karyawan->religion=='Buddha' ) selected="selected"
                                        @endif>
                                        Buddha</option>
                                    <option value="Khonghucu" @if($karyawan->religion=='Khonghucu' ) selected="selected"
                                        @endif>Khonghucu</option>
                                </select>
                                @error('religion')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="status">Pilih Status Karyawan</sup></label>
                                <select name="status" id="status"
                                    class="form-control @if ($errors->has('status')) is-invalid @endif"
                                    value={{$karyawan->status}}>
                                    <option value="Karyawan Tetap" @if($karyawan->status=='Karyawan Tetap' )
                                        selected="selected" @endif>Karyawan Tetap</option>
                                    <option value="Karyawan Kontrak" @if($karyawan->status=='Karyawan Kontrak' )
                                        selected="selected" @endif>Karyawan Kontrak</option>
                                </select>
                                @error('status')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="dateIn">Masuk Kerja</label>
                                <input type="date" placeholder="Enter dateIn" name="dateIn" id="inputdateIn"
                                    class="form-control @if ($errors->has('dateIn')) is-invalid @endif"
                                    value="{{ $karyawan->dateIn }}">
                                @error('dateIn')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="dateOut">Keluar Kerja</label>
                                <input type="date" placeholder="Enter dateOut" name="dateOut" id="inputdateOut"
                                    class="form-control @if ($errors->has('dateOut')) is-invalid @endif"
                                    value="{{ $karyawan->dateOut }}">
                                @error('dateOut')
                                <div class="invalid-feedback" style="display: block !important;">{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <a class="btn btn-danger" href="{{ route('admin.karyawan.index') }}">Cancel</a>
                            <input type="submit" value="Update Employee" class="btn btn-success float-right">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
