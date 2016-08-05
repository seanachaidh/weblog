#Imports
Http = ng.http.Http
toPromise = Rx.Observable.toPromise #Ik denk dat dit werkt

#onze berichtservice

class BerichtService
	this.parameters = [Http] #Injectie
	this.baseUrl = 'bericht'
	
	constructor: (http) ->
		this.http = http
		return
	
	getBerichten: () -> return "Testing"

exports = (app) ->
	app.BerichtService = BerichtService
	return
exports window.app || window.app = {}
