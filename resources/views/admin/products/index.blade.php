@extends('layouts.admin')
@section('content')
    <div class="py-4">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name category</th>
                    <th scope="col">operations</th>
                    <th scope="col">price</th>
                    <th scope="col">quantity</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $product->name }}</td> //انا هيك برجع الريلاشن الاوبجيكت نفسه مرجعتش الناتج من هاد
                        الريلاشن(هادالميثود اما بترجع الريلاشن اوبجيكت نفسه بحيث اني أعدل عليه او بترجعلي الناتح من
                        هادالريلاشن و الناتج الي هو ال name)
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>

                        <td>

                            @method('delete')
                            <a href="{{ url('products/delete/' . $product->id) }}" class="btn btn-danger"></a>
                            <a href="{{ url('products/edit/' . $product->id) }}" class="btn btn-info"></a>

                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>


    </div>
@endsection
