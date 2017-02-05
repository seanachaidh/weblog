#main coffeescript voor mijn blog

successHandler = (data,status,xhr) ->
	jQuery '#currentid'
		.attr 'value', data.id
	jQuery '#nextid'
		.attr 'value', data.next_id
	jQuery '#previd'
		.attr 'value', data.previous_id
	
	jQuery '#mtitle'
		.html data.title
	jQuery '#mbody'
		.html data.text
	
	return

@moveleft = () ->
	console.log 'moveleft'
	id = jQuery '#previd'
		.attr 'value'
	jQuery.get 'bericht/' + id, "", successHandler
	return
@moveright = () ->
	console.log 'moveright'
	id = jQuery '#nextid'
		.attr 'value'
	jQuery.get 'bericht/' + id, "", successHandler
	return
