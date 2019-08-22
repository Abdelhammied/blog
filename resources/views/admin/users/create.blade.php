@extends('admin.layouts.master')



@section('content')

<form style="display:inline-block" method="POST" action="{{ route('admin.users.store') }}">
        {{ csrf_field() }}
        
        <div class="form-group">
        <input type="text" name="name"><br>
        <input type="text" name="email"><br>
        <input type="password" name="password"><br>


        <button type="submit" class="btn btn-success">Create</button>
    </div>
    </form>

@endsection