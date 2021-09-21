@extends('layouts.main')
@section('contenido')

    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar producto
                    </div> 
                    <div class="card-body">
                        <form action="{{route('products.update', $product->id)}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Descripcion</label>
                                <input type="text" name="description" value="{{$product->description}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="number" name="price" value="{{$product->price}}" class="form-control" >
                            </div><br>     
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('products.index')}}" class="btn btn-danger">Cancelar</a>
                        </form>    
                    </div> 
                </div>
            </div>
        </div>   
    </div>
@endsection
