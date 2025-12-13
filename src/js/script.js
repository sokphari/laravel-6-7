let display = $("#display");

$(document).ready(function () {

  $(".btn").click(function () {
    let value = $(this).text();
    display.val(display.val() + value);
  });
  $("#clear").click(function () {
    display.val("");
  });
  $("#del").click(function () {
    let current = display.val();
    display.val(current.slice(0, -1));
  });
  $("#equal").click(function () {
    try {
      display.val(eval(display.vl()));
    } catch {
      display.val("មិនឪ្យធ្វើទេ ចាំបាត់នឹកគេសិន !🙅😒🫵");
    }
  });
  

});
