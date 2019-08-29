@extends('frontend.layouts.content')

@section('content')
   <h2> category list</h2>
    @if(empty($categories))
    <p>Data empty</p>
    @else
    <table class="table table-bordered">
        <tr>
            <td>STT</td>
            <td>ID</td>
            <td>Name</td>

        </tr>
        @foreach($categories as $key=> $category)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$category->category_id}}</td>
                <td>{{$category->category_name}}</td>
            </tr>
            @endforeach
    </table>
    @endif
@stop
