@extends('home')
@section('content')
 
<div class="card">
  <div class="card-header">Update Developers </div>
  <div class="card-body">
      
      <form action="{{ url('developers/' .$developers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$developers->id}}" id="id" />
        <label>StaffId</label></br>
        <input type="text" name="staffId" id="staffId" value="{{$developers->staffId}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$developers->name}}" class="form-control"></br>
        <label>Mail</label></br>
        <input type="text" name="mail" id="mail" value="{{$developers->mail}}" class="form-control"></br>
        <label>LeadDeveloper</label></br>
        <input type="text" name="LeadDeveloper" id="LeadDeveloper" value="{{$developers->LeadDeveloper}}" class="form-control"></br>
        <label>Project</label></br>
        <input type="text" name="project" id="project" value="{{$developers->project}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    </form>
   
  </div>
</div>

<style>

</style>
 
@endsection