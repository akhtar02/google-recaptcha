<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Recaptcha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
    .login-box{
        border: 1px solid lightgray;
        padding: 20px;
        margin-top: 120px;
        border-radius: 6px;
    }

    </style>
   
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto login-box" >

                <form method="POST" action="validate.php">
                <div class="mb-2">
                       <h2 class="text-center">Login</h2>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                    <div class="g-recaptcha" data-sitekey="6Ld5ZAcdAAAAAJba11gKrQ426agC29o-AZ1lG0iL"></div>
                    </div>
                  
                    <div class="mb-2 text-center">
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                    </div>
                    
                </form>


            </div>
        </div>
    </div>

</body>

</html>