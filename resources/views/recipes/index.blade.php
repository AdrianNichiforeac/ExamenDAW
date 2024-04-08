@extends('layouts.app')

@section('title', 'Recete')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="article__links">
                <a class="btn btn-info text-white" href="{{ route('recipes.create')}}">Adauga o receta</a>
                <input class="form-control" id="myInput" type="text" placeholder="Search.." >

            </div>
            
            @forelse ($recipes as $recipe)
                <div class="col-md-4 mb-4" id="myCard">
                    <div class="card">
                    <h5 class="card-title">{{ $recipe->title }}</h5>
                    <label for="card-text">Description:{{ $recipe->description }}</label>
                        <div class="card-body">
                            <p class="card-text">Ingredients:{{ $recipe->ingredients }}</p>
                            <textarea class="card-textarea" cols="50" rows="10">Instruction: {{ $recipe->instructions }}</textarea>
                            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                            <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-primary">Edit</a>

                        </div>
                    </div>
                </div>
                @empty
                <tr>
                    <td colspan="3">NU exista recete</td>
                </tr>
            @endforelse
        </div>
</div>

@endsection