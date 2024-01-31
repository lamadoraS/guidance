@extends('appointment.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Appointment Information</h2>
                    </div>
                    @if(auth()->user()->role =='admin')
                    <div class="card-body">
                        <a href="{{ url('/appointment/create') }}">
                        </a>
                        @endif
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Preferred Counselor</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Time</th>
            
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($appointments as $item)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $item->preferred_counselor }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time }}</td>
                                    
                                    
                                        @if(auth()->user()->role =='admin')
                                        
 
                                        <td>
                                            <a href="{{ url('/appointment/' . $item->id) }}" title="View Appointment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/appointment/' . $item->id . '/edit') }}" title="Edit Appointment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/appointment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Appointment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                            <div class="p-3">{{$appointments->links()}}</div>
                            <div class="p-3">   
                             <a href="{{url('http://127.0.0.1:8000/home')}}" class="btn btn-primary">Back</a></div>
             
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection