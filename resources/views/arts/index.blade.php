@extends('backend_layouts.app')
 
@section('content')
                                <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @endif
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Source</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th width="230">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($arts as $id)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td><img src="{{ url('uploads/'.$id->source) }}" style="width: 300px;height:auto"></td>
                                                <td>{{ $id->name }}</td>
                                                <td>{{ $id->category }}</td>
                                                <td>
                                                    <form action="{{ route('arts.destroy',$id->id) }}" method="POST">
                                       
                                                        <a class="btn btn-primary" href="{{ route('arts.edit',$id->id) }}">Edit</a>
                                       
                                                        @csrf
                                                        @method('DELETE')
                                          
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach                                   
                                        </tbody>
                                    </table>
                                    {!! $arts->links() !!}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
    
@endsection