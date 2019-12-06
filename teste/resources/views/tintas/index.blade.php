@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
    <h1 class="display-3">Tintas</h1>    
    <div>
    <a style="margin: 19px;" href="{{ route('tintas.create')}}" class="btn btn-primary">New tinta</a>
    </div> 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Marca</td>
          <td>Cor</td>
          <td>Tipo</td>
          <td>Preço</td>
          <td>Validade</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tintas as $tinta)
        <tr>
            <td>{{$tinta->id}}</td>
            <td>{{$tinta->marca}} </td>
            <td>{{$tinta->cor}}</td>
            <td>{{$tinta->tipo}}</td>
            <td>{{$tinta->preço}}</td>
            <td>{{$tinta->validade}}</td>
            <td>
                <a href="{{ route('tintas.edit',$tinta->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('tintas.destroy', $tinta->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

</div>
@endsection