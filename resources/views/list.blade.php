<table border="1">
    <tr>
        <td>ID</td>
        <td>PRODUCT'S NAME</td>
        <td>PRICE</td>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
    </tr>
    @endforeach
</table>

<span>
    {{$products -> links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>
