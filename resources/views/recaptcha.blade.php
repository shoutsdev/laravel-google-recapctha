<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google Recaptcha - shouts.dev</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Google Recaptcha Form - shouts.dev</h4>
            <form action="{{ route('recaptcha.store') }}" method="post">@csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <select class="form-control" id="sel1" name="stack">
                        <option value="">Select One</option>
                        <option value="php">PHP</option>
                        <option value="python">Python</option>
                        <option value="js">Javascript</option>
                        <option value="laravel">Laravel</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('stack') }}</span>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <input type="hidden" name="g-token" id="recaptchaToken">
                <div class="g-recaptcha"
                        data-sitekey="6LdgeOIUAAAAABcXEV3jTS1lxrE0LsdrHaL7WwlO"
                        data-callback='onSubmit'
                        data-action='submit'>Submit</div>

                <span class="text-danger">{{ $errors->first('g-token') }}</span>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    function onSubmit(token) {
        document.getElementById("recaptchaToken").value = token;
    }
</script>
</body>
</html>
