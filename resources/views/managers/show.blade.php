@extends('home')
@section('content')
 
<div class="card">
    <div class="card-header">Managers Information</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-text">Manager ID : {{ $managers->staffId }}</h5>
                <p class="card-text">Name : {{ $managers->name }}</p>
                <p class="card-text">Mail : {{ $managers->mail }}</p>
                <p class="card-text">Status: {{ $managers->status }}</p>
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