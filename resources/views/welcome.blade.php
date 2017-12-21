<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IdeaHub - A place to share ideas!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <!-- Styles -->
        
    </head>
    <body>
       <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    
                </div>
            </div>
        </nav>
        <div class="flex-center position-ref full-height">
            
            <div class="container">
            	<div class="jumbotron landing">
				<h1>IdeaHub - A Place To Share Ideas</h1>
				
				
					 @auth
                     <p>
						Welcome Back to Idea Hub   this is a place to go and share ideas you can  go ahead and return to your  dashboard! 
					</p>
                       <p><a href="{{ url('/home') }}" class="btn-info btn">Come on in!</a></p>
                        
                    @else
                    <p>
					Welcome  to Idea Hub   this is a place to go and share ideas  to  take part of  discussions. 
					</p>   
                   	
                    <p>
                    	If you are New in which case  Register! we dont bite  we are a fantastic  community  here
                    </p>   
                    <p>
                   	  

                    	  <a href="{{ route('register') }}" class="btn-info btn">Register</a>
                    </p> 
                    <p>
                   		Or if you already are part of our community please Log in!
                   	</p>
                    <p>  
                        <a href="{{ route('login') }}" class="btn-info btn">Login</a>                    
                    </p>
                    @endauth
				
			</div>
           </div>
			
        </div>
         
		</div>
    </body>
</html>
