$(document).ready(function(){
  $(".form-wrapper .button").click(function(){
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
  });

  $(".atras").click(function(){
    var atras = $(this);
    var currentSection = atras.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);

    if(currentSectionIndex===1)
    {
      currentSection.removeClass("is-active").next().next().next().addClass("is-active");
      headerSection.removeClass("is-active").next().next().next().addClass("is-active");
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
    if(currentSectionIndex===2)
    {
      currentSection.removeClass("is-active").next().next().addClass("is-active");
      headerSection.removeClass("is-active").next().next().addClass("is-active");
      $(document).find(".form-wrapper .section").first().next().addClass("is-active");
      $(document).find(".steps li").first().next().addClass("is-active");
    }
    if(currentSectionIndex===3)
    {
      currentSection.removeClass("is-active").next().addClass("is-active");
      headerSection.removeClass("is-active").next().addClass("is-active");
      $(document).find(".form-wrapper .section").first().next().next().addClass("is-active");
      $(document).find(".steps li").first().next().next().addClass("is-active");
    }    
  });
});
