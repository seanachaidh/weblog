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
	
	
	getBerichten: () ->
		#krijg alle berichten
		this.http.get(this.baseUrl)
			.toPromise()
			.then (response) ->
				return response.json().data
			.catch this.handleError

exports = (app) ->
	app.BerichtService = BerichtService
	return
exports window.app || window.app = {}
