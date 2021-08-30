document.addEventListener("DOMContentLoaded", function() {
    // All radiobutton and  buttons must be unchecked when document is ready
    var radio = document.getElementsByName('edit');
    const button = document.getElementsByTagName("button");
    for(i = 0; i < radio.length; i++) 
    {
        radio[i].checked = false;
        button[i].disabled = true;
    }
    //localStorage.setItem("IDvalue",-1);
  });

let clickedValue = 0;

function enableB() 
{
    
    var radio = document.getElementsByName('edit');
    for(i = 0; i < radio.length; i++) 
    {
        if(radio[i].checked)
        {
               
                document.getElementById(i+1).disabled = false;
                clickedValue = i+1;
                
        }
        else
        {
            document.getElementById(i+1).disabled = true;
        }
    }
}





const button = document.getElementsByTagName("button");
for (var i = 0 ; i < button.length; i++) {
    button[i].addEventListener('click' , ()=>{
        //localStorage.setItem("IDvalue",clickedValue);
        
        window.location.href = "../update_table/update_table.php?userid=" + clickedValue;

    }); 
 }