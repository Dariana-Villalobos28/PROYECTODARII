@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                @if(Cart::count())
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CANTIDAD</th>
                            <th>PRECIO UNITARIO</th>
                            <th>IMPORTE</th>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $item)
                                <tr class="align-middle">
                                    <td><img src="/img/{{$item->options->image}}" width="50"></td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{number_format($item->price,2)}}</td>
                                    <td>{{number_format($item->qty * $item->price,2)}}</td>
                                    <td>
                                        <form action="{{ route('removeitem') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                            <button type="submit" class="btn btn-danger btn-sm">X</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="fw-bolder">
                                <td colspan="3"></td>
                                <td class="text-end">Subtotal</td>
                                <td class="text-end">{{Cart::subtotal()}}</td>
                                <td></td>
                            </tr>
                            <tr class="fw-bolder">
                                <td colspan="3"></td>
                                <td class="text-end">Tax</td>
                                <td class="text-end">{{Cart::tax()}}</td>
                                <td></td>
                            </tr>
                            <tr class="fw-bolder">
                                <td colspan="3"></td>
                                <td class="text-end">Total</td>
                                <td class="text-end">{{Cart::Total()}}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route("clear")}}" class="text-center">Vaciar Carrito</a>

                @else
                    <a href="/" class="text-center">Agregar un producto</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
