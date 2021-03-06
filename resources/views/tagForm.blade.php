@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Tag</div>
                    <div class="card-body">
                        @if($edit === FALSE)
                            {!! Form::model($tag, ['route' => ['tag.store', $question], 'method' => 'post']) !!}

                        @else()
                            {!! Form::model($tag, ['route' => ['tag.update', $question, $tag], 'method' => 'patch']) !!}
                        @endif
                        <div class="form-group">
                            {!! Form::label('tag', 'Tag') !!}
                            {!! Form::text('tag', $tag->tag, ['class' => 'form-control','required' => 'required']) !!}
                        </div>
                        <button class="btn btn-success float-right" value="submit" type="submit" id="submit">Save
                        </button>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
