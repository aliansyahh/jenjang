@extends('layouts.template')

@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Ubah Data Program</strong>
            </div>
            <div class="pull-right">
                <a href="{{url('/Programs')}}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{url('/Programs')}}/{{$program->id}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Program</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama')
                                is-invalid
                            @enderror" autocomplete="off" value="{{old('nama',$program->nama)}}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                              </div>
                                
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="edulevel_id" class="form-label">Edulevel</label>
                            <select name="edulevel_id" id="edulevel_id" class="form-control @error('edulevel_id')
                                is-invalid
                            @enderror">
                                <option value="">-- Pilih --</option>

                                @foreach ($edulevel as $item)
                                    <option value="{{$item->id}}" {{old('edulevel_id',$item->id)  == $item->id? 'selected':'' }}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                            @error('edulevel_id')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                    
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="studen_price" class="form-label">Harga Member</label>
                            <input type="text" name="studen_price" id="studen_price" class="form-control @error('studen_price')
                                is-invalid
                            @enderror" value="{{old('studen_price',$program->studen_price)}}">
                            @error('studen_price')
                            <div class="invalid-feedback">
                                {{$message}}
                              </div>
                                
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="student_max" class="form-label">Jumlah Member Max</label>
                            <input type="text" name="student_max" id="student_max" class="form-control @error('student_max')
                                is-invalid
                            @enderror" value="{{old('student_max',$program->student_max)}}">
                            @error('student_max')
                            <div class="invalid-feedback">
                                {{$message}}
                              </div>
                                
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="info" class="form-label">Info</label>
                            <textarea class="form-control @error('info')
                                is-invalid
                            @enderror" name="info" id="info" >{{old('info',$program->info)}}</textarea>
                            @error('info')
                            <div class="invalid-feedback">
                                {{$message}}
                              </div>
                                
                            @enderror
                        </div>
                        <button type="submit"  class="btn btn-primary">ubah Data</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
</div>


    
@endsection