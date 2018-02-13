@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        Group of amazing people
    </div>

    <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras efficitur dapibus sodales. Aliquam bibendum pulvinar massa, sit amet ullamcorper sem pellentesque ut. Vestibulum vehicula sapien sed cursus blandit. Nam porta tempus lorem vitae pellentesque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed varius enim non.</p>
    </div>

</div>

<br>

<div class="row">
    <div class="col-md-6">
         <div class="col-md-12">
              <div class="card">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body">
                  <h5 class="card-title">Create a Group</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Create One!</a>
                </div>
                
              </div>
         </div>

         <br>

         <div class="col-md-12">
              <img src="http://via.placeholder.com/510x395" alt="">
         </div>
    </div>

    <div class="col-md-6">
         <div class="col-md-12">
              <div class="card">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body">
                  <h5 class="card-title">Find a Group</h5>
                  <p class="card-text"><input type="text" class="form-control" name="search" placeholder="group name.."></p>
                </div>
                
              </div>
         </div>

         <br>

         <div class="col-md-12">
              <div class="card">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body">
                  <h5 class="card-title">Most Active Group</h5>
                  
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      <small>Donec id elit non mi porta.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                  </div>
                </div>
                
              </div>
         </div>
    </div>
</div>
@endsection
