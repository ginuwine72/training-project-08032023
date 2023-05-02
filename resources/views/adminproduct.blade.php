<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/addminproduct.css')}}">
    <title>admin_product</title>
</head>
<body>

<table>
  <tr>
    <th>image</th>
    <th>name</th>
    <th>Price</th>
    <th>Delete</th>
  </tr>
  @foreach($product as $pd)
  <tr>
    <td><img src="{{ asset('product/'.$pd['image']) }}" width="100" height="100" class="img-responsive"/></td>
    <td>{{$pd['name']}}</td>
    <td>{{$pd['price']}}</td>
    <td>
      <a href={{"Delete/" .$pd['id']}}>
        
<button class="noselect"><span class="text">Delete</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button>
      </a>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>
