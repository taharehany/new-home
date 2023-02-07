@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="global-area mtb">
        <div class="container-fluid">
            <div class="form">
                <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>about</label>
                                <input class="form-control" type="text" name="about" placeholder="about" value="{{ old('about', $data->about) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" placeholder="whatsapp" value="{{ old('whatsapp', $data->whatsapp) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>mobile</label>
                                <input class="form-control" type="text" name="mobile" placeholder="mobile" value="{{ old('mobile', $data->mobile) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>email</label>
                                <input class="form-control" type="email" name="email" placeholder="email" value="{{ old('email', $data->email) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>address</label>
                                <input class="form-control" type="address" name="address" placeholder="address" value="{{ old('address', $data->address) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>logo</label>
                                <img  src="{{ asset($data->logo) }}">
                                <input class="form-control" type="file" name="logo" accept=".png, .jpg, .jpeg, .svg" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-btn">
                                <button class="btn btn-primary hvr-sweep-to-top" type="submit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
