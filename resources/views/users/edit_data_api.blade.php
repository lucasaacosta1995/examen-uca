@extends('layouts.uca')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Datos para API</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-xs-6 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">API TOKEN</label>
                                    <input type="text" disabled value="{{$user->api_token}}" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xs-6 col-sm-6">
                                <div class="form-group">
                                    <form method="post" action="{{ route('users.reset_api_token') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-warning">Generar API TOKEN</button>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>


@endsection
@section('scripts')
@endsection
