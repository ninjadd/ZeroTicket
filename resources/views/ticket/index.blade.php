@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tickets</h4>
                    <p><a href="#" type="button" class="btn btn-secondary">New</a></p>
                </div>

                <div class="card-body">

                    <table class="table table-hover table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>ID#</th>
                            <th>Subject</th>
                            <th>To</th>
                            <th>From</th>
                            <th>Assigned</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Category</th>
                            <th>Department</th>
                            <th>Read</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($tickets->load(['receiver', 'assigned', 'user', 'status', 'priority', 'category', 'department']) as $ticket)
                                <tr>
                                    <td><strong>{{ $ticket->id }}</strong></td>
                                    <td>{{ Str::limit($ticket->subject, 120, '...') }}</td>
                                    <td>{{ $ticket->receiver->name }}</td>
                                    <td>{{ $ticket->user->name }}</td>
                                    <td>{{ $ticket->assigned->name }}</td>
                                    <td>{{ $ticket->status->name }}</td>
                                    <td>{{ $ticket->priority->name }}</td>
                                    <td>{{ $ticket->category->name }}</td>
                                    <td>{{ $ticket->department->name }}</td>
                                    <td>{{ ($ticket->is_read) ? 'Yes' : 'No' }}</td>
                                </tr>
                          @endforeach

                        </tbody>
                      </table>
                      {{ $tickets->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
