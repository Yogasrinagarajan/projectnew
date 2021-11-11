<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
  <div class="row justify-content-center">
  <div class="col-5">
  <div class="card border-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Login</div>
  <div class="card-body">
    	 <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email" value="{{ __('Email') }}" />
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <label for="password" value="{{ __('Password') }}" />
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

          
            <div class="flex items-center justify-end mt-4">

                <button class="ml-4 btn btn-primary">
                    {{ __('Log in') }}
                </button>
            </div>
   
        </form>
  </div>
</div>
</div>
</div>
</div>     
</body>
</html>
    
