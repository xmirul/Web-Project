@extends('home')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row mb-4"
      <div class="col-md-12">
            <div class="navbar">
                <a class="active" href="{{ url('/home')}}">Home</a>
                    <a href="{{ url('/developers')}}">Developer</a>
                    <a href="{{ url('/managers')}}">Project Manager</a>
                    <a href="{{ url('/projects')}}">Project</a>
                    <a href="{{ url('/LeadDeveloper')}}">Lead Developer</a>
            </div>
        </div>
    </div>
</div>


<div class="card" style="width: 50rem;" style="margin-left: auto;">
    <div class="card-header">
        <h2>Managers Profile</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/managers/create') }}" class="btn btn-success btn-sm" title="Add New Developer">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br />
        <br />
        <div class="table-responsive">
            <table class="table" style="margin-left: auto; margin-right:0;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Manager ID</th>
                        <th>Name</th>
                        <th>Mail</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($managers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->staffId }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->mail }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ url('/managers/' . $item->id) }}" title="View Manager"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/managers/' . $item->id . '/edit') }}" title="Edit Manager"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/managers/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Manager" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>


 <div class="col-md-9">
 <style>
    
 </style>
            <style>
                .card {
                    margin: 0;
                    padding: 0;
                    width: 1200px;
                    background-color: #f1f1f1;
                    left: 450px;
                    height: 100%;
                    overflow: auto;
                }
            </style>

 @endsection