@extends('welcome')

@section('currentview')
	
	<div id="message-container" class="row">
		<div class="col-md-1 msgbutton" id="leftbutton">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</div>
		<div id="message-area" class="col-md-10">
			<div class="messagetitle"> {{$data->title}} </div>
			<div class="messagebody">
				{{$data->text}}
			</div>
		</div>
		<div class="col-md-1 msgbutton" id="rightbutton">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</div>
		
	</div>

@endsection