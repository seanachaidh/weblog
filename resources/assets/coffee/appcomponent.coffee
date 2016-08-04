#imports van de angular modules
Component = ng.core.Component

#De klasse van ons component
class AppComponent extends Component
	this.annotations = [
		new Component
				selector: 'my-app',
				providers: [app.BerichtService] #Ook heel belangrijk.
				template: '<h2> Dit is een test: {{name}} </h2>'
		]
	
	#dependency injection
	this.parameters = [
		app.BerichtService #is app hier al zichtbaar?
		]
	
	#De constructor van ons component
	constructor: (berichtService) ->
		this.berichtService = berichtService
		return
	ngOnInit: () ->
		this.name = this.berichtService.getBericht()
		return

#De klasse exporteren
exports = (app) ->
	app.AppComponent = AppComponent

exports window.app || window.app = {}
