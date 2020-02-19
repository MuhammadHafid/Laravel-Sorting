<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Task1 DOT Test</title>
  </head>
  <body class="container">
  <form action="{{route('sorting.find')}} " method="post" class="mt-5">
  @csrf 
  <div class="form-group" >
    <label for="input-number" style="font-weight:bold;">Number Array</label>
    <input name="x" placeholder="Input your number array here" type="text" class="form-control" id="input-number" value= {{$oldArray}} > 
  </div>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>

<ul class="list-group mt-4" >
  <li class="list-group-item list-group-item-danger">Sorted number</li>
  <ul class="list-group list-group-horizontal">
  @foreach($noIdentic as $sorted)
  <li class="list-group-item">{{$sorted}}</li>
  @endforeach
</ul>
</ul>


<ul class="list-group mt-4" >
  <li class="list-group-item list-group-item-danger">Second biggest number </li>
  <ul class="list-group list-group-horizontal">
  
  <li class="list-group-item">{{$noIdentic[1]}}</li>
  
</ul>
</ul>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>