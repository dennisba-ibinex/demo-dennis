@extends('layouts.app')

@section('content')

<!--  -->
  <div class="container-fluid">
    <?php
      dynamic_sidebar( 'homepage-widget-row-1' );
      dynamic_sidebar( 'homepage-widget-row-2' );
      dynamic_sidebar( 'homepage-widget-row-3' );
      dynamic_sidebar( 'homepage-widget-row-4' );
      dynamic_sidebar( 'homepage-widget-row-5' );
      dynamic_sidebar( 'homepage-widget-row-6' );
    ?>
  </div>

  @include('partials.home-carousel')
  <div class="welcome-text">  <!-- planned-dynamic-content -->
    <p>It is with great pleasure that {{ get_bloginfo('name') }} welcomes you to El Segundo, and to his website. With years of experience in the market, he knows how crucial it is for you to find relevant, up-to-date information. The search is over. His website is designed to be your one-stop shop for real estate in El Segundo. This is the moment that you should enjoy the most; looking at the available properties in El Segundo; imagining yourself living in the home that you have always dreamed about. You don’t want just another database that gives you rehashed property descriptions. You want to walk around the neighborhood from the comfort of your own home. You want to get a clear picture about life in El Segundo.</p>
  </div>

  <div class="row home-featured-wrap">
    <div class="widget-a col-md-4 featured-block">
      <h5 class="featured-title-a">FEATURED PROPERTY</h5>
      <img class="featured-loc-img" src="https://picsum.photos/351/200?image=515" alt="placeholder-image">
      <div class="featured-loc-name">SANTA MONICA</div>
      <div class="featured-loc-price">$250,000</div>
    </div>

    <div class="widget-b col-md-4 featured-block">
      <h5 class="featured-title-b">QUICK SEARCH</h5>
      <form>
        <select id="searchCityId" name="city" class="dd-custom-select">
          <option>SELECT A CITY</option>
          <option>EL SEGUNDO</option>
          <option>HERMOSA BEACH</option>
          <option>MANHATTAN BEACH</option>
          <option>SANTA MONICA</option>
        </select>


        <select id="searchPropertyType" name="type" class="dd-custom-select">
          <option selected value="">PROPERTY TYPE</option>
          <option value="">RESIDENTIAL</option>
          <option value="">SINGLE FAMILY</option>
          <option value="">TOWNHOUSE</option>
          <option value="">VACATION</option>
        </select>

        <select id="searchBedRooms" name="min_bed" class="dd-custom-select">
          <option selected value="">Beds</option>
          <option value="">1+</option>
          <option value="">1+</option>
          <option value="">2+</option>
          <option value="">3+</option>
          <option value="">4+</option>
          <option value="">5+</option>
          <option value="">6+</option>
        </select>

        <select id="searchBaths" name="min_bath" class="dd-custom-select">
          <option selected value="">Baths</option>
          <option value="">Any</option>
          <option value="">1+</option>
          <option value="">2+</option>
          <option value="">3+</option>
          <option value="">4+</option>
          <option value="">5+</option>
          <option value="">6+</option>
        </select>

        <select id="searchMinPrice" name="min_price" class="dd-custom-select">
          <option selected value="">Min Price</option>
          <option value="">$100,000</option>
          <option value="">$200,000</option>
          <option value="">$300,000</option>
          <option value="">$400,000</option>
          <option value="">$500,000</option>
          <option value="">$600,000</option>
        </select>

        <select id="searchMaxPrice" name="min_price" class="dd-custom-select">
          <option selected value="">Max Price</option>
          <option value="">$100,000</option>
          <option value="">$200,000</option>
          <option value="">$300,000</option>
          <option value="">$400,000</option>
          <option value="">$500,000</option>
          <option value="">$600,000</option>
        </select>

        <input type="submit" value="Search" class="dd-custom-submit">
      </form>
      <a href="#" class="dd-custom-anchor">Advanced Search</a>
    </div>

    <div class="widget-c col-md-4 featured-block">
      <h5 class="featured-title-a">FEATURED COMMUNITY</h5>
      <img class="featured-loc-img" src="https://picsum.photos/351/200?image=520" alt="placeholder-image">
      <div class="featured-loc-name">SANTA MONICA</div>
      <div class="featured-loc-price">$250,000</div>
    </div>
  </div>

  <div class="row widget-d-area">
    <div class="widget-d col-md-12">
      <a href="#" class="widget-d-btn">
        <span class="widget-d-btn-txt">FIND MY DREAM HOME</span>
      </a>

      <a href="#" class="widget-d-btn">
        <span class="widget-d-btn-txt">WHAT'S MY HOME WORTH?</span>
      </a>

      <a href="#" class="widget-d-btn">
        <span class="widget-d-btn-txt">HELP ME RELOCATE</span>
      </a>
    </div>
  </div>
@endsection
