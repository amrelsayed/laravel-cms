@extends('layouts.user')

@section('content')
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Contact Us</h1>

      <form>
         <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

         <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      </div>
@endsection