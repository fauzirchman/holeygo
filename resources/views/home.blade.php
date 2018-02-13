@extends('layouts.app')

@section('content')
<div class="card card-default">

    <div class="card-body">
        <input type="text" class="form-control" name="search" placeholder="find your place...">
    </div>

    <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px;">
      <div class="container">
        <h1 class="display-4">Discover Your Best Holiday with HoleyGo</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>

</div>

<br>

<div class="row">
    <div class="col-md-6">
        <div class="card">
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title">Free Member</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link" data-toggle="modal" data-target="#FreeMemberModal">See What It's Value</a>
          </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
          <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
          <div class="card-body">
            <h5 class="card-title">Premium User</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link" data-toggle="modal" data-target="#PremiumUserModal">See What It's Value</a>
          </div>
          
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="FreeMemberModal" tabindex="-1" role="dialog" aria-labelledby="FreeMemberModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Free Member Advantages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="PremiumUserModal" tabindex="-1" role="dialog" aria-labelledby="PremiumUserModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Premium User Advantages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
      </div>
    </div>
  </div>
</div>

<br>

<div class="card card-default">
    
    <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. 
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
    </div>

    <hr>

    <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. 
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
    </div>

</div>
@endsection
