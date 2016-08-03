#onze berichtservice

class BerichtService
	getBericht: () -> return "Testing"

exports = (app) ->
	app.BerichtService = BerichtService
	return
exports window.app || window.app = {}
