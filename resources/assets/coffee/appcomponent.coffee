#imports van de angular modules
Component = ng.core.Component
BlogMsg = app.BerichtComponent

#De klasse van ons component
class AppComponent extends Component
	this.annotations = [
		new Component
				selector: 'my-app',
				providers: [app.BerichtService, app.LoginService], #Ook heel belangrijk.
				directives: [BlogMsg],
				templateUrl: 'templates/main-template.html'
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
		return

#De klasse exporteren
exports = (app) ->
	app.AppComponent = AppComponent

exports window.app || window.app = {}
