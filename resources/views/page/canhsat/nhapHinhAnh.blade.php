@extends('masterlayout.canhsat.header')

@section('themvipham')
    <link rel="stylesheet" href="style/themvipham.css">

    <div class="container-fluid px-4 mt-2">
        
            <div class="form-group">
              <label for="exampleInputEmail1">Tên người vi phạm</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Quê quán</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">

              <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1">
              <label class="form-check-label" for="exampleCheck1">Vi phạm 1</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" value="2">
                <label class="form-check-label" for="exampleCheck1">Vi phạm 2</label>
              </div>


              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" value="3">
                <label class="form-check-label" for="exampleCheck1">Vi phạm 3</label>
              </div>


              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" value="4">
                <label class="form-check-label" for="exampleCheck1">Vi phạm 4</label>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         
    </div>

    <script type="text/javascript" src="js/themvipham.js"></script>
@endsection
