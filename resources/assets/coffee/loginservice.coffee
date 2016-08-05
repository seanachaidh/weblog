#Deze klasse is bedoeld voor het afhandelen van aanloggegevens

Http = ng.http.Http

class LoginService
	this.parameters = [Http]
	this.baseUrl = 'auth'
	
	constructor (http) ->
		this.http = http
		return

exports () ->
	app.LoginService = LoginService
	return
exports window.app or window.app = {}