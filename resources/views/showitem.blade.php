<style>
    body{
        background-color: #EEEEEE;
    }
    .img{
        float: left;
        margin-right: 100px;
    }
    .name{
        font-size: 25px;
        margin-bottom: 25px;
    }
    .black{
        background-color: #FFFFFF;
        padding: 30px;
        margin-left: 50px;
        margin-right: 50px;
        overflow: hidden;
    }
    .com{
        font-size:15px;
    }
    
</style>


<div class="black">
    <div class="img"><img src="{{ asset('product/'.$products['image']) }}" style="width: 300px; height: 300px;" alt=""></div>
    <div class="name">{{$products->name}}
        <div class="com"><br>{{$products->description}}</div>
    </div>
    <div class="price">${{$products->price}}</div>
    <br>
    <button class="addbutton">Add to Cart</button>
    <button class="buybutton">Buy Now</button>
</div>
