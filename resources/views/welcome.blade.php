@extends('layouts.app')

@section('title')
  Homepage Bikestore
@endsection

@section('content')
<!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1>It's Your World,<br> Ride It!</h1>
          <p>There is no day without cycling</p>
          <div class="btn-cta">
            <img src="frontend/img/Copy of bicycle-logo 1 1.png">
            <a href="#" class="btn btn-warning">Order Your Bike</a>
          </div>
        </div>
        <div class="col-6">
          <img src="frontend/img/Group 3.png" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- Tutup Hero Section -->

  <!-- Trend Categories -->
  <section class="categories">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex section-title">
            <h4>Trend</h4>
            <h4>&nbsp;Categories</h4>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-4 component-categories">
        <div class="tag">
          <span>Mountain</span>
        </div>  
        <a href="#">
          <div class="categories-thumbnail">
            <div class="categories-img" style="background-image: url('frontend/img/categories-1.png');"></div>
          </div>
        </a>
        </div>
        <div class="col-3 component-categories">
          <div class="tag">
            <span>Road</span>
          </div>  
          <a href="#">
            <div class="categories-thumbnail">
              <div class="categories-img" style="background-image: url('frontend/img/categories-2.png');"></div>
            </div>
          </a>
          </div>
          <div class="col-5">
            <div class="row">
              <div class="col-12 component-categories">
                <div class="tag">
                  <span>Urban</span>
                </div>  
                <a href="#">
                  <div class="categories-thumbnail-small">
                    <div class="categories-img" style="background-image: url('frontend/img/categories-3.png');"></div>
                  </div>
                </a>
              </div>
            <div class="col-12">
              <div class="tag">
                <span>Junior</span>
              </div>
              <a href="#">
                <div class="categories-thumbnail-small">
                  <div class="categories-img" style="background-image: url('frontend/img/categories-4.png');"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Tutup Trend Categories -->

  <!-- Popular Products -->
  <section class="popular-products">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex section-title">
            <h4>Popular</h4>
            <h4>&nbsp;Products</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
              <img src="frontend/img/bicycle-1.png" class="img-fluid">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
              <img src="frontend/img/bicycle-1.png" class="img-fluid">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
              <img src="frontend/img/bicycle-1.png" class="img-fluid">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
              <img src="frontend/img/bicycle-1.png" class="img-fluid">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
              <img src="frontend/img/bicycle-1.png" class="img-fluid">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
              <img src="frontend/img/bicycle-1.png" class="img-fluid">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
              <img src="frontend/img/bicycle-1.png" class="img-fluid">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
              <img src="frontend/img/bicycle-1.png" class="img-fluid">
            </div>
            <div class="products-text mb-2">
              Speach Stealth
            </div>
            <div class="products-price">
              $333,33
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Tutup Popular Products -->

  <!-- Testimonial -->
  <section class="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="testimonial-hero">
            <img src="frontend/img/testimonial-img.png" class="testimonial-img">
            <img src="frontend/img/testimonial-frame.png" class="testimonial-frame">
          </div>
        </div>
        <div class="col-1"></div>
        <div class="col-7 my-auto">
          <div class="stars">
            <img src="frontend/img/stars.png" >
          </div>
          <h2 class="testimonial-text">BIKESTORE "GOES TO <br> CAMPUS X UIR ...</h2>
          <p class="testimonial-name">Nareswari, Programmer</p>
          <a href="#" class="btn btn-testimonial">Read Story</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Tutup Testimonial -->
@endsection
