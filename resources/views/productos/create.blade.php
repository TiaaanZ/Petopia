<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="{{ asset('/css/style1.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        
        <div>
            <div>
                <form action="{{route('producto.store')}}" method="post">
                    @csrf
                    <h2>Nuevo producto</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" required maxlength="30" placeholder="Nombre Producto">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="descripcion" required maxlength="500" placeholder="Descripcion">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="precio" placeholder="Precio">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="cover_img" placeholder="Link imagen">
                    </div>
                    <div>
                        <input type="submit" value="guardar" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>