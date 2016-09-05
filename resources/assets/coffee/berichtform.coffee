Component = ng.core.Component

class Bericht
	constructor: (title, text, date) ->
		this.date = date
		this.title = title
		this.text = text
		
		return

class BerichtForm extends Component
	this.annotations = [
		new Component
			selector: 'msg-form',
			templateUrl: 'templates/bericht-add-tmp.html'
	]
	
	this.model = new Bericht('geen datum', 'niemand', 'Geen inhoud')
	
	constructor: () -> return
 
exports = (app) ->
	app.BerichtForm = BerichtForm
	return
exports window.app or window.app = {}
