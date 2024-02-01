@extends('home')
@section('content')

<div class="card">
  <div class="card-header">Update projects</div>
  <div class="card-body">

    <form action="{{ url('projects/' .$projects->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$projects->id}}" id="id" />
      <label>ProjectID</label></br>
      <input type="text" name="projectID" id="projectID" value="{{$projects->projectID}}" class="form-control"></br>
      <label>Project Title</label></br>
      <input type="text" name="projectTitle" id="projectTitle" value="{{$projects->projectTitle}}" class="form-control"></br>
      <label>Lead Developer</label></br>
      <input type="text" name="staffId" id="staffId" value="{{$projects->staffId}}" class="form-control"></br>
      <label>Developer</label></br>
      <input type="text" name="developer" id="developer" value="{{$projects->developer}}" class="form-control"></br>
      <label>Start Date</label></br>
      <input type="text" name="startDate" id="startDate" value="{{$projects->startDate}}" class="form-control"></br>
      <label>End Date</label></br>
      <input type="text" name="endDate" id="endDate" value="{{$projects->endDate}}" class="form-control"></br>
      <label>Person In Charge</label></br>
      <input type="text" name="pic" id="pic" value="{{$projects->pic}}" class="form-control"></br>
      <label>Methodology</label></br>
      <input type="text" name="methodology" id="methodology" value="{{$projects->methodology}}" class="form-control"></br>
      <label>System Platforms</label></br>
      <input type="text" name="platform" id="platform" value="{{$projects->platform}}" class="form-control"></br>
      <label>Deployment Type</label></br>
      <input type="text" name="deployment" id="deployment" value="{{$projects->deployment}}" class="form-control"></br>
      <label>Description</label></br>
      <input type="text" name="Description" id="Description" value="{{$projects->Description}}" class="form-control"></br>
      <label>Status</label></br>
      <input type="text" name="status" id="status" value="{{$projects->status}}" class="form-control"></br>
      </br>
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