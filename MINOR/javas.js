function swapElements(Element1,Element2)
{
    var xforms = Element1.getAttribute('transform');
    var parts  = /translate\(\s*([^\s,)]+)[ ,]([^\s,)]+)/.exec(xforms);
    var X1 = parts[1],
        Y1 = parts[2];
//    console.log(firstX);
    var xforms = Element2.getAttribute('transform');
    var parts  = /translate\(\s*([^\s,)]+)[ ,]([^\s,)]+)/.exec(xforms);
    var X2 = parts[1],
        Y2 = parts[2];
//    console.log(firstX1);


// Setting
    Element1.setAttribute('transform',"translate("+X2+","+Y1+")");
    Element2.setAttribute('transform',"translate("+X1+","+Y2+")");
    Element1.setAttribute('transition','1s');
}

window.setTimeout(function() {
    swapElements(myElement,myElement1)
  }, 2000);