@extends('layout.master')

@section('content')

<form method="post" action="contact-us">
    {{csrf_field()}}
        <div class="row">
            <div class="col-md-6 form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">

            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">

            </div>
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">

        </div>
        <div class="form-group mt-3">
            <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>

        </div>
        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit" class="btn btn-primary btn-round">Send</button></div>
    </form>

@endsection
