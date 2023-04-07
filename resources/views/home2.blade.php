


@extends('layouts.app')

@section('content')



<link rel="stylesheet" href="{{asset('css/home2.css')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-65">
            <div class="card">
    

            <div class="card-header">{{ __('user information') }}</div> 
            <div class="adddata"><a href="/adddata"><button>adduser</button></a></div>
               
               
               <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 <!-- ค้นหาข้อมูล -->
                    <form action="{{ url('search') }}" method="get">
  <input type="text" name="query" placeholder="Search...">
  <button type="submit">Search</button>
</form>
 <!-- ค้นหาข้อมูล -->
               <table>
               <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>password</th>
    <th></th>
    <th></th>

   
</tr>
 @foreach($datauser as $data)
  <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->password}}</td>


    <td>
  <form action="{{ url('delete', $data['id']) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this user?');">
    @csrf
    @method('delete')
    <button type="submit"><img src="https://cdn-icons-png.flaticon.com/512/3405/3405244.png" width="30" height="30"></button>
  </form>
</td>

<td><a href="{{'edit/' . $data['id']}}"><button><img src="https://cdn-icons-png.flaticon.com/512/1827/1827951.png" width="30" height="30"></button></a></td>
    
  

  </tr>
  @endforeach
               </table>
            
  {!! $datauser->links('') !!} <!-- //paginate -->

  



                </div>
               
               
                
            </div>


           
        </div>
 
    </div>
</div>
</div>




@endsection
