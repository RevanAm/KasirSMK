<!-- resources/views/contact-us.blade.php -->
@extends('templates.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Contact Us</h2>
                <p>Here is our complete address:</p>
                <address>
                    123 Main Street, Cityville, State, Country
                </address>
                <p>Office Photo:</p>
                <img width="400" height="250" src="{{ asset('images') }}/office-photo.jpeg" alt="Office Photo"
                    class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Location</h2>
                <!-- Embed Google Maps here -->
                <iframe src="https://www.google.com/maps/embed/v1/view?key=YOUR_API_KEY&center=LATITUDE,LONGITUDE&zoom=15"
                    width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Have a Question?</h2>
                <form action="{{ url('contact-us') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
