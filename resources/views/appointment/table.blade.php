@extends('layout.master')

@section('content')

    <h1>YOUR APPOINTMENTS</h1>
    {{-- {{$appointments}} --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Client ID</th>
            <th scope="col">Client Name</th>
            <th scope="col">Time</th>
            <th scope="col">Date</th>
            <th scope="col">Purpose</th>
            <th scope="col">Appointment Status</th>
           


            {{-- <th scope="col">Content</th>
            <th scope="col">Action</th> --}}

          </tr>
        </thead>
        <tbody>
        @foreach ($appointments as $appointments)
            <tr>
                <th scope="row">{{ $appointments->id }}</th>
                <td>{{ $appointments->client_name }}</td>
                <td>{{ $appointments->time }}</td>
                <td>{{ $appointments->date }}</td>
                <td>{{ $appointments->purpose}}</td>
                <td>{{ $appointments->status}}</td>
                <td>
                
                    <div class="d-flex justify-content-start ">
                        <form action="/appointments/{{$appointments->id}}" method="POST"> 
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-xs m-2">Cancel</button>
                        </form>

                    </div>
                </td>
            </tr>
        @endforeach
          
        </tbody>
      </table>
<style>
  *{
    margin: 10px;
  }
</style>
@endsection