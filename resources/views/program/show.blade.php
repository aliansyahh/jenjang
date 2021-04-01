@extends('layouts.template')

@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Data Jenjang</strong>
            </div>
            <div class="pull-right">
                <a href="{{url('/Programs')}}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <div class="card-body table-responsive">
            <div class="col-md-8 offset-md-2">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th style="width: 30%">Nama Program</th>
                            <td>{{$program->nama}}</td>
                        </tr>
                        <tr>
                            <th>Edulevel</th>
                            <td>{{$program->Edulevel->nama}}</td>
                        </tr>
                        <tr>
                            <th>Student Price</th>
                            <td>{{$program->studen_price}}</td>
                        </tr>
                        <tr>
                            <th>Student Max</th>
                            <td>{{$program->student_max}}</td>
                        </tr>
                        <tr>
                            <th>Info</th>
                            <td>{{$program->info}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    
@endsection