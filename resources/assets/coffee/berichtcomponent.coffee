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
		#krijg het eerste bericht
		this.msg = berichtService.getBerichten true
		return
	
	onLeftClick: () ->
		console.log("leftclick")
		return
		#this.msg = berichtService.getPrevious(this.msg)
	
	onRightClick: () ->
		console.log('rightclick')
		return
		#this.msg = berichtService.getNext(this.msg)
		
exports = (app) ->
	app.BerichtComponent = BerichtComponent
	return
exports window.app or window.app = {}
#end of file
