@extends('home')
@section('content')
 
<div class="card">
  <div class="card-header">Lead Developers Page</div>
  <div class="card-body">
      
      <form action="{{ url('LeadDeveloper') }}" method="post">
        {!! csrf_field() !!}
        <label>Lead ID</label></br>
        <input type="text" name="staffId" id="staffId" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Mail</label></br>
        <input type="text" name="mail" id="mail" class="form-control"></br>
        <label>Project</label></br>
        <input type="text" name="project" id="project" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
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