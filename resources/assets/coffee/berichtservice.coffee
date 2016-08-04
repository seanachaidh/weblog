#Imports
Http = ng.http.Http

#onze berichtservice

class BerichtService
	this.parameters = [Http] #Injectie
	
	constructor: (http) ->
		this.http = http
		return
	
	getBericht: () -> return "Testing"

exports = (app) ->
	app.BerichtService = BerichtService
	return
exports window.app || window.app = {}
