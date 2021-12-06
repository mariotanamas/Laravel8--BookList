<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS Nicholas Mario Tanamas - 2301898512</title>
  <meta charset="utf-8">
  <link href="<?php echo asset('../css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>
<script src="<?php echo asset('../js/bootstrap.bundle.min.js'); ?>"></script>

  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>HAPPY BOOK STORE</h1>
  </div>

  <div class="container">
    <div class="nav justify-content-center">
      <div class="nav-item">
        <a class="tombol" href="{{ url('/../home') }}">Home</a>
    </div>

    <div class="category">
        <a class=" tombol dropdown-toggle" dropdown1="dropdown" href="">Category</a>
        <div class="dropdown-menu">
        @foreach($categories as $Category)
      <a class="dropdown-item" href="/{{$Category ->id}}">{{$Category->category}}</a>
      @endforeach
        </div>
      </div>
    <div class="nav-item">
        <a class="tombol" href="{{ url('/contact')}}">Contact</a>
    </div>
  </div>
  <div class="container mt-3">
    <div class="row">
      <div class="col">
      </div>
      <div class="col-sm-8 p-1">
        <h4 class ="bg-warning p-2 font-">{{$bekas -> category}}</h4>
        <div class="container mt-2">
        <table class="table table-bordered mb-2">
            <thead>
                <tr class="table-success">
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $Book)
                <tr>
                    <th scope="row"><a class= "d-block p-2 text-decoration-none" href="/detail/{{$Book ->id}}">{{ $Book->title }}</a></th>
                    <td>{{ $Book->detail->author }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class ="gap-2 d-flex justify-content-end">
        {{$books->links()}}
  </div>
  </div>
</div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-2 p-1">
      <h4 class = "bg-warning p-2">Category</h4>
      @foreach($categories as $Category)
      <a class="d-block p-2 text-decoration-none" href="/{{$Category ->id}}">{{$Category->category}}</a>
      @endforeach
      </div>
      </div>

  <div class="container p-1 mt-5 bg-primary text-white text-center">
    <small>&copy Happy Book Store <?php echo date("Y"); ?> </small>
  </div>
 
</body>
</html>