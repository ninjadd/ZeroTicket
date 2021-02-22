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
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @can('manage', Auth::user())
                        <p><a class="btn btn-secondary" href="{{ route('management.index') }}">User Management</a></p>
                    @endcan
                    <p><a class="btn btn-secondary" href="{{ route('tickets.index', Auth::user()->id) }}">{{ Auth::user()->name }}'s Tickets ({{ $ticket_count }})</a></p>
                    <p><a class="btn btn-secondary" href="{{ route('tickets.index') }}">All Tickets</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
