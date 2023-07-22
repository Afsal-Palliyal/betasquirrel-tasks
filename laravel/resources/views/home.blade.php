@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <h2>Users</h2>
    @if (session()->has('message'))
        <p>{{ session()->get('message') }}</p>
    @endif
    <a href="{{ route('create.user') }}" class="btn btn-primary" style="float: right">New</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('edit.user', encrypt($user->id)) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('delete.user', encrypt($user->id)) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
        </tbody>
      </table>
@endsection