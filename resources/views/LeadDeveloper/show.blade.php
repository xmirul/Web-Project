@extends('home')
@section('content')
 
 
<div class="card">
  <div class="card-header">Lead Developers Information</div>
     <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Lead Developer ID: {{ $LeadDeveloper->staffId }}</h5>
            <p class="card-text">Name: {{ $LeadDeveloper->name }}</p>
            <p class="card-text">Email: {{ $LeadDeveloper->mail }}</p>
            <p class="card-text">Project: {{ $LeadDeveloper->project }}</p>
        </div>
     </div>  
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