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
          <div class="col-md-12 mx-auto grid-margin">
            <div class="mt-3 card card-primary">
                <div class="card-header">
                  <h3 class="card-title text-center">View All Doctors</h3>
                </div>
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th>Name</th>
                    {{-- <th>Email</th> --}}
                    <th>Phone</th>
                    <th>Dr:Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Approved</th>
                    <th>Canceled</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->name }}</td>
                            {{-- <td>{{ $appointment->email }}</td> --}}
                            <td>{{ $appointment->phone }}</td>
                            <td>{{ $appointment->doctor }}</td>
                            <td>{{ $appointment->date }}</td>
                            <td>{{ $appointment->message }}</td>
                            <td>{{ $appointment->status }}</td>
                            <td><a class="text-success" href="{{ route('doctor.approved', $appointment->id) }}">Approved</a></td>
                            <td><a class="text-danger" href="{{ route('doctor.canceled', $appointment->id) }}">Canceled</a></td>
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
