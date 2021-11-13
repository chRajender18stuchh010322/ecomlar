<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">

      <style type="text/css">

        label
        {
       display: inline-block;
       width: 200px;
        }
       
       
        </style>
 @include('admin.css')
  </head>
  <body>
   @include('admin.sidebar')
     @include('admin.navbar')
        
     <div class="container-fluid page-body-wrapper">
   
        <div class="container" align="center">
        <h1 style="color:white; padding-top:25px;font-size:25px;">Add Product</h1>
    
       
    @if(session()->has('message'))
    <div class="alert alert-success">
    
    <button type="button" class="close" date-dismiss='alert'>X</button>
    
    {{ session()->get('message') }}
    
    </div>
    @endif
    
        <form action="{{ url('updateproduct',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
        <div style="padding: 15px;">
            <label for="">Product title</label>
    <input type="text" name="title" value="{{ $data->title }}" required=""  style="color: black;">
        </div>
    
        <div style="padding: 15px;">
            <label for="">Price</label>
            <input type="number" name="price" value="{{ $data->price }}" required=""  style="color: black;">
        </div>
    
        <div style="padding:15px;">
            <label for="">Description</label>
            <input type="text" name="description" value="{{ $data->description }}" required=""  style="color: black;">
        </div>
    
        <div style="padding:15px">
            <label for="">Quantity</label>
            
            <input type="text" name="quantity" value="{{ $data->quantity }}" required="" style="color: black;">
        </div>
    

        <div style="padding:15px">
            <label for="">Old image</label>
            
            <img src="/productimage/{{ $data->image }}" alt="" style="height:100px;">
        </div>

        <div style="padding: 15px;">
            <label for="">change image</label>
            
            <input type="file" name="file">
        </div>
    
        <div style="padding: 15px;">
            <input class="btn btn-success" type="submit">
        </div>
    
    </form>
    
    </div>
    </div>
    


    @include('admin.script')
    
   
  </body>
</html>