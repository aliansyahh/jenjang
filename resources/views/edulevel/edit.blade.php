@extends('layouts.template')

@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Edit Data Jenjang</strong>
            </div>
            <div class="pull-right">
                <a href="{{url('/Edulevels')}}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{url('/Edulevels')}}/{{$edulevel->id}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="nama" class="form-label">Jenjang</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama')
                                is-invalid
                            @enderror" autocomplete="off" value="{{old('nama',$edulevel->nama)}}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                              </div>
                                
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="desc" class="form-label">Desc</label>
                            <textarea class="form-control @error('nama')
                                is-invalid
                            @enderror" name="desc" id="desc" >{{old('desc',$edulevel->desc)}}</textarea>
                            @error('desc')
                            <div class="invalid-feedback">
                                {{$message}}
                              </div>
                                
                            @enderror
                        </div>
                        <button type="submit"  class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
</div>


    
@endsection