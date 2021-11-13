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
        
     <div class="container-fluid page-body-wrapper">
   
        <div class="container" align="center">

            <table>
                <tr style="background-color: gray">
                    <td style="padding: 20px">Name</td>
                    <td style="padding: 20px">phone</td>
                    <td style="padding: 20px">address</td>
                    <td style="padding: 20px">product title</td>
                    <td style="padding: 20px">price</td>
                    <td style="padding: 20px">quantity</td>
                    <td style="padding: 20px">status</td>
                    <td style="padding: 20px">Action</td>





                </tr>
@foreach ($order as $orders )

                <tr align="center">
                    <td style="padding: 20px">{{ $orders->name }}</td>
                    <td style="padding: 20px">{{  $orders->phone }}</td>
                    <td style="padding: 20px">{{  $orders->address }}</td>
                    <td style="padding: 20px">{{  $orders->product_name}}</td>
                    <td style="padding: 20px">{{  $orders->price }}</td>
                    <td style="padding: 20px">{{  $orders->quantity}}</td>
                    <td style="padding: 20px">{{  $orders->status}}</td>
                    <td style="padding: 20px"><a class="btn btn-success" href="{{ url('updatestatus',$orders->id) }}">Delivered</a></td>



                </tr>
                @endforeach
            </table>
        </div>
     </div>
    
    @include('admin.script')
    
   
  </body>
</html>