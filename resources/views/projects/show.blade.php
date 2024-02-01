@extends('home')
@section('content')
<!-- @can('isAdmin') -->

<div class="card">
    <div class="card-header">Projects Info</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Project ID: {{ $projects->projectID }}</h5>
                <p class="card-text">Project: {{ $projects->projectTitle }}</p>
                <p class="card-text">Lead Developer: {{ $projects->staffId }}</p>
                <p class="card-text">Developer: {{ $projects->developer }}</p>
                <p class="card-text">Start Date: {{ $projects->startDate}}</p>
                <p class="card-text">End Date: {{ $projects->endDate }}</p>
                <p class="card-text">Person In Charge: {{ $projects->pic }}</p>
                <p class="card-text">System Methodology: {{ $projects->methodology }}</p>
                <p class="card-text">System Platform: {{ $projects->platform }}</p>
                <p class="card-text">Deployment Type: {{ $projects->deploy }}</p>
                <p class="card-text">Project comment: {{ $projects->Description }}</p>
                <p class="card-text">Status Project: {{ $projects->status }}</p>
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
  <!-- @endcan -->