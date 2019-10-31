var modal = document.getElementById("modal");
var onclickbutton = document.getElementById("job1");
var close = document.getElementsByClassName("closebutton")[0];
var jobs = document.getElementsByClassName("job");

for(var i = 0;i<jobs.length;i++)
{
    jobs.item(i).onclick = function()
    {
        modal.style.display = "block";
    }
}
close.onclick = function(){
    modal.style.display = "none";
}
window.onclick = function(){
    if(event.target == modal)
    {
        modal.style.display = "none";
    }
}