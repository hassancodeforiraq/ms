@extends('layouts.go')

@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Ticket</div>
                    @if(count($errors)>0)
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li class="font-weight-bold"> {{ $error}} </li>
                        @endforeach
                    </ul>
                    @endIf

                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <a href="{{ route('tickets') }}" class="alert-link">Show all</a>
                        {{Session::get('success')}}
                     </div>
                    @endif
                    {{-- @include('inc.message') --}}
                <div class="card-body">
                <form action="{{ route('tickets.store') }}" method="POST">
                @csrf
                    
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter Name" value="{{ old('name') }}" autocomplete="off">
                    </div>


                    <div class="container w-100">
                        <input type="text" class="js-range-slider" name="age" value="{{ old('age') }}"
                        data-skin="big"
                        data-min="0"
                        data-max="110"
                       
                       
                    />
                </div>
                    {{-- <div class="form-group">
                        <label>Age:</label>
                        <input type="number" class="form-control" name="age"  placeholder="Enter Age" value="{{ old('age') }}">
                    </div> --}}
                    {{-- <div>
                        <input type="hidden" name="gender" value="" id="">
                        <input type="checkbox" name="gender" value="" id="">
                    </div> --}}
                     <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="gender[]" id="gender"  value="1"
                        {{ (is_array(old('gender')) && in_array(1, old('gender'))) ? ' checked' : '' }}
                        >                       
                        <label class="custom-control-label" for="gender">Mirred or Unmarred</label>
                      </div>
                    {{-- <div class="form-group">
                        <label>Gender:</label>
                        <input type="text" class="form-control" name="gender" placeholder="Enter Gender" value="{{ old('gender') }}">
                    </div> --}}

                    {{-- <div class="form-group">
                        <label>Sex:</label>
                        <input type="text" class="form-control" name="sex"  placeholder="Enter M or F or K" value="{{ old('sex') }}" autocomplete="off">
                    </div> --}}

                    <select class="custom-select" name="sex"  value="{{ old('sex') }}">
                          <option value="mail">Male</option>
                          <option value="femail">Female</option>
                          <option value="know">K</option>
                    </select>

                    <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1" class="bg-danger">One</option>
                        <option value="1" class="bg-danger">One</option>
                        <option value="1" class="bg-danger">One</option>
                        <option value="1" class="bg-danger">One</option>
                        <option value="1" class="bg-danger">One</option>
                        <option value="1" class="bg-danger">One</option>
                        <option value="3" class="bg-warning">Three</option>
                        <option value="3" class="bg-warning">Three</option>
                        <option value="3" class="bg-warning">Three</option>
                        <option value="3" class="bg-warning">Three</option>
                        <option value="3" class="bg-warning">Three</option>
                        <option value="3" class="bg-warning">Three</option>
                        <option value="3" style="background:#f1c40f;color:#FFF">Three</option>
                        <option value="2" style="background:#2ecc71;color:#FFF">Two</option>
                        <option value="2" class="bg-success">Two</option>
                        <option value="2" class="bg-success">Two</option>
                        <option value="2" class="bg-success">Two</option>
                        <option value="2" class="bg-success">Two</option>
                        <option value="2" class="bg-success">Two</option>
                        <option value="2" class="bg-success">Two</option>
                        <option value="2" class="bg-success">Two</option>
                        <option value="2" class="bg-success">Two</option>
                      </select>


                    <div class="form-group">
                        <label>PLace:</label>
                        <input type="text" class="form-control" name="place" placeholder="Enter PLace" value="{{ old('place') }}">
                        <strong class="float-right text-info">{{ $errors->first('place') }}</strong>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{ old('phone') }}">
                        <strong class="float-right">{{ $errors->first('phone') }}</strong>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
