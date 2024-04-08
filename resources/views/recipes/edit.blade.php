@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Recipe</div>

                    <div class="card-body">
                    <form action="/recipes/{{$recipe -> id}}" method="POST">
                    @csrf
        
                    @method('HEAD')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $recipe->title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3" required>{{ $recipe->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="ingredients">Ingredients</label>
                                <textarea name="ingredients" id="ingredients" class="form-control" rows="6" required>{{ $recipe->ingredients }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="instructions">Instructions</label>
                                <textarea name="instructions" id="instructions" class="form-control" rows="6" required>{{ $recipe->instructions }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection