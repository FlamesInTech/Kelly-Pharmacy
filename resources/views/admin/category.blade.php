<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .div_center{
            text-align: center;  
            padding: 30px;
        }
        .div_center h2{
            font-size: 30px;
            padding-bottom: 30px;
        }
        .add_category_btn{
            /* height: 30px; */
            padding: 13px;
        }
        .input_color{
            color: black;
            padding: 12px;
        }
        .table-center{
            margin: auto;
            width: 50%;
            text-align: center;
            border: 3px solid green;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

          <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert" arial-hidden="true">x</button>
            {{session()->get('message')}}
          </div>

          @endif
            <div class="div_center">
                <h2>Add Categories</h2>
                <form action="{{url('/add_category')}}" method="POST">
                    @csrf
                    <div class="category_cover">
                        <input class="input_color" type="text" name="category" placeholder="Write Category name">
                        <input type="submit" class="btn btn-primary add_category_btn" name="submit" value="Add Category">
                    </div>
                    
                </form>
            </div>

            <table class="table-center">
                <tr>
                    <td>Category Name</td>
                    <td>Action</td>
                </tr>

                @foreach($data as $data)

                <tr>
                    <td>{{$data->category_name}}</td>
                    <td>
                        <a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
                    </td>
                </tr>

                @endforeach
            </table>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>