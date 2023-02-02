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
<h1>Orders</h1>
        <br>
        <form action="{{url('/search')}}" method="get">
            <div class="form-row">
{{--                <div class="col-md-10 mb-1">--}}
            <input class="form-control" type="text" name="search" style="color: blue; width: 20%" placeholder="Search">
{{--                </div>--}}
{{--                    <div class="col-md-2 mb-3">--}}
                <div style="width: 1%"></div>
            <input type="submit" value="Search" class="btn btn-success">
{{--                    </div>--}}
    </div>
    </form>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
            <tr align="center">
{{--                <th style="padding: 30px" scope="col">#</th>--}}
                <th style="padding: 30px" scope="col">Name</th>
                <th style="padding: 30px" scope="col">Phone</th>
                <th style="padding: 30px" scope="col">Address</th>
                <th style="padding: 30px" scope="col">Food Name</th>
                <th style="padding: 30px" scope="col">Quantity</th>
                <th style="padding: 30px" scope="col">Price</th>
                <th style="padding: 30px" scope="col">Total Price</th>
            </tr>
            </thead>
            <tbody>
{{--            @php($id = 0)--}}

            @foreach($data as $data)
{{--                @php($id++)--}}
                <tr align="center">
{{--                    <th scope="row">{{$id}}</th>--}}
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->foodName}}</td>
                    <td>${{$data->price}}</td>
                    <td>{{$data->quantity}}</td>
{{--                    <td><a href="{{url('/deleteMenu',$data->id)}}">Delete</a></td>--}}
{{--                    <td><a href="{{url('/updateView',$data->id)}}">Update</a></td>--}}
                    <td>${{$data->price * $data->quantity}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

@include("admin.adminscript")
</body>
</html>

