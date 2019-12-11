@extends('layouts.app')

@section('content')
<body bgcolor="#11KK00"></body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<center>
<div class="buttton">
    <form action="{{route('importExport')}}" method="get">
        <button class="btn btn-info" type="submit">Data</button>
    </form>
</div>
</center>
@endsection
