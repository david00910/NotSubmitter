@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    @if(count($messages) > 0)

        @foreach($messages as $message)

            <ul class="list-group">
                <li class="list-group-item text-primary">Name: {{$message->name}}</li>
                <li class="list-group-item text-primary">Email: {{$message->email}}</li>
                <li class="list-group-item text-primary">Message: {{$message->message}}</li><br/>
            </ul>

        @endforeach

    @endif
@endsection


