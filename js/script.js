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
