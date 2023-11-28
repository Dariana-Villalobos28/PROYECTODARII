@extends('layouts.app')
@section('container')
    <h1 class="text-center">Sugerencia de Productos</h1>
    <div class="container">
        <form action="{{route('ProductosCreate')}}" method="get">
            <button class="btn btn-primary mb-2" type="submit"><span class="p-4">Nuevo</span></button>
        </form>
        <table class="table table-responsive table-striped">
            <tr class="table-primary">
                <td>id</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Categoria</td>

                <td>Acciones</td>
            </tr>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->categoria->nombre}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{route('ProductosEdit',$producto->id)}}" class="btn btn-success mx-1">Editar</a>
                            <form class="formulario-eliminar" action="{{route('ProductosDestroy',$producto->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger mx-1">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$productos->links('pagination::bootstrap-5')}}
    </div>
    
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formularios = document.querySelectorAll('.formulario-eliminar');
        
        formularios.forEach(formulario => {
            formulario.addEventListener('submit', function(e) {
                e.preventDefault();
                
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¡Esta acción no es reversible!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });
    });
</script>
@endsection