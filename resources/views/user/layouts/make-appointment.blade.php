<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
      <form class="main-form" action="{{ route('appointment') }}" method="POST">
        @csrf

        @if (session()->has('message'))
        <div class="mb-3">
            <h4 class="text-center alert alert-success">{{ session()->get('message') }}</h4>
        </div>
        @endif
        
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
            @error('email')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" id="date" name="date" class="form-control">
            @error('date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" class="custom-select">
              <option hidden>Choose Doctor</option>
              @foreach ($doctors as $doctor)
              <option value="{{ $doctor->name }}">{{ $doctor->name }} -- {{ Str::limit($doctor->speciality, 14) }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="phone"class="form-control" placeholder="Enter Your Phone Number">
            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
            @error('message')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->