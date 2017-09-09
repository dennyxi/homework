$(function(){
  $("#registrationForm").submit(function(event){
    var errors=[];

    if (!$(this.name).val()) {
      errors.push("<li>You must enter a name.</li>");
      $(this.name).parents("div.required").addClass("error");
      event.preventDefault();

    }
    if (!$(this).find("input[name='gender']:checked", this).length) {
      errors.push("<li>You must select a gender.</li>");
      $("input[name='gender']", this).parents("div.required").addClass("error");
      event.preventDefault();

    }
    if (errors.length > 0) {
      $(this).prepend("<div class='errors'>You must "+
    "correct the following errors:<ul>"+ errors.join("")+"</ul></div>");
    }

  });
});
