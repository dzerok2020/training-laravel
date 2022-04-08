@extends('dashboard')
@section('content')
    @foreach ($users as $user) {
    <tbody>
    <tr>
        <td>{{ $user->name }}</td>
    </tr>
    </tbody>
    @endforeach
@endsection