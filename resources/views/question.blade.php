@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Question</h3>
                            </div>
                            <div class="card-body">
                                {{$question->body}}
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary float-right" href="{{ route('question.edit',['id'=> $question->id])}}">Edit Question</a>

                                {{ Form::open(['method'  => 'DELETE', 'route' => ['question.destroy', $question->id]])}}
                                <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="modal-title">List of Tags Associated with the question</h3>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                @forelse($question->tags as $tag)
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">{{$tag->tag}}</div>
                                                <div class="card-footer">
                                                    <a class="btn btn-success float-right" href="{{ route('tag.show', ['question_id'=> $question->id,'tag_id' => $tag->id]) }}">
                                                        View
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                @empty
                                    <div class="card">
                                        <div class="card-body"> No Tags</div>
                                    </div>
                                @endforelse
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary float-right" href="{{ route('tag.create', ['question_id'=> $question->id])}}">
                                    Add tags
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary float-left" href="{{ route('answer.create', ['question_id'=> $question->id])}}">
                            Answer Question
                        </a>
                    </div>

                    <div class="card-body">
                        @forelse($question->answers as $answer)
                            <div class="card">
                                <div class="card-body">{{$answer->body}}</div>
                                <div class="card-footer">
                                    <a class="btn btn-primary float-right" href="{{ route('answer.show', ['question_id'=> $question->id,'answer_id' => $answer->id]) }}">
                                        View
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="card">
                                <div class="card-body"> No Answers</div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
