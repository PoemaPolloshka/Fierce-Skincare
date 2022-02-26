var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
function visitPage(){
  var w = window.open('login.php');      
    }

   function validateform(){  
      const email=document.getElementByName('email');  
      const password=document.getElementbyName('password');

      if (email==null || email==""){  
        alert("Email can't be blank");  
        return false;  
      }else if(password.length<6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
        }  else{
          alert("You are registred!");
        }
      }
    

    document.getElementByName("password").pattern = "^([A-Z][a-z]+)\d{3}$";
    document.getElementByName("email").pattern = " (\w\.?)+@[\w\.-]+\.\w{2,}";
   
   
  