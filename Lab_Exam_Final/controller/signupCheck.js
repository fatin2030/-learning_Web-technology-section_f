

function signupCheck() {
    let name = document.getElementById('name').value;
    let userName = document.getElementById('userName').value;
    let phone = document.getElementById('phone').value;
    let password =document.getElementById('password').value;
    let rePassword =document.getElementById('rePassword').value;
   

let checkUserName= false;
let checkPass=false;

let validUser="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

let validPass="@#*.";

for(let i=0;i<userName.length;i++)
{
    for(j=0;j<validUser.length;j++)
    {
        if(userName[i]==validUser[j])
        {
            checkUserName=true;
        }
   
    }
}

for(i=0;i<password.length;i++)
{
    for(j=0;j<validPass.length;j++)
    {
        if(password[i]==validPass[j])
        {
            checkPass=true;
        }
   
    }

}


    if(name==""||phone==""||rePassword==""||userName==""||password==""){
        alert('!!!Please provide all information.');
        return false;
    }
    if(password!=rePassword){
        alert('!!!Password must be same.');
        return false;
    }
    if (!checkUserName) {
        alert('Write a valid User name');
        return false;
    }
    if(!checkPass){
        alert('!!!Password must be contain @>.');
        return false;
    }
    else{
        return true;
    }
   
}