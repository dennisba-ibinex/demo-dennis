@extends('layouts.app')

@section('content')
  @include('partials.home-carousel')
  <div class="welcome-text">
    <p>It is with great pleasure that {{ get_bloginfo('name') }} welcomes you to El Segundo, and to his website. With years of experience in the market, he knows how crucial it is for you to find relevant, up-to-date information. The search is over. His website is designed to be your one-stop shop for real estate in El Segundo. This is the moment that you should enjoy the most; looking at the available properties in El Segundo; imagining yourself living in the home that you have always dreamed about. You don’t want just another database that gives you rehashed property descriptions. You want to walk around the neighborhood from the comfort of your own home. You want to get a clear picture about life in El Segundo.</p>
  </div>
@endsection
