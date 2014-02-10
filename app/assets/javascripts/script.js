

//GOOGLE ANALYTICS

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47927538-1', 'bitspace360.com');
  ga('send', 'pageview');

</script>




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

$("#twitter").click(function() {
   scrollToAnchor('twitter');
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