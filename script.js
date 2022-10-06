
document.addEventListener("click", function (event) {
    var btn1 = document.querySelector(".btn-1");
    var btn2 = document.querySelector(".btn-2");
var h3 = document.querySelector(".nome");
var styleFont = getComputedStyle(h3).fontSize
var styleFont = styleFont.replace('px','')
var styleFont = Number(styleFont)


btn1.addEventListener("click", upFont);

btn2.addEventListener("click", downFont);

function upFont(){
    console.log(typeof(styleFontNumber))
    h3.style.fontSize = (styleFont + 1)+'px'
}

function downFont(){
    h3.style.fontSize = (styleFont - 1)+'px'

}

});