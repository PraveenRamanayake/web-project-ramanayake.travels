function validateform() {
    var fname =document.getElementById('fname').value;
    var lname =document.getElementById('lname').value;
    var email =document.getElementById('email').value;
    var uid =document.getElementById('uid').value;
    var pwd =document.getElementById('pwd').value;
        
  if(fname.length == 0) {

  	
    alert("Please Enter First name!");
    return false;
  }else
      if(lname.length == 0){
    alert("Please Enter Last name!");
    return false;
                            }
  	
   else
      if(email.length == 0){
    alert("Please Enter email!");
    return false;
                            }
    else
      if(uid.length == 0){
    alert("Please Enter Username!");
    return false;
                            }
    else
      if(pwd.length == 0){
    alert("Please Enter Password!");
    return false;
                            }
    else
    validateEmail();
                            
    

	}
	function validateEmail(){
		var email =document.getElementById('email').value;
		 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
			 alert("Do Really Want To Submit This");
		 }
		 else{
			 alert("Enter a valid email");
		 }
	}
	
	
	function validatecontact(){
		
		var name=document.getElementById('name').value;
		var email=document.getElementById('email').value
		
		if(name==0){
			alert("Enter your name");
			return false;
		}
		else
			if(email==0){
			alert("Enter your email"); 
			return false;}
			else
			validateEmail();
		
		
		
		
	}
	
	function validatelog(){
		
		var uid=document.getElementById('uid').value;
		var pwd=document.getElementById('pwd').value;
		
		if(uid==0){
			alert("Enter your username");
			return false;
		}
		else
			if(pwd==0){
			alert("Enter your password");
			return false;
			}
			else return true;
		
		
	}



    function calRate()
{
    var distance=prompt("Enter The Distace In km's","");
    var rate=distance*50;
    alert("Your Estimated Cost Is Rs."+rate+".00");
    
    
    
}
  









