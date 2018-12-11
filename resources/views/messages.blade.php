@extends('layouts.app')

@section('content')

    @if(count($messages) > 0)

        @foreach($messages as $message)

            <ul class="list-group">
                <li class="list-group-item text-primary"><strong>Name:</strong> {{$message->name}}</li>
                <li class="list-group-item text-dark"><strong>Email:</strong> {{$message->email}}</li>
                <li class="list-group-item text-dark"><strong>Message:</strong> {{$message->message}}</li><br/>
            </ul>

        @endforeach

    @endif
@endsection


