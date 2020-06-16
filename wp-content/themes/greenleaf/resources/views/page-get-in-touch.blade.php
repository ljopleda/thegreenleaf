@extends('layouts.app')

@section('content')
<div class="main_container contact-page pt-5 pb-5">
    <div class="overlay"></div>
    <section class="text-center p-5 ">
        <h2>CONTACT US</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <form class="text-left mt-5">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">First Name</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group col-md-6">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname">
                </div>
                <div class="form-group col-md-12">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group col-md-12">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject">
                </div>
                <div class="form-group col-md-12">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" rows="3"></textarea>
                </div>                    
              </div>
            <div class="mt-4 text-center"> <button class="btn btn-default">GET IN TOUCH</button></div>
        </form>
    </section>
</div>
  
@endsection
