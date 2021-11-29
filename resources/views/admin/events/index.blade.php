@extends('admin.layouts.master')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>welcome_description</td>
                <td>open_time</td>
                <td>close_time</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->name}}</td>
                    <td>{{$event->welcome_description}}</td>
                    <td>{{$event->open_time}}</td>
                    <td>{{$event->close_time}}</td>
                    {{--                    <td>{{$event>Email}}</td>--}}

                    <td><a href="{{ route('events.edit', $event->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('events.destroy', $event->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
