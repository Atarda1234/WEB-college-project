

  $("#btnLunch").click(
    function () {
      $("#headline").html("<b>Lunch</b>");
      $("#morning").hide();
      $("#lunch").show();
      $("#evening").hide();
      $("#snacks").hide();
    }
  );

  $("#btnEvening").click(
    function () {
      $("#headline").html("<b>Dinner</b>")
      $("#morning").hide();
      $("#lunch").hide();
      $("#evening").show();
      $("#snacks").hide();
    }
  );

  $("#btnSnacks").click(
    function () {
      $("#headline").html("<b>Snacks</b>")
      $("#morning").hide();
      $("#lunch").hide();
      $("#evening").hide();
      $("#snacks").show();
    }
  );            