@extends('home')
@section('content')

<div class="card">
  <div class="card-header">Projects Page</div>
  <div class="card-body">

    <form action="{{ url('projects') }}" method="post">
      {!! csrf_field() !!}
      <label>projectID</label></br>
      <input type="text" name="projectID" id="projectID" class="form-control"></br>
      <label>Title Of Project</label></br>
      <input type="text" name="projectTitle" id="projectTitle" class="form-control"></br>
      <label>Lead Developer</label></br>
      <input type="text" name="staffId" id="staffId" class="form-control"></br>
      <label>Developer</label></br>
      <input type="text" name="developer" id="developer" class="form-control"></br>
      <label>StartDate</label></br>
      <input type="date" name="startDate" id="startDate" class="form-control"></br>
      <label>End Date</label></br>
      <input type="date" name="endDate" id="endDate" class="form-control"></br>
      <label>PIC</label></br>
      <input type="text" name="pic" id="pic" class="form-control"></br>
      <label>Methodology</label></br>
      <input type="text" name="methodology" id="methodology" class="form-control"></br>
      <label>System Platforms</label></br>
      <input type="text" name="platform" id="platform" class="form-control"></br>
      <label>Deployment Type</label></br>
      <input type="text" name="deployment" id="deployment" class="form-control"></br>
      <label>Description</label></br>
      <input type="text" name="Description" id="Description" class="form-control"></br>
      <label>status</label></br>
      <input type="text" name="status" id="status" class="form-control"></br>
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