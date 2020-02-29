@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', '状態:') !!}
                    <!--{!! Form::text('status', null, ['class' => 'form-control']) !!}-->
                    {!! Form::select('status', ['未完了' => '未完了', '完了' => '完了',  '中止' => '中止'], '未完了', ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection