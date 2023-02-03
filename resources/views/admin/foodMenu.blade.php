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

    <div class="container" style="position: relative">
        <br>
        <h1>Food Menu</h1>
        <br>
        <form action="{{url('/uploadFood')}}" method="post" enctype="multipart/form-data" style="width: 60%">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Title</label>
                    <input type="text" name="title" class="form-control" id="validationDefault01" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Price</label>
                    <input type="number" name="price" class="form-control" id="validationDefault02" required>
                </div>
            </div>
            <div class="row-md-6 mb-3">
                <label for="validationDefault03">Image</label>
                <input type="file" name="image" class="form-control" id="validationDefault03" required>
            </div>
            <div class="row-md-6 mb-3">
                <label for="validationDefault05">Description</label>
                <input type="text" name="description" class="form-control" id="validationDefault05"
                          required>
            </div>
            <input class="btn btn-primary" type="submit">
        </form>
        <br>
        <br>
        <div style="position: center; top: 60px; right: -60px; display: flex">
            <table class=" table-striped table-dark">
                <thead>
                <tr align="center">
                    <th style="padding: 30px" scope="col">#</th>
                    <th style="padding: 30px" scope="col">Title</th>
                    <th style="padding: 30px" scope="col">Price</th>
                    <th style="padding: 30px" scope="col">Description</th>
                    <th style="padding: 30px" scope="col">Image</th>
                    <th style="padding: 30px" scope="col">Actions</th>
                    <th style="padding: 30px" scope="col"></th>
                    <th style="padding: 30px" scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @php($id = 0)

                @foreach($data as $data)
                    @php($id++)
                    <tr align="center">
                        <th scope="row">{{$id}}</th>
                        <td>{{$data->title}}</td>
                        <td>${{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img src="/foodImage/{{$data->image}}" height="200" width="200" alt="food img"></td>
                        <td><a href="{{url('/deleteMenu',$data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updateView',$data->id)}}">Update</a></td>
                        <td></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <br>
        </div>
        <br>
    </div>
    <br>

</div>

@include("admin.adminscript")
</body>
</html>
