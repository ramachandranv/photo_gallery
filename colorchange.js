var colors=new Array("red","green","blue","magenta","gray","brown");
var index=0;
function changecolor()
{
 document.getElementById("color").style.color=colors[index];
 if(index>5)
 {
  index=0;
 }
 else
 {
  index++;
 }
}
function startcolorchange()
{
 setInterval("changecolor()",500);
}
window.onload=startcolorchange();
