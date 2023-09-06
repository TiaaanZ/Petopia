<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Nuevo producto</h1>
        <div>
            <div>
                <form action="{{route('producto.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" required maxlength="500">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio">
                    </div>
                    <div class="form-group">
                        <label for="cover_img">Link imagen</label>
                        <input type="text" class="form-control" name="cover_img">
                    </div>
                    <div>
                        <input type="submit" value="guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>