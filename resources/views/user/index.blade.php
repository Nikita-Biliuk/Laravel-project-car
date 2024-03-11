@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Savininkas</th>
            <th scope="col">Email</th>
            <th scope="col">Automobiliai</th>
            <th scope="col">Automobiliu marke</th>
            <th scope="col">Automobiliu reg. numeris</th>
            <th scope="col">Veiksmai</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }} {{ $user->surname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->cars->count() }}</td>
                <td>
                    @foreach ($user->cars as $car)
                        {{ $car->brand }},
                    @endforeach
                </td>
                <td>
                    @foreach ($user->cars as $car)
                        {{ $car->reg_number }},
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Redaguoti</a>
                    <form action="{{ route('user.delete', $user->id) }}" method="post" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Ištrinti</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
