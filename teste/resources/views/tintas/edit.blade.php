@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a tinta</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('tintas.update', $tinta->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name">Marca</label>
                <input type="text" class="form-control" name="marca" value={{ $tinta->marca }} />
            </div>

            <div class="form-group">
                <label for="last_name">Cor</label>
                <input type="text" class="form-control" name="cor" value={{ $tinta->cor }} />
            </div>

            <div class="form-group">
                <label for="email">Tipo</label>
                <input type="text" class="form-control" name="tipo" value={{ $tinta->tipo }} />
            </div>
            <div class="form-group">
                <label for="city">Preço</label>
                <input type="text" class="form-control" name="preço" value={{ $tinta->preço }} />
            </div>
            <div class="form-group">
                <label for="country">Validade</label>
                <input type="text" class="form-control" name="validade" value={{ $tinta->validade }} />
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection