// var hover = document.querySelector('.categories__item');
// hover.addEventListener('mouseover', dropDown);


// function dropDown() {
//   document.querySelector('#dropdown').classList.add("show");
// }
// $(document).ready(function(){
//   $(".categories__link").hover(function(){
//     $("#dropdown").toggleClass("show");
//   });
  // $("#dropdown").hide();

// });
function dropDown(id) {

    var elems = document.querySelectorAll(".subcategory__dropdown");

    [].forEach.call(elems, function(el) {
        el.classList.remove("show");
    });
    if(typeof id !== 'undefined') {
        document.getElementById('dropdown' + id).classList.add("show");
    }
    // document.getElementsByClassName('subcategory__dropdown')[0].style.visibility = 'hidden';
    // document.getElementById('dropdown' + id).classList.add("show");

}


(function() {

  var parent = document.querySelector(".price-slider");
  if(!parent) return;

  var
  rangeS = parent.querySelectorAll("input[type=range]"),
  numberS = parent.querySelectorAll("input[type=number]");

  rangeS.forEach(function(el) {
    el.oninput = function() {
      var slide1 = parseFloat(rangeS[0].value),
      slide2 = parseFloat(rangeS[1].value);

      if (slide1 > slide2) {
        [slide1, slide2] = [slide2, slide1];
      }

      numberS[0].value = slide1;
      numberS[1].value = slide2;
    }
  });

  numberS.forEach(function(el) {
    el.oninput = function() {
      var number1 = parseFloat(numberS[0].value),
      number2 = parseFloat(numberS[1].value);

      if (number1 > number2) {
        var tmp = number1;
        numberS[0].value = number2;
        numberS[1].value = tmp;
      }

      rangeS[0].value = number1;
      rangeS[1].value = number2;

    }
  });

})();