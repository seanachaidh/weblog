#De bootstrap

bootstrap = ng.platformBrowserDynamic.bootstrap

start = (app) ->
	$ document
		.ready () -> 
			bootstrap app.AppComponent
			return
	return
		

start window.app || window.app = {}



