#imports van de angular modules
Component = ng.core.Component

#De klasse van ons component
class AppComponent extends Component
	this.annotations = [
		new Component
				selector: 'my-app',
				providers: [app.BerichtService, app.LoginService] #Ook heel belangrijk.
				template: '<h2> Dit is een test: {{name}} </h2>'
		]
	
	#dependency injection
	this.parameters = [
		app.BerichtService, #is app hier al zichtbaar?
		app.LoginService
		]
	
	#De constructor van ons component
	constructor: (berichtService, loginService) ->
		this.loginService = loginService
		this.berichtService = berichtService
		return
	ngOnInit: () ->
		retval = this.loginService.loginUser "pvankeymeulen@seanachaidh.be", "12345"
		
		if retval.success = 'true'
			this.bericht = this.berichtService.getBerichten true
		else
			this.bericht = "loginfout"
		return

#De klasse exporteren
exports = (app) ->
	app.AppComponent = AppComponent

exports window.app || window.app = {}
