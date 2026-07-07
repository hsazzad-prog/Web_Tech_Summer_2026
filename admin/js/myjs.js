
function usernamevalidation(){
var username=   document.getElementById("username").value;

 if(username==""){
     console.log("Please enter username");
     document.getElementById("username-error").innerHTML = "Please enter username";
    return false;
  
 }

}
function passwordvalidation(){
    var password=   document.getElementById("password").value;

     if(password.length<6){
         console.log("Please enter password");
         document.getElementById("password-error").innerHTML = "Please enter a valid password";
        return false;
        }
        
}


function myvalidation()
{
 if(usernamevalidation()==false || passwordvalidation()==false)
 {
     return false;
 }
 else
 {
     return true;
 }
}