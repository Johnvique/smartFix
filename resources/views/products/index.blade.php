@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 text-center">
        @if(isset($products))
            
                <table class="table table-responsive table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    @foreach($products as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        </tr>
                    @endforeach
                </table>
                {{ $products->links()}}
           
        @endif
    </div>
</div>
@endsection