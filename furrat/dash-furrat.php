<?php @ob_start();
@session_start(); @include('header.php'); ?>
<script>
var iu;
iu=1;
function signUp() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Signing Up...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; signUp(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var catH;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i,xcc;
str22=document.getElementById("sun").value;
str23=document.getElementById("spass").value;
str24=document.getElementById("semail").value;
str25=document.getElementById("scell").value;
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("supdate").innerHTML="Something Missing";
		cleardivloadercall('Something Missing');
	}
	else if(xmlhttp.responseText=="exist") {
		document.getElementById("supdate").innerHTML="Username or Email Exist";
		cleardivloadercall('Username or Email Exist');
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("supdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Signup Successfull<br>&nbsp; username: "+str22+"<br>&nbsp; email:"+str24+"</h2>";
		document.getElementById('sun1').style.display = 'none';
		cleardivloadercall('Signup Successfull. Welcome ,'+str22+' to the Furrat.com');
	}
    }
   }
xmlhttp.open("POST","core?action=signup",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("fur-un="+str22+"&fur-pass="+str23+"&fur-email="+str24+"&fur-cell="+str25);
}
}


function logIn() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Logging In...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; logIn(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
str22=document.getElementById("lun").value;
str23=document.getElementById("lpass").value;
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("lupdate").innerHTML="&nbsp; Username or Password Do not match<br>";
		cleardivloadercall('Username or Password Do not match');
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("lupdate").innerHTML="<h2>&nbsp; Login Successfull :)</h2>";
		document.getElementById('sun2').style.display = 'none';
		cleardivloadercall1('Login Successfull.<br>Redirecting...');
	}
    }
   }
xmlhttp.open("POST","core?action=login",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("fur-un="+str22+"&fur-pass="+str23);
}
}



function showCom(cat) {
document.getElementById('com').style.display = 'none';
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i,lan;
<?php
if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'lan="en"; '; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'lan="ar"; '; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'lan="ku"; '; }
else { echo'lan="en"; '; }
?>
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
		if(xmlhttp.responseText=="no") {
			document.getElementById('com').style.display = 'none';
			document.getElementById("showcom1").innerHTML='<option value=""></option>';
		}
		else {
			document.getElementById('com').style.display = 'block';
			document.getElementById("showcom1").innerHTML=xmlhttp.responseText;
		}	
    }
   }
xmlhttp.open("GET","core?action=showcom&com="+cat+"&lan="+lan,true);
xmlhttp.send();
}



function showCat(cat) {
document.getElementById('subcat').style.display = 'none';
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i,lan;
<?php
if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'lan="en"; '; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'lan="ar"; '; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'lan="ku"; '; }
else { echo'lan="en"; '; }
?>
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
		if(xmlhttp.responseText=="no") {
			document.getElementById('subcat').style.display = 'none';
		}
		else {
			document.getElementById('subcat').style.display = 'block';
			document.getElementById("subcat").innerHTML=xmlhttp.responseText;
		}
	showCom(cat);		
    }
   }
xmlhttp.open("GET","core?action=showcat&cat="+cat+"&lan="+lan,true);
xmlhttp.send();
}
function hideshowCat() {
document.getElementById('subcat').style.display = 'none';
}
hideshowCat();




function imageUpload() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Uploading Image';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; imageUpload(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
if(iu<4) {
document.getElementById("istat").innerHTML="&nbsp;&nbsp;&nbsp;Uploading Image Please wait........<br><br><br>";
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
str22=document.getElementById("ione").value;
var formData = new FormData();
formData.append('ione', document.getElementById("ione").files[0])
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("istat").innerHTML="&nbsp;&nbsp;Error occured Uploading Image, try again!!! :(";
		cleardivloadercall('Error occured Uploading Image, try again');
		}
	else {
		document.getElementById("ione"+iu).value=xmlhttp.responseText;
		document.getElementById("ione").value="";
		document.getElementById("istat"+iu).innerHTML='&nbsp;&nbsp; <img src="xenon-upload/'+xmlhttp.responseText+'" height="128px" width="128px"/>';
		document.getElementById("istat").innerHTML="";
		iu++;
		document.getElementById("iu").innerHTML="&nbsp;&nbsp;Image "+iu+":";
		if(iu==4) {
		document.getElementById("iu").style.display = 'none';
		document.getElementById("ione").style.display = 'none';
		document.getElementById("ibut").style.display = 'none';
		}
		cleardivloadercall('Image Uploaded SuccessFully');
		}
    }
   }
