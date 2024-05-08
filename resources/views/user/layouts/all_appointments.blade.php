@include('user.design.header')

<div class="col-md-10  mx-auto grid-margin">
    <div class="mt-3 card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">My Appointments</h3>
        </div>
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th class="text-primary">No.</th>
            <th class="text-primary">Dr:Name</th>
            <th class="text-primary">Date</th>
            <th class="text-primary">Message</th>
            <th class="text-primary">Status</th>
            <th class="text-primary">Cancel Appointment</th>
          </tr>
          @foreach ($appointments as $appointment)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $appointment->doctor }}</th>
                <th>{{ $appointment->date }}</th>
                <th>{{ $appointment->message }}</th>
                <th>{{ $appointment->status }}</th>
                <th>
                <a class="text-danger" onclick="return confirm('Are You Sure You Want To Delete This Appointment !')" 
                    href="{{ route('cancel_Appointment', $appointment->id ) }}"> Cancel </a>
                </th>
              </tr>
          @endforeach
        </thead>
      </table>
    </div>
  </div>