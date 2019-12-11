@extends('master')

@section('title')
  create student | student management
@endsection

@section('content')
<h2>Create New Student</h2>

<form class="form-horizontal" action="{{ route('store') }}" method="POST" data-parsley-validate>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
        </div>
    @endif

    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required max="10">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="registration_id">Registration Number:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="registration_id" id="registration_id" placeholder="Enter registration no" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="department_name">Department Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="department_name" id="department_name" placeholder="Enter department name" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="info">Info:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="info" id="info" rows="6" placeholder="Enter some information..."></textarea>
      </div>
    </div>
    
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-outline-success">Register student</button>
      </div>
    </div>
  </form>
@endsection

                
       