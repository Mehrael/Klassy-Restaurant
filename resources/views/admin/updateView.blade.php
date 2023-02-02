<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include("admin.admincss")
</head>
<body>

<div class="container-scroller">
    @include("admin.navbar")
    <div style="position: relative; top: 60px; right: -60px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Title</label>
                    <input type="text" name="title" class="form-control" id="validationDefault01" value="{{$data->title}}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Price</label>
                    <input type="number" name="price" class="form-control" id="validationDefault02" value="{{$data->price}}" required>
                </div>
            </div>
            <div class="row-md-6 mb-3">
                <label for="validationDefault03">Old Image</label>
                <img src="/foodImage/{{$data->image}}" height="200" width="200" alt="Old Image">
            </div>
            <div class="row-md-6 mb-3">
                <label for="validationDefault03">New Image</label>
                <input type="file" name="image" class="form-control" id="validationDefault03">
            </div>

            <div class="row-md-6 mb-3">
                <label for="validationDefault05">Description</label>
                <input type="text" name="description" class="form-control" id="validationDefault05" value="{{$data->description}}"
                          required>
            </div>

            <input class="btn btn-primary" type="submit">
        </form>
    </div>
</div>

@include("admin.adminscript")
</body>
</html>
