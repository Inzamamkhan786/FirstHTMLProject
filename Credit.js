function validate(){
    let x=document.getElementById("card_name").value;
    let y=document.getElementById("card_number").value;
    
    if(x==""){
        alert("Name can not be Empty!");
        return false;
    }
    
    if(y.length>12||y.length<12){
        alert("Please Enter the 12 digit card number!!");
        return false;
    }else{
        return true;
    }
    
      }
    