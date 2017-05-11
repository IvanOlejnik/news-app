@extends('news.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">	
					@foreach($news as $new)
						<div class='block'>
							<p>{!! $new->title !!}</p>
							<p>{!! $new->content !!}</p>
							<p>{!! $new->created_at !!}</p>
							<form action="{{ url('news/'.$new->id) }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" id="delete-news-{{ $new->id }}" class="btn btn-danger">
									<i class="fa fa-btn fa-trash"></i>Удалить
								</button>
							</form>
							<a href="{{ route('news.edit', $new->id) }}">Редактировать</a>
							<hr>
						</div>
					@endforeach
            </div>
        </div>
    </div>
</div>
@endsection
 <style>
      .block{
		  border: 2px solid black;
	  }
 </style>