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
          <div class="col-md-10  mx-auto grid-margin stretch-card">
            <div class="mt-3 card card-primary">
                <div class="card-header">
                  <h3 class="card-title text-center">View All Doctors</h3>
                </div>
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Speciality</th>
                    <th>Room</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($doctors as $doctor)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->speciality }}</td>
                    <td>{{ $doctor->room }}</td>
                    <td><img src="{{ asset($doctor->image) }}" width="400" alt="DoctorImage"></td>
                    <td>
                      <a class="btn btn-success" href="{{ route('doctor.edit', $doctor->id) }}">Edit</a>
                    </td>
                    <td>
                      <form action="{{ route('doctor.delete', $doctor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="text" onclick="return confirm('Are You Sure You Want To Delete Doctor !')" class="rounded btn btn-danger text-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial: Footer -->
      @include('admin.layouts.footer')
    <!-- End custom js for this page -->
  </body>
</html>
