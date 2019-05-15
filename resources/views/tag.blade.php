@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Answer</div>
                    <div class="card-body">
                        {{$tag->tag}}
                    </div>
                    <div class="card-footer">
                        {{ Form::open(['method'  => 'DELETE', 'route' => ['tag.destroy', $question, $tag->id]])}}
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete</button>
                        {!! Form::close() !!}
                        <a class="btn btn-primary float-right" href="{{ route('tag.edit',['question_id'=> $question, 'tag_id'=> $tag->id, ])}}">
                            Edit Tag
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection