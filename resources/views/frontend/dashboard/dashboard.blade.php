@extends('frontend.dashboard.layouts.master')

@section('title')
  Dashboard | {{$setting->site_name}}
@endsection

@section('content')

<div class="wsus__dashboard">
    <div class="row">
      <div class="col-xl-2 col-6 col-md-4">
        <a class="wsus__dashboard_item red" href="dsahboard_order.html">
          <i class="far fa-address-book"></i>
          <p>order</p>
        </a>
      </div>
      <div class="col-xl-2 col-6 col-md-4">
        <a class="wsus__dashboard_item green" href="dsahboard_download.html">
          <i class="fal fa-cloud-download"></i>
          <p>download</p>
        </a>
      </div>
      <div class="col-xl-2 col-6 col-md-4">
        <a class="wsus__dashboard_item sky" href="dsahboard_review.html">
          <i class="fas fa-star"></i>
          <p>review</p>
        </a>
      </div>
      <div class="col-xl-2 col-6 col-md-4">
        <a class="wsus__dashboard_item blue" href="dsahboard_wishlist.html">
          <i class="far fa-heart"></i>
          <p>wishlist</p>
        </a>
      </div>
      <div class="col-xl-2 col-6 col-md-4">
        <a class="wsus__dashboard_item orange" href="dsahboard_profile.html">
          <i class="fas fa-user-shield"></i>
          <p>profile</p>
        </a>
      </div>
      <div class="col-xl-2 col-6 col-md-4">
        <a class="wsus__dashboard_item purple" href="dsahboard_address.html">
          <i class="fal fa-map-marker-alt"></i>
          <p>address</p>
        </a>
      </div>
    </div>
    
  </div>

@endsection