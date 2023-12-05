@extends('layouts.app')
@section('title')
    Edit Todo
@endsection
@section('content')
    <form action="" method="post" class="mt-4 p-4">
        <div class="form-group m-3">
            <label for="name">Todo name</label>
            <input type="text" class="form-control" name="" value="Name here">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo description</label>
            <textarea rows="3" class="form-control">Description here</textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Update">
        </div>
    </form>
@endsection