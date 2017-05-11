@extends('news.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Редактирование новости</h1>
					{!! Form::open(['route' => 'news.store']) !!}
					@include('news.forms._form')
					{!! Form::close()!!}  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
