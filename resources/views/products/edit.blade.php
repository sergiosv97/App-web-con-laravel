<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar producto
                    </div> 
                    <div class="card-body">
                        <form action="" method="POST">
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
</body>
</html>