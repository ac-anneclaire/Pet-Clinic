@extends('layout.master')

@section('content')

<h1>{{ $appointments->client_name }}</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Client ID</th>
        <th scope="col">Client Name</th>
        <th scope="col">Appointment Time</th>
        <th scope="col">Date Appointed</th>


        {{-- <th scope="col">Content</th>
        <th scope="col">Action</th> --}}

      </tr>
    </thead>
    <tbody>
   
        <tr>
            <th scope="row">{{ $appointments->id }}</th>
            <td>{{ $appointments->client_name }}</td>
            <td>{{ $appointments->time }}</td>
            <td>{{ $appointments->created_at }}</td>
            <td>

            </td>
        </tr>

      
    </tbody>
  </table>
<a href="/appointments" class="btn btn-success btn-sm m-2">Back</a>


@endsection