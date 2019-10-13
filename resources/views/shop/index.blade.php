@extends('layouts.app')

@section('content')
    <h1>Магазин</h1>
    <div class="row flowers">
    @foreach($flowers as $flower)
        <div class="col-md-3">
            <a href="/flower/{{$flower->id}}"> <img src="{{$flower->getThumb()}}" class="img-fluid"></a>
            <div>
                 <a href="/flower/{{$flower->id}}">{{$flower->name}}</a><br>
                {{$flower->stock?'в наличии':'нет в наличии'}}<br>
                {{$flower->price}}<br>
               <a href="/flower/{{$flower->id}}"> <button class="btn btn-success my-2 my-sm-0">Купить</button></a>
            </div>
            <br>
        </div>
     @endforeach
    </div>
    <nav aria-label="Page navigation example  mt-3">
      <ul class="pagination  mt-3 mb-3 d-flex flex-row justify-content-center align-items-center">
        <li class="page-item"><a class="page-link" href="#"><</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">></a></li>
      </ul>
    </nav>
    <br>
    {{$flowers->links()}}
@endsection
