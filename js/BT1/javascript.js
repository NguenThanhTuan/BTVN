"use strict"
//Bài 3
document.write("Bài 3:");
document.write("<br>");
function giaithua (n)
{
    if(n==0)
        return 1;
    else 
    {
        return (n*giaithua(n-1));
    }
    //alert(giaithua);
}
var a = 27;
document.write(giaithua(a));
document.write("<br>");


//Bài 2:
document.write("Bài 2:");
document.write("<br>");
var name = "everyday";
var arr = name.split("");
arr = arr.sort();
document.write(arr.join(""));
document.write("<br>");

//Bài 1:
document.write("Bài 1:");
document.write("<br>");
function tach_ten ()
{
    var str = "TUAN";
    
    var substring = str.substring(0, 4); 
    var substring2 = str.substring(0, 3);
    var substring3 = str.substring(0, 2);
    var substring4 = str.substring(1, 4);
    document.write(substring); 
    document.write("<br>");
    document.write(substring2);
    document.write("<br>");
    document.write(substring3); 
    document.write("<br>");
    document.write(substring4);
}
tach_ten();
