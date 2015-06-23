<script>
  $(document).ready(function() {
    var carousel = 0;
    $(".left").click(function() {
      if (carousel < 1) {
        $("#middle4b").animate({
          "margin-left": "-1540px"
        }, 500);
        carousel = 5;
      } else {
        $("#middle4b").animate({
          "margin-left": "+=308px"
        }, 500);
        carousel -= 1;
      }
    });
    $(".right").click(function() {
      if (carousel < 5) {
        $("#middle4b").animate({
          "margin-left": "-=308px"
        }, 500);
        carousel += 1;
      } else {
        $("#middle4b").animate({
          "margin-left": "0px"
        }, 500);
        carousel = 0;
      }
    });
  });
</script>