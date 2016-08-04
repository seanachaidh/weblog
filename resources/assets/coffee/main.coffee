#De bootstrap

bootstrap = ng.platformBrowserDynamic.bootstrap
HTTP_PROVIDERS = ng.http.HTTP_PROVIDERS

start = (app) ->
	$ document
		.ready () -> 
			bootstrap app.AppComponent,
			[
				HTTP_PROVIDERS
			]
			
			return
	return
		

start window.app || window.app = {}



