      <!-- partial Header -->
      @include('admin.layouts.header')
      <!-- partial: Sidebar -->
      @include('admin.layouts.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial: Navbar -->
      @include('admin.layouts.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="mt-3 col-md-6  mx-auto grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                @if (session()->has('success'))
                  <div class="mb-3">
                    <h1 class="text-center alert alert-success">{{ session()->get('success') }}</h1>
                  </div>
                @endif
                <h4 class="card-title">Edit Doctor</h4>
                <form class="forms-sample" action="{{ route('doctor.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" required style="color:red;" name="name" value="{{ $doctor->name }}" class="form-control" placeholder="Please Enter Name">
                    @error('name')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" required style="color:red;" name="phone" value="{{ $doctor->phone }}" class="form-control" placeholder="Please Enter Phone">
                    @error('phone')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Speciality</label>
                    <select class="form-control" required name="speciality" value="{{ $doctor->speciality }}" style="color:red;">
                      <option hidden>--Select--</option>
                      <option value="internal medicine">Internal Medicine</option>
                      <option value="dentistry">Dentistry</option>
                      <option value="dermatology">Dermatology</option>
                      <option value="ear, nose and throat (ENT)">Ear, nose and throat (ENT)</option>
                      <option value="radiology">Radiology</option>
                      <option value="pathology surgery">Pathology surgery</option>
                      <option value="hematology">Hematology</option>
                      <option value="hepatology">Hepatology</option>
                      <option value="nephrology">Nephrology</option>
                      <option value="neurology">Neurology</option>
                      <option value="obstetrics and gynecology">Obstetrics and Gynecology</option>
                      <option value="oncology">Oncology</option>
                      <option value="ophthalmology">Ophthalmology</option>
                      <option value="pediatrics">Pediatrics</option>
                      <option value="plastic surgert">Plastic surgery</option>
                      <option value="rheumatology">Rheumatology</option>
                      <option value="urology">Urology</option>
                      <option value="emergency medicine">Emergency Medicine</option>
                    </select>
                    @error('speciality')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Room Number</label>
                    <input type="text" required name="room" value="{{ $doctor->room }}" style="color:red;" class="form-control" placeholder="Please Enter Number">
                    @error('room')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group" style="padding:2px;">
                    <label>Old Image</label>
                    <img src="{{ asset($doctor->image) }}" width="200px" height="150px" style="color:red;">
                  </div>
                  <div class="form-group" style="padding:2px;">
                    <label>Doctor Image</label>
                    <input type="file" style="color:red;" class="form-control" name="image">
                    @error('image')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-success me-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial: Footer -->
      @include('admin.layouts.footer')
    <!-- End custom js for this page -->
  </body>
</html>
