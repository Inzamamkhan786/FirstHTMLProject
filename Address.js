
function validate(){
    let x=document.getElementById("fname").value;
    let y=document.getElementById("phone").value;
    let z=document.getElementById("pincode").value;
    let a=document.getElementById("house").value;
    let b=document.getElementById("town").value;
    
     
    if(x==""){
        alert("Name cannot be Empty!!");
        return false;
    }
    if(a == "")
    {
        alert("House address can't be Empty ");
        return false;
    }
    
    if(b == "")
    {
        alert("Town can't be Empty ");
        return false;
    }
    if(y.length != 10|| y==""){
        alert("The phone number should be  10-digits long");
        return false;
    }else if(z.length<6||z.length>6 || z==""){
        alert("The pincode should be only 6-digits numerical value")
        return false
    }
}



