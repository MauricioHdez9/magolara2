@extends('layouts.app')

@section('content')
 
<div class="panel panel-default">
    <div class="panel-heading">Dashboard</div>

    <div class="panel-body">
        <form action="" method='POST'>
            {{csrf_field()}} 
            <div class="form-group">
                <label for="category_id">categoria</label>
                <select name="category_id" class="form-control" id="">
                    <option value="0">general</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="severity" class="form-control" id="">
                    <label for="severity">severidad</label>
                    <option value="M">Menor </option>
                    <option value="N">Normal</option>
                    <option value="A">Alta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">titulo </label>
                <input type="text" name="title"  class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="descripcion">descripcion</label>
                    <textarea name="descripcion" id=""></textarea>
                
            </div>
            <div class="form-group">
                <label for="category_id">descripcion</label>
                <select name="category_id" id=""></select>
            </div>
            <div class="form-group">
                <button class="btn btn-primariy">regidtro </button>
                
            </div>
        </form>
    </div>
</div>
@endsection

