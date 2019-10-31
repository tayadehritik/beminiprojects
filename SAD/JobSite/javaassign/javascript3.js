var fullTime = document.getElementById("job-type-1");
var partTime = document.getElementById("job-type-2");
var hidecompprof = document.getElementsByClassName("hidecompprofile");

fullTime.onclick = function(){
    document.getElementById("companyprof").style.display='block';
}
partTime.onclick = function(){
    document.getElementById("companyprof").style.display='block';
}
for(var i = 0; i < 3; i++)
{
    hidecompprof[i].onclick = function(){
        document.getElementById("companyprof").style.display='none';
    }
}