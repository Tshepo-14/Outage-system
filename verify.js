

function getInputValue()
{
    let inputVal = document.getElementById("service_id").value;
    var len= inputVal.length;
    
    if(len<13)
    {
        alert("Please enter correct Service ID 027xxx (13 characters)");
    }
    else
    {
        window.location.href = "index2.html";
    }
    
}

function neW()
{
    window.location.href = "360 outage.html";
}

