

// BTC PRICE TICKER

$(function() {

  var lastPrice = $.ajax({
    url: "https://api.bitcoinaverage.com/ticker/global/USD/last",
    type: "get",
    dataType: "json",
  });

  lastPrice.done(function(data) {
    $('#price').html(data);

  });

});

// TWITTER TICKER

window.setTimeout(function(){
    $(".twitter-timeline").contents().find(".e-entry-title").css("font-family","sans-serif");
    $(".twitter-timeline").contents().find(".tweet").css("font-family","sans-serif");
  }, 1000);