xmlhttp.open("POST","core?action=imageupload",true);
xmlhttp.send(formData);
}
}
}


function initeditadd(id) {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Loading Add to Edit';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; initeditadd(id); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,un,msg,str22,str23,str24,str25,x,i;
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("loutupdate").innerHTML="&nbsp; &nbsp;&nbsp;  Something Went Wrong<br>";
		cleardivloadercall('Something Went Wrong');
	}
	else {
	document.getElementById("getadd").className = "add-new-c-hide";
	document.getElementById("editadd").style.display = 'block';
	document.getElementById("editadd").innerHTML=xmlhttp.responseText;
	cleardivloadercall('You Can Edit That Add Now.');
	}
    }
   }
xmlhttp.open("GET","core?action=editinit&id="+id,true);
xmlhttp.send();
}
}



function editAdd(id) {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Updating Addvertise...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; editAdd(id); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,un,msg,en,ar,ku,endes,ardes,kudes,city,cat,com,ione,itwo,ithree,owner,cell,email,price,i;
en=document.getElementById("en2").value;
endes=document.getElementById("endes2").value;
owner=document.getElementById("owner2").value;
cell=document.getElementById("cell2").value;
price=document.getElementById("price2").value;
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("addupdate").innerHTML="&nbsp;&nbsp; Something Missing";
		cleardivloadercall('Something Missing');
		
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Addvertise Updated Successfully</h2>";
		cleardivloadercall('Addvertise Updated Successfully');
	}
    }
   }
xmlhttp.open("POST","core?action=editaddconfirm&id="+id,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("en2="+en+"&endes2="+endes+"&owner2="+owner+"&cell2="+cell+"&price2="+price);
}
}




function editEmail(unit) {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Updating Email...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; editEmail(unit); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,un,msg,en,ar,ku,endes,ardes,kudes,city,cat,com,ione,itwo,ithree,owner,cell,email,price,i;
en=unit;
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("addupdate").innerHTML="&nbsp;&nbsp; Something Missing";
		cleardivloadercall('Something Missing');
		
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Email Updated Successfully</h2>";
		cleardivloadercall('Email Updated Successfully');
	}
	else if(xmlhttp.responseText=="exist") {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Email address exist</h2>";
		cleardivloadercall('Email address exist');
	}
	else    {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Email address cannot be blank</h2>";
		cleardivloadercall('Email address cannot be blank');
	}
    }
   }
xmlhttp.open("POST","core?action=editemail",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("email="+en);
}
}




function editCell(unit) {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Updating Cell number...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; editCell(unit); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,un,msg,en,ar,ku,endes,ardes,kudes,city,cat,com,ione,itwo,ithree,owner,cell,email,price,i;
en=unit;
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("addupdate").innerHTML="&nbsp;&nbsp; Something Missing";
		cleardivloadercall('Something Missing');
		
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Cell number Updated Successfully</h2>";
		cleardivloadercall('Cell number Updated Successfully');
	}
	else    {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Cell number cannot be blank</h2>";
		cleardivloadercall('Cell number address cannot be blank');
	}
    }
   }
xmlhttp.open("POST","core?action=editcell",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cell="+en);
}
}






