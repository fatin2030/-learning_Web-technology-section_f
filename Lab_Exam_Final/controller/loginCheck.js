
function logIn() {
 
    let userName = document.getElementById('userName').value;
    let password =document.getElementById('password').value;
    if(userName==""||password==""){
        alert('!!!Please provide both username and password.');
        return false;
    }
    else{
        return true;
    }
   
}