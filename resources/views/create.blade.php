@extends('layouts.app')
@section('title')
    Create Todo
@endsection

@section('content')
    <form action="" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">Todo Name</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group m-3" >
            <label for="description">Todo Description</label>
            <textarea name="description"  rows="3" class="form-control"></textarea>
        </div>
        <div>
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>
@endsection