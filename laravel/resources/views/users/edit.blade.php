@extends('layouts.master')
@section('title', 'Home')
@section('content')
  <form action="{{ route('update.user') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ encrypt($user->id) }}">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <label>Date Of Birth</label>
        <input type="text" name="date_of_birth" value="{{ $user->date_of_birth }}" class="form-control" placeholder="Date of birth">
      </div>
      <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status">
            <option value="1" @if($user->status == 1) selected="selected" @endif>Active</option>
            <option value="0" @if($user->status == 0) selected="selected" @endif>Inactive</option>
        </select>
      </div><br/>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
