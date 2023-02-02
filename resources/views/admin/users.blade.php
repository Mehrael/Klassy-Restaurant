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

    <div class="container" style="position: relative; width: 50%">
        <br>
        <h1>Users & Admins</h1>
        <br>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php($id = 0)

            @foreach($data as $data)
                @php($id++)
                <tr>
                    <th scope="row">{{$id}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>

                    @if($data->userType == '0')
                        <td><a href="{{url('/deleteUser',$data->id)}}">Delete</a></td>
                    @else
                        <td>Not Allowed</td>
                    @endif
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>



</div>

@include("admin.adminscript")
</body>
</html>
