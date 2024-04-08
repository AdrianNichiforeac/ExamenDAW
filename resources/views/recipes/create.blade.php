@extends('layouts.app')

@section('title', 'Create')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Create Recipe</div>

                    <div class="card-body">
                        <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="ingredients">Ingredients</label>
                                <textarea name="ingredients" id="ingredients" class="form-control" rows="6" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="instructions">Instructions</label>
                                <textarea name="instructions" id="instructions" class="form-control" rows="6" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection