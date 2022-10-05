
document.addEventListener("DOMContentLoaded", function (event) {
var btn1 = document.querySelector(".btn-1");
var btn2 = document.querySelector(".btn-2");
var h3 = document.querySelector(".nome");

console.log(btn1)

btn1.addEventListener("click", function(){
    var up = h3.style.fontSize.value()

    h3.classList.add('font');

});

btn2.addEventListener("click", function(){
    h3.classList.toggle('font');

});
});