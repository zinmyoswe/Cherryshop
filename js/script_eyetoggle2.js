$(document).ready(function() {

  $("#icon-click2").click(function() {

    var className = $("#icon2").attr('class');
    className = className.indexOf('slash') !== -1 ? 'far fa-eye' : 'far fa-eye-slash'

    $("#icon2").attr('class', className);
    var input = $("#password2");

    if (input.attr("type") == "text") {
      input.attr("type", "password");
    } else {
      input.attr("type", "text");
    }
  });

});