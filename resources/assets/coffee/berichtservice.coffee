#Imports
Http = ng.http.Http
Headers = ng.http.Headers
toPromise = Rx.Observable.toPromise #Ik denk dat dit werkt

#onze berichtservice

class BerichtService
	this.parameters = [Http] #Injectie
	this.baseUrl = 'bericht'
	
	this.headers = new Headers
			'Content-Type': 'application/json'
	
	constructor: (http) ->
		this.http = http
		return
	
	handleError: (error) ->
		console.error "Error bij berichten: ", error
		return
	
	getBerichten: (last) ->
		#krijg alle berichten
		this.http.get("bericht?last=" + last) #Om te beslissen of het al dan niet de laatste moet zijn.
			.toPromise()
			.then (response) ->
				return response.json().data
		
	
	getPrevious: (bericht) ->
		id = bericht.previous_id
		
		this.http.get("bericht/" + id)
			.toPromise()
			.then (response) ->
				return response.json().data
	
	getNext: (bericht) ->
		id = bericht.next_id
		
		this.http.get('bericht/' + id)
			.then (response) ->
				return response.json().data
	
	writeBericht: (bericht) ->
		this.http.post('bericht', bericht, this.headers)
			.toPromise()
			.then(response) ->
				return response.json().data

exports = (app) ->
	app.BerichtService = BerichtService
	return
exports window.app || window.app = {}
