function alert_box()
{
alert("Welcome to Assignment Page !");
}
function confirm_box()
{
var r = confirm("Exams are near, Have you started preparing for?");
if(r == true)
{
alert("Be prepared ..");
}
else
{
alert("You have to prepare");
}
}
function prompt_box()
{
var name = prompt("Please enter your name","Name");
if(name!=null && name!= "")
{
    document.write("Hello! " + name +", Best of luck for your Exam")
}
}