function editPass(pass1,pass2) {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Updating Password...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; editPass(pass1,pass2); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,un,msg,en,ar,ku,endes,ardes,kudes,city,cat,com,ione,itwo,ithree,owner,cell,email,price,i;
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("addupdate").innerHTML="&nbsp;&nbsp; Something Missing";
		cleardivloadercall('Something Missing');
		
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Password Updated Successfully</h2>";
		cleardivloadercall('Password Updated Successfully');
	}
	else if(xmlhttp.responseText=="mno") {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Current Password do not match</h2>";
		cleardivloadercall('Current Password do not match');
	}
	else    {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Cell number cannot be blank</h2>";
		cleardivloadercall('Password cannot be blank');
	}
    }
   }
xmlhttp.open("POST","core?action=editpass",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("pass1="+pass1+"&pass2="+pass2);
}
}






function addAdd() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Posting Addvertise';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; addAdd(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,en,ar,ku,endes,ardes,kudes,city,cat,com,ione,itwo,ithree,owner,cell,email,price,i=0,j=0;
en=document.getElementById("en").value;
endes=document.getElementById("endes").value;
city=document.getElementById("city").value;
cat=document.getElementById("showcat1").value;
com=document.getElementById("showcom1").value;
ione=document.getElementById("ione1").value;
itwo=document.getElementById("ione2").value;
ithree=document.getElementById("ione3").value;
owner=document.getElementById("owner").value;
cell=document.getElementById("cell").value;
email=document.getElementById("email").value;
price=document.getElementById("price").value;
while (i<price.length) {
if (price[i]==0 || price[i]==1 || price[i]==2 || price[i]==3 || price[i]==4 || price[i]==5 || price[i]==6 || price[i]==7 || price[i]==8 || price[i]==9) { 
j=1;
}
else {
j=0; break;
}
i++;
}
if(j==1) {
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("addupdate").innerHTML="&nbsp;&nbsp; Something Missing";
		cleardivloadercall('Something Missing');
		
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Addvertise Added Successfully</h2>";
		document.getElementById("add-new").style.display = 'none';
		cleardivloadercall('Addvertise Added Successfully');
	}
    }
   }
xmlhttp.open("POST","core?action=addAdd",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("en="+en+"&ar="+ar+"&ku="+ku+"&endes="+endes+"&ardes="+ardes+"&kudes="+kudes+"&city="+city+"&cat="+cat+"&com="+com+"&ione="+ione+"&itwo="+itwo+"&ithree="+ithree+"&owner="+owner+"&cell="+cell+"&email="+email+"&price="+price);
}
else {
document.getElementById("addupdate").innerHTML="&nbsp;&nbsp; Give Price in numbers only.";
cleardivloadercall('Give Price in numbers only.');
}
}
}



function logOut() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Logging Out...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; logOut(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("loutupdate").innerHTML="&nbsp; &nbsp;&nbsp;  Something Went Wrong<br>";
		cleardivloadercall1('Something Went Wrong');
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("loutupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp; Logout Successfull...</h2>";
		cleardivloadercall1('LogOut Successfull.<br>Redirecting...');
	}
    }
   }
xmlhttp.open("GET","core?action=logout",true);
xmlhttp.send();
}
}


function getAdd() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Loading Add List';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; getAdd(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
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
	if(xmlhttp.responseText=="no") {
	document.getElementById("getadd").className = "add-new-c";
	document.getElementById('add-new').className = "add-new-c-hide";
	document.getElementById("getaccount").className = "add-new-c-hide";
		document.getElementById("getadd").innerHTML="&nbsp;&nbsp;&nbsp;&nbsp; Nothing found<br>";
		cleardivloadercall('Nothing Found');
	}
	else {
	document.getElementById("editadd").style.display = 'none';
	document.getElementById("getadd").className = "add-new-c";
	document.getElementById('add-new').className = "add-new-c-hide";
	document.getElementById("getaccount").className = "add-new-c-hide";
		document.getElementById("getadd").innerHTML=xmlhttp.responseText;
		cleardivloadercall('Successfully Loaded');
	}
    }
   }
xmlhttp.open("GET","core?action=getadd",true);
xmlhttp.send();
}
}




