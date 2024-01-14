@extends('offering.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Offerings Information</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/offering/create') }}" class="btn btn-success btn-sm" title="Add New offers">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Offering Name</th>
                                        <th>Specialty Offered</th>
                                        <th>Duration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($offerings as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->offering_name }}</td>
                                        <td>{{ $item->specialty_offered }}</td>
                                        <td>{{ $item->duration }}</td>
                                        >
 
                                        <td>
                                            <a href="{{ url('/offering/' . $item->id) }}" title="View offering"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/offering/' . $item->id . '/edit') }}" title="Edit offering"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/offering' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete offering" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{url('http://127.0.0.1:8000/home')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection