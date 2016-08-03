#imports van de angular modules
Component = ng.core.Component

#De klasse van ons component
class AppComponent extends Component
	this.annotations = [
		new Component
				selector: 'my-app',
				template: '<h2> Dit is een test </h2>'
		]
	
	#dependency injection
	this.parameters = [
		app.DataService #is app hier al zichtbaar?
		]
	
	#De constructor van ons component
	constructor: (berichtService) -> return

#De klasse exporteren
exports = (app) ->
	app.AppComponent = AppComponent

exports window.app || window.app = {}
