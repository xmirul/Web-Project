@extends('home')
@section('content')
  
<div class="card">
  <div class="card-header">Developers Information</div>
        <div class="card-body">
    
            <div class="card-body">
                <h5 class="card-title">Developer ID : {{ $developers->staffId }}</h5>
                <p class="card-text">Name: {{ $developers->name }}</p>
                <p class="card-text">Email: {{ $developers->mail }}</p>
                <p class="card-text">Lead Developer: {{ $developers->LeadDeveloper }}</p>
                <p class="card-text">Project: {{ $developers->project }}</p>
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