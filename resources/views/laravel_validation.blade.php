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
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name:</label>
                  <input type="text"  class="form-control" name="name" />
                </div>
                <div class="form-group">
                <label for="">Email:</label>
                  <input type="email"  class="form-control" name="email" />
                </div>
                <div class="form-group">
                <label for="">Phone:</label>
                  <input type="number"  class="form-control " name="phone" />
                </div>
                <div class="form-group">
                <label for="">Designation:</label>
                  <input type="text"  class="form-control" name="designation" />
                </div>
                <div class="form-group">
                <label for="">Password:</label>
                  <input type="password"  class="form-control" name="password" />
                </div>
                <div class="form-group">
                <label for="">Company Name:</label>
                  <input type="text"  class="form-control" name="company_name" />
                </div>
                <div class="form-group">
                <label for="">Company Website:</label>
                  <input type="text"  class="form-control" name="company_website" />
                </div>
                <div class="form-group">
                <label for="">Company Portfolio:</label>
                <p>N.B: ( Before upload, please rename your documents with your company name)</p>
                  <input type="file"  class="form-control" name="company_portfolio" />
                </div>
                <div class="form-group">
                <label for="">Address:</label>
                  <input type="text"  class="form-control" name="company_address" />
                </div>
                <div class="form-group">
                <label for="">Photo:</label>
                  <input type="file"  class="form-control" name="photo" />
                </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
              </form>

            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
</script>
</body>
</html>