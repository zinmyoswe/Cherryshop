$(document).ready(function() {

  $("#icon-click").click(function() {

    var className = $("#icon").attr('class');
    className = className.indexOf('slash') !== -1 ? 'far fa-eye' : 'far fa-eye-slash'

    $("#icon").attr('class', className);
    var input = $("#password");

    if (input.attr("type") == "text") {
      input.attr("type", "password");
    } else {
      input.attr("type", "text");
    }
  });

});