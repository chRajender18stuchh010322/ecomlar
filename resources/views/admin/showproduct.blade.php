<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
 @include('admin.css')
  </head>
  <body>
   @include('admin.sidebar')
     @include('admin.navbar')

     <div class="container-fluid page-body-wrapper" style="padding-bottom: 40px">
   
        <div class="container" align="center">

            @if(session()->has('message'))
<div class="alert alert-success">

<button type="button" class="close" date-dismiss='alert'>X</button>

{{ session()->get('message') }}

</div>
@endif

            <table>
                <tr style="background-color: gray">
                    <td style="padding: 20px">TITLE</td>
                    <td style="padding: 20px">PRICE</td>
                    <td style="padding: 20px">DESCRIPTION</td>
                    <td style="padding: 20px">QUANTITY</td>
                    <td style="padding: 20px">IMAGE</td>
                    <td style="padding: 20px">update</td>
                    <td style="padding: 20px">Delet</td>

                </tr>

                @foreach ($data as $product )
                    
                

                <tr  align="center" style="background-color:rgb(10, 10, 10);">

                    <td >{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td><img src="/productimage/{{ $product->image }}" alt="" style="height: 100px"></td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('updateview',$product->id) }}">Update</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('are you sure')" href="{{ url('deleteproduct',$product->id) }}">Delete</a>
                    </td>
                </tr>

                @endforeach
            </table>

    </div>
</div>

        
    
    @include('admin.script')
    
   
  </body>
</html>