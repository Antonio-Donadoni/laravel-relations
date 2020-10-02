@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
      <h1>EMPLOYEES LIST</h1>
      <ul>
        @foreach ($emps as $emp)
          <a href="{{ route ('employee.show', $emp -> id )}}">
            <li> {{$emp -> first_name}} {{$emp -> last_name}}</li>
          </a>
        @endforeach
      </ul>
      <br><br>
      <a href="{{ route ('employee.create')}}">CREATE NEW EMPLOYEE</a>
    </div>


</main>


@endsection
