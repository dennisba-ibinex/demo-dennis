// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// base package
import fontawesome from "@fortawesome/fontawesome";

// Import Icons
import faFacebookSquare from "@fortawesome/fontawesome-free-brands/faFacebookSquare";
import faTwitterSquare from "@fortawesome/fontawesome-free-brands/faTwitterSquare";
import faGooglePlusSquare from "@fortawesome/fontawesome-free-brands/faGooglePlusSquare";
import faLinkedinIn from "@fortawesome/fontawesome-free-brands/faLinkedinIn";
import faYelp from "@fortawesome/fontawesome-free-brands/faYelp";

// add the imported icons to the library
fontawesome.library.add(faFacebookSquare, faTwitterSquare, faGooglePlusSquare, faLinkedinIn, faYelp);

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
