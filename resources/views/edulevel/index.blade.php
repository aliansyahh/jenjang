@extends('layouts.template')

@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Data Jenjang</strong>
            </div>
            <div class="pull-right">
                <a href="{{url('/Edulevels/create')}}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Add
                </a>
            </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <div class="card-body table-responsive">
            <div class="animated fadeIn">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Desc</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($edulevel as $item)
                       
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->desc}}</td>
                            <td class="text-center">
                                <a href="{{url('Edulevels/')}}/{{$item->id}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{url('/Edulevels')}}/{{$item->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ?')" >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    
@endsection