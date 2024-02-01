<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>ITMS Project Management System</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

      <center><h3>ITMS Project Management System</h3></center>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Logout') }}</div>

                        <div class="card-body">
                            <p>{{ __('You have been logged out.') }}</p>
                            <a href="{{ route('login') }}">{{ __('Login again') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>  


