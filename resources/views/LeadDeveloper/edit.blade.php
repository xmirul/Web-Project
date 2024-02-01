@extends('home')
@section('content')
 
<div class="card">
  <div class="card-header">Update Lead Developer </div>
  <div class="card-body">
      
      <form action="{{ url('LeadDeveloper/' .$LeadDeveloper->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$LeadDeveloper->id}}" id="id" />
        <label>Lead ID</label></br>
        <input type="text" name="staffId" id="staffId" value="{{$LeadDeveloper->staffId}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$LeadDeveloper->name}}" class="form-control"></br>
        <label>Mail</label></br>
        <input type="text" name="mail" id="mail" value="{{$LeadDeveloper->mail}}" class="form-control"></br>
        <label>Project</label></br>
        <input type="text" name="project" id="project" value="{{$LeadDeveloper->project}}" class="form-control"></br>
        </br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    </form>
   
  </div>
</div>

@endsection