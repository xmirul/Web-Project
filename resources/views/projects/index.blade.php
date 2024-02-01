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


<div class="card" style="width: 100rem;" style="margin-right: auto;">
    <div class="card-header" >
        <h2>Project Lists</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/projects/create') }}" class="btn btn-success btn-sm" title="Add New projects ">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br />
        <br />
        <div class="table-responsive">
            <table class="table" style="margin-left: auto; margin-right: 0;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Project ID</th>
                        <th>Project Title</th>
                        <th>Lead Developer</th>
                        <th>Developer</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Person In Charge</th>
                        <th>Methodology</th>
                        <th>System Platforms</th>
                        <th>Deployment Type</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->projectID}}</td>
                        <td>{{ $item->projectTitle}}</td>
                        <td>{{ $item->staffId}}</td>
                        <td>{{ $item->developer}}</td>
                        <td>{{ $item->startDate}}</td>
                        <td>{{ $item->endDate}}</td>
                        <td>{{ $item->pic}}</td>
                        <td>{{ $item->methodology}}</td>
                        <td>{{ $item->platform}}</td>
                        <td>{{ $item->deployment}}</td>
                        <td>{{ $item->Description}}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <!-- <a href="{{ url('/projects/' . $item->id) }}" title="View Projects"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->

                            <a href="{{ url('/projects/' . $item->id . '/edit') }}" title="Edit Projects"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/projects/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Projects" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                    width: 1500px;
                    background-color: #f1f1f1;
                    left: 30px;
                    height: 100%;
                    overflow: auto;
                }
            </style>



@endsection

