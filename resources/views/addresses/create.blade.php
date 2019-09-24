@extends('layouts.layout',['title'=>'Create address'])


@section('content')

    <form action="{{route('address.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Create new address</h3>
        <div class="form-group">
            <h4>New IP</h4>
            <input type="text" class="form-control" name="ip" autofocus>
        </div>
        <div class="form-group">
            <h4>New Port</h4>
            <input type="text" class="form-control" name="port">
        </div>
        <div class="form-group">
            <input type="file" name="file">
        </div>
        <input type="submit" value="Create address" class="btn btn-outline-success">
    </form>

@endsection
