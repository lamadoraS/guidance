@extends('counselor.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Counselor Information</h2>
                    </div>
                    @if(auth()->user()->role =='admin')
                    <div class="card-body">
                        <a href="{{ url('/counselor/create') }}" class="btn btn-success btn-sm" title="Add New Counselor">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        @endif
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email Address</th>
                                        <th>Specialization</th>
                                        <th>Office Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($counselors as $item)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td>{{ $item->email_address }}</td>
                                        <td>{{ $item->specialization }}</td>
                                        <td>{{ $item->office_location }}</td>
                                    
                                        @if(auth()->user()->role =='admin')
                                        
 
                                        <td>
                                            <a href="{{ url('/counselor/' . $item->id) }}" title="View counselor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/counselor/' . $item->id . '/edit') }}" title="Edit counselor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/counselor' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Counselor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                            <div class="p-3">{{$counselors->links()}}</div>
                            <div class="p-3">   
                             <a href="{{url('http://127.0.0.1:8000/home')}}" class="btn btn-primary">Back</a></div>
             
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection