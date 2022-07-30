$(document).ready(function() {

  $("#icon-click3").click(function() {

    var className = $("#icon3").attr('class');
    className = className.indexOf('slash') !== -1 ? 'far fa-eye' : 'far fa-eye-slash'

    $("#icon3").attr('class', className);
    var input = $("#password3");

    if (input.attr("type") == "text") {
      input.attr("type", "password");
    } else {
      input.attr("type", "text");
    }
  });

});