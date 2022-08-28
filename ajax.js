function validateForm()
{
var x=document.forms["myForm"]["city"].value;
if (x==null || x=="")
  {
  alert("Please enter city");
  return false;
  }
}



function showOffer(str)
{ 
	 x = document.getElementById("mesh");
	 
	 //deselecting the selected
	 var elements = document.getElementById("meh").options;

    for(var i = 0; i < elements.length; i++){
      elements[i].selected = false;
    }
	 //deselecting the selected

	 var strUser = x.options[x.selectedIndex].text;
	     document.getElementById("wana").innerHTML = strUser;

if (str=="")
  {
  document.getElementById("abi").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("abi").innerHTML=xmlhttp.responseText;
    }
  }
  
  var str = strUser;
xmlhttp.open("GET","mall_ajax.php?q="+str,true);
xmlhttp.send();


 }
 
 
 function showformall(str)
{ 
	 x = document.getElementById("meh");

 //deselecting the selected
	 var elements = document.getElementById("mesh").options;

    for(var i = 0; i < elements.length; i++){
      elements[i].selected = false;
    }
 //deselecting the selected
	 var strUser = x.options[x.selectedIndex].text;
	     document.getElementById("wana").innerHTML = strUser;

if (str=="")
  {
  document.getElementById("abi").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("abi").innerHTML=xmlhttp.responseText;
    }
  }
  
  var str = strUser;
xmlhttp.open("GET","mall_ajax_2.php?q="+strUser,true);
xmlhttp.send();


 }

function showstreet(){
	 x = document.getElementById("local_bus").innerHTML;
	     document.getElementById("wana").innerHTML = x;
	

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("abi").innerHTML=xmlhttp.responseText;

    }
  }
xmlhttp.open("GET","street.php",true);
xmlhttp.send();


 }
 
 
 //

 //validation of form 
  
    $(document).ready(function(){
    
  
    $("#register").validate(
    {
    	
        rules: {
        	
        	country: {
                    required: true,
                    minlength: 1,
                    maxlength:20
                    
                   },
                   
            mail: {
            	    required: true,
                    minlength: 1,
                    maxlength:40
                    
                   },
            email: {
            	    required: true,
                    minlength: 1,
                    maxlength:40
                    
                   },
            subject: {
            	    required: true,
                    minlength: 1,
                    maxlength:40
                    
                   },
            message: {
            	    required: true,
                    minlength: 1,
                    maxlength:340
                    
                   },
            street_add: {
            	    required: true,
                    minlength: 1,
                    maxlength:20
                    
                   },
            website: {
                    required: true,
                    minlength: 4,
                    maxlength:50
                    
                   },
            phone: {
                    required: true,
                    minlength: 4,
                    maxlength:30
                    
                   },
            city: {
                    required: true,
                    minlength: 1,
                    maxlength:20
                    
                   },
            sector: {
                    required: true
                   
                   },
               
                   
             profile: {
                    required: true,
                    minlength: 1,
                    maxlength:240
                    
                   },
         
           name:    {
                    required: true,
                    minlength: 1,
                    maxlength:20
                    
                    },
           
            username: {
                    required: true,
                    minlength: 2,
                    maxlength:20
                    },
                    
            password: {
                    required: true,  <!-- /Password must contain at least five letter, at least one number, and be longer than six charaters./-->
                    
                    },
                    
            rpassword: {
                    required: true,
                    equalTo: "#password"
                    }
                 },
       
       messages: {
       	
         	  name: {
                    required: "business name is required",
                    minlength: "please type a minimum of 1 characters",
                    maxlength: "Not more than 20 characters"
                },
              mail: {
                    required: "email is required",   
                    minlength: " minimum of 1 characters",
                    maxlength: "maximum 40 characters"
                },
              sector: {
                    required: "choose business type"  
                    
                },
	         website: {
                    minlength: " minimum of 1 characters",
                    maxlength: "maximum 20 characters"
                },
	         phone: {
                    minlength: " minimum of 1 characters",
                    maxlength: "maximum 20 characters"
                },
            username: {
                    required: "username is required",   
                    minlength: " minimum of 1 characters",
                    maxlength: "maximum 20 characters"
                },
             password: {
                    required: "password is requred",
                    minlength: "please, type a minimam of 6 characters"
               },
             rpassword: {
                    minlength: "please, type a minimam of 6 characters"
                    
                    
              },

                
                country: {
                    required: "country is required",
                    minlength: " minimum of 1 characters",
                    maxlength: "maximum 20 characters"
                },
                
               city : {
                    required: "city is required",
                    minlength: "minimum of 1 characters",
                    maxlength: "maximum 20 characters"
                },
               
               shop_mall: {
                    minlength: " minimum of 1 characters",
                    maxlength: "maximim 20 characters"
                },
       	
                
               profile: {
                    required: "about the company with 200 words",
                    minlength: "minimum of 1 characters",
                    maxlength: "Not more than  260 characters"
                },
               

              
          }
         
  });
      
	var elem = $("#chars");
	$("#area1").limiter(100, elem);

    	

    
   $.validator.addMethod(
        "regex",
        function (value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "min length 6 max 20 charters"
);
});



if(!Modernizr.input.placeholder){
    
  $(document).ready(function(){
      
    $('input[placeholder]').each(function() {
        
      var ph = $(this).attr('placeholder')
      $(this).val(ph)
      
      $(this).val(ph).focus(function() {
        if ($(this).val() == ph) 
        $(this).val("")
      
    }).blur(function() {
       
      if (!$(this).val()) $(this).val(ph) 
    })
     
     })
     });
     
    };