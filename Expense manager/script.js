function disptrans(){
document.getElementById('trans').style.display = "block";
document.getElementById('message').innerHTML = "";
document.getElementById('output').innerHTML = "";
document.getElementById('form1').style.display = "block";

document.getElementsByClassName("msg")[0].style.display = "none";
if (document.getElementById('tracker').style.display == "block")
{
document.getElementById('tracker').style.display = "none";
document.getElementById('form2').style.display = "none";
}
}
function disptracker(){
document.getElementsByClassName("msg")[0].style.display = "none";
document.getElementById('tracker').style.display = "block";
document.getElementById('message').innerHTML = "";
document.getElementById('output').innerHTML = "";
document.getElementById('form2').style.display = "block";
if (document.getElementById('trans').style.display == "block")
{
document.getElementById('trans').style.display = "none";
document.getElementById('form1').style.display = "none";
}
}
function home()
{
document.getElementById('trans').style.display = "none";
document.getElementById('message').innerHTML = "";
document.getElementById('output').innerHTML = "";
document.getElementById('form1').style.display = "none";
document.getElementById('tracker').style.display = "none";
document.getElementById('form2').style.display = "none";
document.getElementsByClassName("msg")[0].style.display = "block";
}
function alltrans(){
document.getElementById('trans').style.display = "none";
document.getElementById('message').innerHTML = "";
document.getElementById('output').innerHTML = "";
document.getElementById('form1').style.display = "none";
document.getElementById('tracker').style.display = "none";
document.getElementById('form2').style.display = "none";
document.getElementsByClassName("msg")[0].style.display = "none";
}