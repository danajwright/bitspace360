

//SCROLL TO ANCHOR

function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#meetup").click(function() {
   scrollToAnchor('meetup');
});

$("#mining").click(function() {
   scrollToAnchor('mining');
});

$("#hacking").click(function() {
   scrollToAnchor('hacking');
});



//SHOW FORM SUBMIT CONFIRM FLASH

window.setTimeout("closeFlashNotice();", 4000);
  function closeFlashNotice(){
    document.getElementById("flash-notice").style.display="none";
  }


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
    $(".twitter-timeline").contents().find(".e-entry-title").css("font-size","13px");
    $(".twitter-timeline").contents().find(".tweet").css("font-size","13px");
    $(".twitter-timeline").contents().find(".tweet").css("line-height","16px");
  }, 1000);