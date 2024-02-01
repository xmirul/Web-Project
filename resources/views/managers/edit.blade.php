@extends('home')
@section('content')
 
<div class="card">
  <div class="card-header">Update Managers </div>
  <div class="card-body">
      
      <form action="{{ url('managers/' .$managers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$managers->id}}" id="id" />
        <label>StaffId</label></br>
        <input type="text" name="staffId" id="staffId" value="{{$managers->staffId}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$managers->name}}" class="form-control"></br>
        <label>Mail</label></br>
        <input type="text" name="project" id="project" value="{{$managers->mail}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="project" id="project" value="{{$managers->status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    </form>
   
  </div>
</div>

<style>
    .card {
    margin: 0;
    padding: 0;
    width: 1200px;
    background-color: #f1f1f1;
    left: 111px;
    height: 100%;
    overflow: auto;
    }
</style>
 
@endsection