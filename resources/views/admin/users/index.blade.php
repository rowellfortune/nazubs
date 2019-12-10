@extends('layouts.admin')
@section('content')
<div class="table-activated">
    @if($users->count() > 0)
      <h5>Activated Users</h5>
      <table class="table">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Created</th>
          <th>Status</th>
        </tr>
        @foreach($users as $user)
          <tr>
            
            <td>{{ $user->name}}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->is_active }}</td>
            {{-- <td>{{ $artist->popularity }}</td>
            <td>{{ $artist->created_at->diffForHumans() }}</td> --}}
            
          </tr>
        @endforeach
      </table>
    @else
      No artists
    @endif
  </div>
@endsection     