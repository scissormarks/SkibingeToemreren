function main() { //Hides each about section as the page loads.
  jQuery(".navburger").on("click", function(){ //An on click that reacts when the expand button is hit.
    jQuery(".main-nav").slideToggle(300); //This makes the element next to the button toggle with a sliding animation. "this" referes to the selector which in this case is about-button and .next() is the next element, which then selects said element
    jQuery(".mainnavwrapper").toggleClass("active"); //This line of code toggles its own class to "active", this can be used to change still upon click. 
  });
}
jQuery(document).ready(main);