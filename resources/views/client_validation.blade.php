<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Side Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .parsley-errors-list li{
            list-style: none;
            color:red
        }
    </style>
</head>
  <body>
    

        <div class="container">
            <h1>Hello Clent Side Form !</h1>
            <div class="row">
                <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                            <label for="">Name:</label>
                              <input type="text"  class="form-control" name="name" required data-parsley="[a-zA-Z ]+$ " data-parsley-trigger="keyup"/>
                            </div>
                            <div class="form-group">
                            <label for="">Email:</label>
                              <input type="email"  class="form-control" name="email" required data-parsley-type="email" data-parsley-trigger="keyup"/>
                            </div>
                           
                            <div class="form-group">
                            <label for="">Password:</label>
                              <input type="password"  class="form-control" name="password" required data-parsley-length="[0-8]" data-parsley-trigger="keyup"/>
                            </div>
                            <div class="form-group">
                                <label for="">Conform Password:</label>
                                  <input type="password"  class="form-control" name="cpassword" required data-parsley-equalto="#password" data-parsley-trigger="keyup"/>
                                </div>
                            <div class="form-group">
                                <label for="">Phone:</label>
                                    <input type="number"  class="form-control " name="phone" required data-parsley-pattern="[0-9]+$" data-parsley-length="[11-14] data-parsley-trigger="keyup"/>
                                </div>
                           
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                      </div>
                      <!-- /.col -->
                      </form>

            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
<script>
    $(function(){
        $("registerForm").parsley();
    });
</script>
</body>
</html>