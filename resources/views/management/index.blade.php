@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Management</h4>
                    <p><a href="{{ route('management.create') }}" type="button" class="btn btn-secondary">New</a></p>
                </div>

                <div class="card-body">
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($users->load('role') as $user)
                                <tr>
                                    <th scope="row">{{ $user->name }}</th>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ucfirst($user->role->type) }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{ route('management.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('management.edit', $user->id) }}" type="button" class="btn btn-secondary btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                          @endforeach

                        </tbody>
                      </table>
                      {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
