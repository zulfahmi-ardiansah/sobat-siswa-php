@extends('layout.application')
@section('title', 'Siswa')
@section('menu-parent', 'global')
@section('content')
    <div class="content">
        <div class="container-xl">
            <div class="page-header text-white d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="page-pretitle">
                            Beranda
                        </div>
                        <h2 class="page-title">
                            Biodata
                        </h2>
                    </div>
                </div>
            </div>
            <form method="POST" action="">
                {{ csrf_field() }}
                @if ($admStudent->id)
                    <input type="hidden" name="id" value="{{ $admStudent->id }}" />
                @endif
                <div class="row row-deck row-cards">
                    <div class="col-md-6 d-block">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">
                                    Data Pribadi
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Nomor Induk Siswa
                                            </label>
                                            <input readonly="true" required="" value="{{ $admStudent->nis }}" type="text" maxlength="100" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Nama
                                            </label>
                                            <input readonly="true" required="" value="{{ $admStudent->name }}" type="text" maxlength="100" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Tempat Lahir <sup class="font-bold text-red">*</sup>
                                            </label>
                                            <input name="place_birth" required="" value="{{ $admStudent->place_birth }}" type="text" maxlength="100" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Tanggal Lahir <sup class="font-bold text-red">*</sup>
                                            </label>
                                            <input name="date_birth" required="" value="{{ $admStudent->date_birth }}" type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Jenis Kelamin <sup class="font-bold text-red">*</sup>
                                    </label>
                                    <div class="mt-2">
                                        <label class="form-check form-check-inline">
                                            <input value="L" class="form-check-input" type="radio" required="" name="gender" {{ $admStudent->gender == 'L' ? 'checked' : '' }}>
                                            <span class="form-check-label">Laki-laki</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input value="P" class="form-check-input" type="radio" required="" name="gender" {{ $admStudent->gender == 'P' ? 'checked' : '' }}>
                                            <span class="form-check-label">Perempuan</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Alamat <sup class="font-bold text-red">*</sup>
                                    </label>
                                    <textarea name="address" required="" class="form-control" maxlength="255" name="address">{{ $admStudent->address }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        No. Telp
                                    </label>
                                    <input name="phone" value="{{ $admStudent->phone }}" type="text" maxlength="100" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input name="email" value="{{ $admStudent->email }}" type="text" maxlength="100" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-block">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">
                                    Data Orang Tua
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Nama Ayah
                                            </label>
                                            <input name="father_name" value="{{ $admStudent->father_name }}" type="text" maxlength="100" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Pekerjaan Ayah
                                            </label>
                                            <input name="father_name" value="{{ $admStudent->father_name }}" type="text" maxlength="100" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Nama Ibu
                                            </label>
                                            <input name="mother_name" value="{{ $admStudent->mother_name }}" type="text" maxlength="100" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Pekerjaan Ibu
                                            </label>
                                            <input name="mother_name" value="{{ $admStudent->mother_name }}" type="text" maxlength="100" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Nama Wali
                                            </label>
                                            <input name="vice_name" value="{{ $admStudent->vice_name }}" type="text" maxlength="100" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">
                                                Pekerjaan Wali
                                            </label>
                                            <input name="vice_name" value="{{ $admStudent->vice_name }}" type="text" maxlength="100" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <a href="{{ url('stdashboard') }}">
                            <button type="button" class="btn btn-md btn-secondary mr-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg> Kembali
                            </button>  
                        </a>
                    </div>
                    <div class="col-9 col-edit">
                        <button type="button" class="btn btn-md btn-primary ml-auto" onclick="changeEditStat()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg> Ubah
                        </button>  
                    </div>
                    <div class="col-9 col-submit d-none">
                        <div class="ml-auto">
                            <button type="button" class="btn btn-md btn-default" onclick="changeEditStat()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="16" height="16" rx="2" /><path d="M10 10l4 4m0 -4l-4 4" /></svg> Batal
                            </button>
                            &nbsp;
                            <button name="submit-save" class="btn btn-md btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg> Simpan
                            </button>  
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @include("assets.copyright")
    </div>
    <script>
        $('[name="class_id"]').val('{{ $admStudent->class_id }}');

        let editStat = false;

        function changeEditStat () {
            $('.col-edit').removeClass("d-none");
            $('.col-submit').removeClass("d-none");
            if (editStat) {
                $('input').removeAttr("disabled");
                $('textarea').removeAttr("disabled");
                $('select').removeAttr("disabled");
                $('sup.text-red').show();
                $('.col-edit').addClass("d-none");
            } else {
                $('input').attr("disabled", true);
                $('textarea').attr("disabled", true);
                $('select').attr("disabled", true);
                $('sup.text-red').hide();
                $('.col-submit').addClass("d-none");
            }
            editStat = !editStat;
        }

        changeEditStat();
    </script>
@stop