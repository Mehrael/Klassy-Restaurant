<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>

<div class="container-scroller">
    @include("admin.navbar")

    <div class="container" style="position: relative;">
        <br>
        <h1>Reservations</h1>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Number of guests</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Message</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php($id = 0)

            @foreach($data as $data)
                @php($id++)
                <tr align="center">
                    <th scope="row">{{$id}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->guest}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time}}</td>
                    <td>{{$data->message}}</td>


                        <td><a href="{{url('/deleteUser',$data->id)}}">Delete</a></td>

                </tr>
            @endforeach

            </tbody>
        </table>
        <br>
    </div>
        <br>

</div>

@include("admin.adminscript")
</body>
</html>
