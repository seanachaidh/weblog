#Deze klasse is bedoeld voor het afhandelen van aanloggegevens

Http = ng.http.Http
Headers = ng.http.Headers

toPromise = Rx.Observable.toPromise #Ik denk dat dit werkt

class LoginService
	this.parameters = [Http]
	this.baseUrl = 'auth'
	
	this.headers = new Headers
			'Content-Type': 'application/json'
	
	constructor: (http) ->
		this.http = http
		return
	
	loginUser: (name, pass) ->
		#Een json object maken van datgene wat we willen opsturen
		data = 
			email: name,
			password: pass
		stringdata = JSON.stringify data
		console.log "We versturen : " + data
		this.http
			.post 'auth/login',
				{"email": name, "password": pass},
				headers: this.headers
			.toPromise()
			.then (response) ->
				response.json().data
	
	logoutUser: () ->
		return
	
	handleError: (error) ->
		console.error "Error bij inloggen", error
		return
	
	

exports = () ->
	app.LoginService = LoginService
	return
exports window.app or window.app = {}