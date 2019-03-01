@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(isset($products))
            @if(count($products) > 0)
                <table class="table-responsive table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    @foreach($products as $item)
                        <td>$item->name</td>
                        <td>$item->description</td>
                        <td>$item->price</td>
                    @endforeach
                    $products->links()
                </table>
            @endif
        @endif
    </div>
</div>
@endsection