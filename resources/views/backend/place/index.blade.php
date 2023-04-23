@extends('layouts.backend.dashboard')
@section('content')

<div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
        <h4 id="count"></h4>
        <table class="table table" style="margin-bottom:-40px; margin-top:0px;" id="table">
            <tr>
                <td> <h5> Places - {{ $places->count() }}</h5> </td>
                <td class="text-right"> <h5> <a href="{{ route('place.create') }}" class="btn btn-primary" style="margin-bottom:0px; margin-left:70px; margin-bottom:10px;"><b>+</b> Add New place </a> </h5>
            </tr>
        </table>
        <table class="table table-striped custab" id="product_table">
                <thead id="tabelcontents">
                    <tr>
                        <th>ID</th>
                        <th>Visited Place</th>
                        <th> District </th>
                        <th> Address </th>
                        <th> Description </th>
                        <th> Show </th>
                        <th> Edit </th>
                        <th class="text-center"> Delete </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($places as $place)
                    <tr>
                        <td> {{ $place->id }} </td>
                        <td> {{ $place->place }} </td>
                        <td> {{ $place->district }} </td>
                        <td> {{ $place->address }} </td>
                        <td> {{ $place->description }} </td>
                        <td>
                            <a href="{{ route('place.show',$place->id) }}"><i class="material-icons">show</i></a>
                        </td>
                        <td>
                            <a href="{{ route('place.edit',$place->id) }}"><i class="material-icons">edit</i></a>
                        </td>
                        <td class="text-center">
                            <form action="{{route('place.destroy',[$place->id])}}" method="post">
                                @csrf   
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Do you want to delete?')"><i class="material-icons">delete</i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>
</div>

@endsection