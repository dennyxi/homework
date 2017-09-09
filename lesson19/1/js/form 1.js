$(function(){
  $("#registrationForm").submit(function(event){
    if (!$(this.name).val()) {
      event.preventDefault();
      alert("You must enter a name.");
    }
    if (!$(this).find("input[name='gender']:checked").length) {
      event.preventDefault();
      alert("You must select your gender.");
    }
    console.log($(this.name).val());
  });
});
