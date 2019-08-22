@extends('admin.layouts.master')



@section('content')

<form style="display:inline-block" method="POST" action="{{ route('admin.users.update', $user->id) }}">
        {{ csrf_field() }}
        @method('PUT')
        <div class="form-group">
        <input type="text" name="name" value="{{ $user->name }}"><br>
        <input type="text" name="email" value="{{ $user->email }}"><br>
        


        <button type="submit" class="btn btn-success">Update</button>
    </div>
    </form>


@endsection