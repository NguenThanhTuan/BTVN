"use strict"
// Thêm "button close" vào mỗi mục
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++)
{
    var span = document.createElement("span");
    var txt = document.createTextNode("\u00D7");
    span.className = "close";
    span.appendChild(txt);
    myNodelist[i].appendChild(span);
}

// Click vào close để đóng mục 
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) 
{
    close[i].onclick = function() 
    {
        var div = this.parentElement;
        div.style.display = "none";
    }
}

// Check mục đã xong
var list = document.querySelector('ul');
list.addEventListener('click', function(e) 
{
    if (e.target.tagName === 'LI') 
    {
        e.target.classList.toggle('checked');
    }
}, false);

// Tạo mục mới
function newElement() 
{
    var li = document.createElement("li");
    var inputValue = document.getElementById("input").value;
    var t = document.createTextNode(inputValue);
    li.appendChild(t);
    if (inputValue === '') 
    {
        alert("Hãy nhập công việc của bạn");
    } 
    else 
    {
        document.getElementById("list").appendChild(li);
    }
    document.getElementById("input").value = "";

    var span = document.createElement("span");
    var txt = document.createTextNode("\u00D7");
    span.className = "close";
    span.appendChild(txt);
    li.appendChild(span);

    for (i = 0; i < close.length; i++) 
    {
        close[i].onclick = function() 
        {
            var div = this.parentElement;
            div.style.display = "none";
        }
    }
}
function runScript(e) 
{
    if (e.keyCode == 13) 
    {
        newElement();
        return false;
    } 
    console.log("e");
}
