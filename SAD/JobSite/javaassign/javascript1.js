function hidecursor()
{
    document.body.style.cursor='none';
    document.getElementById('hidecursor1').style.cursor='none';   
    document.getElementById('hidecursor2').style.cursor='none'; 
    document.getElementById('hidecursor3').style.cursor='none'; 
    document.getElementById('hidecursor4').style.cursor='none'; 
    document.getElementById('hidecursor5').style.cursor='none';
    document.getElementById('hidecursor6').style.cursor='none';
}
document.onmousemove = function(){
    document.body.style.cursor='default';
    document.getElementById('hidecursor1').style.cursor='default';   
    document.getElementById('hidecursor2').style.cursor='default'; 
    document.getElementById('hidecursor3').style.cursor='default'; 
    document.getElementById('hidecursor4').style.cursor='default'; 
    document.getElementById('hidecursor5').style.cursor='default';
    document.getElementById('hidecursor6').style.cursor='default';
}