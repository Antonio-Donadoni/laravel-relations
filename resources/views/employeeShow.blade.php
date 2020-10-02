@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
      <h1>{{$emp -> first_name}} {{$emp -> last_name}} data:</h1>
      <ul>
            <li>Date of birth: {{$emp -> date_of_birth}} </li>
            <li>Personal Code: {{$emp -> personal_code}} </li>
            <br>
            <li>Place of Work: {{$emp -> location -> name}} </li>
            <li>Address: {{$emp -> location -> street}} - {{$emp -> location -> city}}({{$emp -> location -> country}}) </li>
            <br>
            <li>TASKS:
                <ul>
                  @foreach($emp -> tasks as $task)
                    <li>{{$task -> name}}: {{$task-> start_date}} - {{$task-> end_date}}</li>
                  @endforeach
                </ul>
            </li>
      </ul>
      <br>
      <a href="{{ route('employee.edit', $emp -> id)}}">EDIT</a>
      <a href="{{ route('employee.destroy', $emp -> id)}}">DELETE</a>
    </div>




</main>


@endsection
