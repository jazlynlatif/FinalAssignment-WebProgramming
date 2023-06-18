<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Education</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <link href="{{ asset('import/assets/css/lrbootstrap.min.css') }}" rel="stylesheet">
  
    <link href="{{ asset('import/assets/css/loginregisstyle.css') }}" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Edit Education</h5>
                  </div>

                  <br>

                  <form action="{{route('updateedu')}}" method="post" class="row g-3 needs-validation">
                    @csrf
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}} </div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}} </div>
                    @endif
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="col-12">
                      <label class="form-label">Name</label>
                      <input type="text" name="name" placeholder="Name" value="{{$data->name}}" class="form-control" required>
                      <div class="invalid-feedback">Please enter the name!</div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Description</label>
                      <textarea type="text" name="description" placeholder="Description" class="form-control" required>{{$data->description}}</textarea>
                      <div class="invalid-feedback">Please enter the description</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Edit Education</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Want to go back? <a href={{url('dashboard')}}>Click here</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="js/tinymce.min.js"></script>

  <script src="js/mainlogres.js"></script>

</body>

</html>