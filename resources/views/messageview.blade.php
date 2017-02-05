@extends('welcome')

@section('currentview')
	<span class="metainf">
		<input type="input" id="currentid" value={{$data->id}} />
		<input type="input" id="previd" value={{$data->previous_id}} />
		<input type="input" id="nextid" value={{$data->next_id}} />
	</span>
	<div id="message-container" class="row">
		<div onclick="moveleft()" class="col-md-1 msgbutton" id="leftbutton">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</div>
		<div id="message-area" class="col-md-10">
			<div id="mtitle" class="messagetitle"> {{$data->title}} </div>
			<div id="mbody" class="messagebody">
				{{$data->text}}
			</div>
		</div>
		<div onclick="moveright()" class="col-md-1 msgbutton" id="rightbutton">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</div>
		
	</div>

@endsection