function getAccount() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Loading Account Settings...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; getAccount(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
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
	if(xmlhttp.responseText=="no") {
	document.getElementById("getadd").className = "add-new-c-hide";
	document.getElementById('add-new').className = "add-new-c-hide";
	document.getElementById("getaccount").className = "add-new-c";
		document.getElementById("getaccount").innerHTML="&nbsp;&nbsp;&nbsp;&nbsp; Nothing found<br>";
		cleardivloadercall('Nothing Found');
	}
	else {
	document.getElementById("editadd").style.display = 'none';
	document.getElementById("getadd").className = "add-new-c-hide";
	document.getElementById('add-new').className = "add-new-c-hide";
	document.getElementById("getaccount").className = "add-new-c";
		document.getElementById("getaccount").innerHTML=xmlhttp.responseText;
		cleardivloadercall('Successfully Loaded');
	}
    }
   }
xmlhttp.open("GET","core?action=getaccount",true);
xmlhttp.send();
}
}









function deleteAdd(del) {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Deleteting Addvertise...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; deleteAdd(del); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
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
	if(xmlhttp.responseText=="no") {
		document.getElementById("deleteadd").innerHTML="&nbsp;&nbsp;&nbsp;Nothing found<br>";
		cleardivloadercall('Nothing found');
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("deleteadd").innerHTML="&nbsp;&nbsp;&nbsp;Deleted Suscessfully<br><br>";
		getAdd();
		cleardivloadercall('Deleted Suscessfully');
	}
    }
   }
xmlhttp.open("GET","core?action=deleteadd&id="+del,true);
xmlhttp.send();
}
}

var myVar = null;
var myVar1 = null;
var adddet,xcc1;
function openDivcat() {
var NAME;
if(xcc<=catH) {
document.getElementById('catchange').style.height=(catH-xcc)+"px";
xcc++;
}
else {
xcc--;
clearInterval(myVar);
}
}
function closeDivcat() {
if(xcc>=0) {
document.getElementById('catchange').style.height=(catH-xcc)+"px";
xcc--;
}
else {
document.getElementById('catchange').style.height="auto";
xcc++;
clearInterval(myVar);
}
}

function catchange() {
if(document.getElementById('catchange').clientHeight>0) {
catH = document.getElementById('catchange').clientHeight;
xcc=0;
myVar = setInterval(function(){openDivcat()},1);
}
else if(document.getElementById('catchange').clientHeight==0) {
xcc=catH;
myVar = setInterval(function(){closeDivcat()},1);
}
}

function catselect(cat,catid) {
showCom(catid);
document.getElementById("showcat1").value=catid;
document.getElementById("catTxt").innerHTML=cat;
document.getElementById("add-cont").className = "add-cont-css";
catH = document.getElementById('catchange').clientHeight;
xcc=0;
myVar = setInterval(function(){openDivcat()},1);
}


function openAdddet() {
if(xcc1>=0) {
document.getElementById('add-cont').style.height=(adddet-xcc)+"px";
xcc1--;
}
else {
xcc1++;
clearInterval(myVar1);
}
}

function showAddnew() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Please Wait...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; showAddnew(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
document.getElementById("editadd").style.display = 'none';
document.getElementById("add-new").className = "add-new-c";
document.getElementById("getadd").className = "add-new-c-hide";
document.getElementById("getaccount").className = "add-new-c-hide";
cleardivloadercall('Now You Can Post New Addvertise');
}
}
</script>

<?php
ob_start();
session_start();
if(isset($_SESSION['furrat-dash'])) {


if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { @include('inc/user-panel.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { @include('inc/user-panel-ar.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { @include('inc/user-panel-ku.php'); }
	else { $_SESSION['furrat-lan']="en"; @include('inc/user-panel.php'); }



}
else {
if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { @include('inc/login.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { @include('inc/login-ar.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { @include('inc/login-ku.php'); }
	else { $_SESSION['furrat-lan']="en"; @include('inc/login.php'); }
}
ob_flush();
?>




















</div>

	 
	 
	 
	 
	 
	 
	 
	 
	 
<?php @include('footer.php'); @ob_flush(); ?>