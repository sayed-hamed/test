@extends('welcome')

@section('content')

    <div class="container mt-5">
        <a class="btn btn-primary mb-3" href="{{route('create')}}">create</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1 ?>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection



@section('script')

@endsection
