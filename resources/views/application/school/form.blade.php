@extends('layout.application')
@section('title', 'Sekolah')
@section('menu-parent', 'master')
@section('content')
    <div class="content">
        <div class="container-xl">
            <div class="page-header text-white d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="page-pretitle">
                            Data Dasar
                        </div>
                        <h2 class="page-title">
                            Sekolah
                        </h2>
                    </div>
                </div>
            </div>
            <form method="POST" enctype="multipart/form-data" action="">
                {{ csrf_field() }}
                <div class="row row-deck row-cards">
                    <div class="col-12 d-block">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Nama <sup class="font-bold text-red">*</sup>
                                    </label>
                                    <input name="name" required="" value="{{ $admSchool->name }}" type="text" maxlength="100" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Email <sup class="font-bold text-red">*</sup>
                                    </label>
                                    <input name="email" required="" value="{{ $admSchool->email }}" type="email" maxlength="100" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Telp <sup class="font-bold text-red">*</sup>
                                    </label>
                                    <input name="telp" required="" value="{{ $admSchool->telp }}" type="text" maxlength="100" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Fax <sup class="font-bold text-red">*</sup>
                                    </label>
                                    <input name="fax" required="" value="{{ $admSchool->fax }}" type="text" maxlength="100" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Alamat <sup class="font-bold text-red">*</sup>
                                    </label>
                                    <textarea name="address" required="" class="form-control" maxlength="255" name="address">{{ $admSchool->address }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Warna
                                    </label>
                                    <input name="color" value="{{ $admSchool->color }}" type="color" class="form-control" style="width: 200px; max-width: 100%;">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        {{ $admSchool->logo ? "Ganti" : "" }} Logo
                                    </label>
                                    <div class="form-control">
                                        <input type="file" accept="image/*" name="attch">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <a href="">
                            <button type="button" class="btn btn-md btn-secondary mr-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg> Kembali
                            </button>  
                        </a>
                    </div>
                    <div class="col-6">
                        <button name="submit-save" class="btn btn-md btn-primary ml-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg> Simpan
                        </button>  
                    </div>
                </div>
            </form>
        </div>
        @include("assets.copyright")
    </div>
@stop