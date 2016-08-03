#De bootstrap

bootstrap = ng.platformBrowserDynamic.bootstrap

start = (app) ->
	bootstrap app.AppComponent

start app.window || window = {}



