@extends('layouts.app')

@section('content')
<h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eum excepturi ipsum mollitia necessitatibus tempora. Minima, quidem voluptates. Aspernatur corporis doloremque fuga impedit incidunt perspiciatis quisquam sint tempore veritatis voluptatum.
    </p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>

@endsection
