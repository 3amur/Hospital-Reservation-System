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
                <h4 class="card-title">Add New Doctor</h4>
                <form class="forms-sample" action="{{ route('doctor.addDoctor') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" required style="color:red;" name="name" class="form-control" placeholder="Please Enter Name">
                    @error('name')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" required style="color:red;" name="phone" class="form-control" placeholder="Please Enter Phone">
                    @error('phone')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Speciality</label>
                    <select class="form-control" required name="speciality" style="color:red;">
                      <option>--Select--</option>
                      <option value="internal medicine">Internal Medicine</option>
                      <option value="pediatrics">Dentistry</option>
                      <option value="obstetrics and gynecology">Dermatology</option>
                      <option value="anesthesiology">Ear, nose and throat (ENT)</option>
                      <option value="radiology">Gastroenterology</option>
                      <option value="pathology">General surgery</option>
                      <option value="psychiatry">Hematology</option>
                      <option value="orthopedics">Hepatology</option>
                      <option value="orthopedics">Nephrology</option>
                      <option value="orthopedics">Neurology</option>
                      <option value="orthopedics">Obstetrics and Gynecology</option>
                      <option value="orthopedics">Oncology</option>
                      <option value="orthopedics">Ophthalmology</option>
                      <option value="orthopedics">Pediatrics</option>
                      <option value="orthopedics">Plastic surgery</option>
                      <option value="orthopedics">Rheumatology</option>
                      <option value="orthopedics">Urology</option>
                      <option value="emergency medicine">Emergency Medicine</option>
                    </select>
                    @error('speciality')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Room Number</label>
                    <input type="text" required name="room" style="color:red;" class="form-control" placeholder="Please Enter Number">
                    @error('room')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group" style="padding:2px;">
                    <label>Doctor Image</label>
                    <input type="file" required style="color:red;" class="form-control" name="image">
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
