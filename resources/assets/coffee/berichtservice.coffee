#Imports
Http = ng.http.Http
Headers = ng.http.Headers
toPromise = Rx.Observable.toPromise #Ik denk dat dit werkt

#onze berichtservice

class BerichtService
	this.parameters = [Http] #Injectie
	this.baseUrl = 'bericht'
	
	constructor: (http) ->
		this.http = http
		return
	
	handleError: (error) ->
		console.error "Error bij berichten: ", error
		return
	
	getBerichten: (last) ->
		#krijg alle berichten
		this.http.get("bericht/?last=" + last) #Om te beslissen of het al dan niet de laatste moet zijn.
			.toPromise()
			.then (response) ->
				return response.json().data
			
	
	writeBericht: (bericht) ->
		#Schrijf een bericht naar de databank
		data
			
		
		this.http.post('bericht')
			.toPromise

exports = (app) ->
	app.BerichtService = BerichtService
	return
exports window.app || window.app = {}
