@extends('admin.layouts.master')



@section('content')
<div class="text-right mb-3">
        <a href="{{ route('admin.users.create') }}" class="btn btn-success" >Create</a>
</div>

    <table class="table table-bordered">
        <thead>
            
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Actions</th>
            
        </thead>
           <tbody>


          
        @foreach($users as $user)
               
        
                    <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary">
                            View
                        </a>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success">
                            Edit
                        </a>

                            <form style="display:inline-block" method="POST" action="{{ route('admin.users.destroy', $user->id) }}">
                                {{ csrf_field() }}
                                @method('DELETE') 
                      
                                <button type="submit" class="btn btn-danger">Delete</button>
                            
                            </form>
                            
                        
                    </td>
                    </tr>
            

        @endforeach
    </tbody>
    </table>  

@endsection