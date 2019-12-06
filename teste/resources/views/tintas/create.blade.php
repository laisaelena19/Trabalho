@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a tinta</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tintas.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">Marca: </label>
              <input type="text" class="form-control" name="marca"/>
          </div>

          <div class="form-group">
              <label for="last_name">Cor:</label>
              <input type="text" class="form-control" name="cor"/>
          </div>

          <div class="form-group">
              <label for="email">Tipo:</label>
              <input type="text" class="form-control" name="tipo"/>
          </div>
              <label for="city">Preço:</label>
              <input type="text" class="form-control" name="preço"/>
          </div>
          <div class="form-group">
              <label for="country">Validade:</label>
              <input type="text" class="form-control" name="validade"/>
          </div>
                                
          <button type="submit" class="btn btn-primary-outline">Add tinta</button>
      </form>
  </div>
</div>
</div>
@endsection