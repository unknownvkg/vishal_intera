<!DOCTYPE html>
<html>

<head>
  <!-- ================== Basics =================== -->
  <title>Home page 1</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- ================== Font =================== -->
  <link rel="stylesheet" type="text/css" href="{{ asset('font/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('font/mdi-font/css/material-design-iconic-font.min.css') }}">
  <!-- ================== Vendor CSS =================== -->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap4/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl-carousel/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/settings.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/navigation.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/layers.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/lightbox2/src/css/lightbox.css') }}">

  <!-- Main CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  <!---Google font cdn-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">

</head>

<body>

  <div class="container">
    <div class="row mt-3 justify-content-center align-item-center">
      <div class="col-8" style="background-color:#f8f8f8; ">
        <form method="POST" action="{{ url('/dependent-dropdown') }}">
          @csrf
          <div class="row">
            <div class="col-12">
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif

              @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
              @endif
            </div>


            <div class="col-12 my-4">
              <h4 class="text-center " style="font-family: 'Space Grotesk', sans-serif;"><b>Contractor Registration</b>
              </h4>
            </div>
            <div class="col-md-6 mb-3">
              <label for="full_name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6 mb-3">
              <label for="contractor_phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="contractor_phone" name="contractor_phone"
                aria-describedby="emailHelp">
            </div>
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="contractor_email" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6 mb-3">
              <label for="contractor_gender" class="form-label">Gender</label>
              <select class="form-select" aria-label="Default select example" id="contractor_gender"
                name="contractor_gender"
                style="width:100%; height:55%;border: 1px solid rgb(205, 196, 196);border-radius:3px;">
                <option selected disabled>Select your Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="contractor_age" class="form-label">Age</label>
              <input type="number" class="form-control" id="contractor_age" name="contractor_age"
                aria-describedby="emailHelp">
            </div>
            <div class="col-md-6 mb-3">
              <label for="contractor_experience_year" class="form-label">Year of Experience</label>
              <input type="number" min="0" max="50" class="form-control" id="contractor_experience_year"
                name="contractor_experience_year" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6 mb-3">
              <label for="contractor_aadharNo" class="form-label">Aadhar Number</label>
              <input type="text" class="form-control" id="contractor_aadharNo" name="contractor_aadharNo"
                aria-describedby="emailHelp">
            </div>
            <div class="col-md-6 mb-3">
              <label for="contractor_panNo" class="form-label">Pan card Number</label>
              <input type="text" class="form-control" id="contractor_panNo" name="contractor_panNo"
                aria-describedby="emailHelp">
            </div>
            <div class="col-md-6 mb-3">
              <label for="contractor_profile" class="form-label">Profile Photo</label>
              <input type="file" class="form-control" id="contractor_profile" name="contractor_profile"
                aria-describedby="emailHelp">
            </div>
            <div class="col-md-6 mb-3">
              <label for="registrationDate" class="form-label">Date of Registration (Today Date)</label>
              <input type="date" class="form-control" id="registrationDate" name="registrationDate"
                aria-describedby="emailHelp">
            </div>
      
            <div class="col-md-6 mb-3">
              <label for="country-dd" class="form-label">Country</label>
              <select id="country-dd" class="form-control" name="contractor_country">
                <option value="">Select Country</option>               
                @foreach ($countries as $data)
                <option value="{{ $data['id'] }}">
                  {{ $data['name'] }}
                </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="state-dd" class="form-label">State</label>
              <select id="state-dd" class="form-control" name="contractor_state">
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="city-dd" class="form-label">city</label>
              <select id="city-dd" class="form-control" name="contractor_city">
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label for="contractor_pincode" class="form-label">Pin Code</label>
              <input type="text" class="form-control" id="contractor_pincode" name="contractor_pincode"
                aria-describedby="emailHelp">
            </div>
            <div class="col-md-12 mb-3">
              <label for="contractor_complete_address" class="form-label">Complete Address</label>
              <textarea type="text" class="form-control" id="contractor_complete_address"
                name="contractor_complete_address" aria-describedby="emailHelp"></textarea>
            </div>
        
            <div class="col-md-6 mb-3">
              <label for="contractor_password" class="form-label">Password</label>
              <input type="password" class="form-control" id="contractor_password" name="contractor_password">
            </div>
            <div class="col-md-6 mb-3">
              <label for="contractor_password_confirmation" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="contractor_password_confirmation"
                name="contractor_password_confirmation">
            </div>
            <div class="col-12 mb-3">
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
          $('#country-dd').on('change', function () {
              var idCountry = this.value;
              $("#state-dd").html('');
              $.ajax({
                  url: "{{url('api/fetch-states')}}",
                  type: "POST",
                  data: {
                      country_id: idCountry,
                      _token: '{{csrf_token()}}'
                  },
                  dataType: 'json',
                  success: function (result) {
                      $('#state-dd').html('<option value="">Select State</option>');
                      $.each(result.states, function (key, value) {
                          $("#state-dd").append('<option value="' + value
                              .id + '">' + value.name + '</option>');
                      });
                      $('#city-dd').html('<option value="">Select City</option>');
                  }
              });
          });
          $('#state-dd').on('change', function () {
              var idState = this.value;
              $("#city-dd").html('');
              $.ajax({
                  url: "{{url('api/fetch-cities')}}",
                  type: "POST",
                  data: {
                      state_id: idState,
                      _token: '{{csrf_token()}}'
                  },
                  dataType: 'json',
                  success: function (res) {
                      $('#city-dd').html('<option value="">Select City</option>');
                      $.each(res.cities, function (key, value) {
                          $("#city-dd").append('<option value="' + value
                              .id + '">' + value.name + '</option>');
                      });
                  }
              });
          });
      });
  </script>

</body>

</html>