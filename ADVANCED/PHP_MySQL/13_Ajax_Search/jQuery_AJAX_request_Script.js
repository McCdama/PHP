$(document).ready(function () {
  $('.search-box input[type="text"]').on("keyup input", function () {
    // get input value on change
    var inputVal = $(this).val();
    var resultDropDown = $(this).siblings(".result");

    if (inputVal.length) {
      $.get("backend-search.php", { term: inputVal }).done(function (data) {
        resultDropDown.html(data);
      });
    } else {
      resultDropDown.empty();
    }
  });
  // Set search input value on click of result item

  $(document).on("click", ".result p", function () {
    $(this)
      .parents(".search-box")
      .find('input[type="text"]')
      .val($(this).text());
    $(this).parents(".result").empty();
  });
});
