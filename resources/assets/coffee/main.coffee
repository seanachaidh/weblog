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

#Zo zou het meoten gaan in de nieuywe versie maar die werkt blijkbaar nog niet zo goed

# platformBrowserDynamic = ng.platformBrowserDynamic.platformBrowserDynamic
# AppModule = app.AppModule
# 
# startApp = (app) ->
# 	$ document
# 		.ready () ->
# 			ng.platformBrowserDynamic
# 				.platformBrowserDynamic()
# 				.bootstrapModule(app.AppModule)
# 
# startApp window.app or window.app = {}
