Component = ng.core.Component

#eigen modules die ik importeer

BerichtService = app.BerichtService

class BerichtComponent extends Component
	this.annotations = [
		new Component
			selector: "blog-msg",
			templateUrl: 'templates/show-message.html'
		]
		
	this.parameters = [app.BerichtService]
	
	this.msg = null
	
	constructor: (berichtService) ->
		this.msg = berichtService.getBerichten true
		return
		
exports = (app) ->
	app.BerichtComponent = BerichtComponent
	return
exports window.app or window.app = {}
#end of file
