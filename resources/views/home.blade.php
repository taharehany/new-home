@extends('admin.layouts.master')
@section('title') @lang('general.dashboard') @endsection

@section('content')
    <div class="main-content">
        <!--home-->
        <div class="boxs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 outer">
                        <div class="box">
                            <div class="data">
                                <h2>Pickup Pickup </h2><span>36524</span><a href="">see all <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="icon"><i class="fa fa-phone"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 outer">
                        <div class="box">
                            <div class="data">
                                <h2>Pickup</h2><span>36524</span><a href="">see all <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="icon"><i class="fa fa-phone"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 outer">
                        <div class="box">
                            <div class="data">
                                <h2>Pickup</h2><span>36524</span><a href="">see all <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="icon"><i class="fa fa-phone"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 outer">
                        <div class="box">
                            <div class="data">
                                <h2>Pickup</h2><span>36524</span><a href="">see all <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="icon"><i class="fa fa-phone"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="global-area mtb">
            <div class="container-fluid">
                <div class="title">
                    <h2>Statics</h2>
                </div>
                <div class="table-responsive table-responsive-data">
                    <table class="table table-data custom">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>Type</th>
                                <th>Quantity </th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-shadow">
                                <td>the name</td>
                                <td>Room</td>
                                <td>12</td>
                                <td>active</td>
                                <td>
                                    <div class="table-data-feature">
                                        <button class="item edit" title="Edit"><i
                                                class="fas fa-pencil-alt"></i>edit</button>
                                        <button class="item delete" title="Delete" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="far fa-trash-alt"> </i>delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="tr-shadow">
                                <td>the name</td>
                                <td>Room</td>
                                <td>12</td>
                                <td>active</td>
                                <td>
                                    <div class="table-data-feature">
                                        <button class="item edit" title="Edit"><i
                                                class="fas fa-pencil-alt"></i>edit</button>
                                        <button class="item delete" title="Delete" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="far fa-trash-alt"> </i>delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="tr-shadow">
                                <td>the name</td>
                                <td>Room</td>
                                <td>12</td>
                                <td>active</td>
                                <td>
                                    <div class="table-data-feature">
                                        <button class="item edit" title="Edit"><i
                                                class="fas fa-pencil-alt"></i>edit</button>
                                        <button class="item delete" title="Delete" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="far fa-trash-alt"> </i>delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
        <!-- Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                        <button class="close-btn" type="button" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete "the name" from table ?</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button">Delete</button>
                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!--home-->
    </div>
@endsection
