@extends('layout.app')

@section('title','List My Gallery')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <div class="col-md-12 mb-4">
                <a href="{{ url('/gallery/add') }}"><button class="btn btn-primary text-end">Add</button></a>    
            </div>
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $index => $gallery)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $gallery->name }}</td>
                                <td>{{ $gallery-> description }}</td>
                                <td><img src="{{ asset($gallery->image) }}" class="img-thumbnail" width="100" height="100"/></td>
                                <td>
                                    <a href="{{ url('/gallery/edit') }}/{{ ($gallery->id) }}"><button class="btn btn-success">Edit</button></a>
                                    <a href="{{ route('processDeleteGallery',$gallery->id) }}"><button class="btn btn-danger">Delete</button></a> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection