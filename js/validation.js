function user_validate()
{
	var fname=document.getElementById("first_name");
	var lname=document.getElementById("last_name");
	var mob_num=document.getElementById("mobile_number");
	var mail=document.getElementById("email");
	var c_date=document.getElementById("cdate");
	var date=document.getElementById("date");
	var pass=document.getElementById("password");
	var addr=document.getElementById("address");
	var gen_male=document.getElementById("male");
	var gen_female=document.getElementById("female");

	if(fname.value=="")
	{
		document.getElementById("req_fname").style.display='';
		document.getElementById("valid_fname").style.display='none';
		fname.focus();
		return false;
	}
	else if(fname.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById("req_fname").style.display='none';
		document.getElementById("valid_fname").style.display='';
		fname.focus();
		return false;
		
	}
	else
	{
		document.getElementById("req_fname").style.display='none';
		document.getElementById("valid_fname").style.display='none';
		
	}
	if(lname.value=="")
	{
		document.getElementById("req_lname").style.display='';
		document.getElementById("valid_lname").style.display='none';
		lname.focus();
		return false;

	}
	else if(lname.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById("req_lname").style.display='none';
		document.getElementById("valid_lname").style.display='';
		lname.focus();
		return false;
		
	}
	else
	{
		document.getElementById("req_lname").style.display='none';
		document.getElementById("valid_lname").style.display='none';
		
	}
	if(mob_num.value=='')
	{
		document.getElementById("req_num").style.display='';
		document.getElementById("valid_num").style.display='none';
		mob_num.focus();
		return false;
	}
	else if(mob_num.value.search(/^\d{10}$/))
	{
		document.getElementById("req_num").style.display='none';
		document.getElementById("valid_num").style.display='';
		mob_num.focus();
		return false;
	}
	else
	{
		document.getElementById("req_num").style.display='none';
		document.getElementById("valid_num").style.display='none';
		
	}
	if(mail.value=='')
	{
		document.getElementById("req_mail").style.display='';
		document.getElementById("valid_mail").style.display='none';
		mail.focus();	
		return false;
	}
	else if(mail.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
	{
		document.getElementById("valid_mail").style.display='';
		document.getElementById("req_mail").style.display='none';
		mail.focus();
		return false;

	}
	else
	{
		document.getElementById("req_mail").style.display='none';
		document.getElementById("valid_mail").style.display='none';
	}
	if(c_date.value=='')
	{
		document.getElementById("req_cdate").style.display='';
		c_date.focus();
		return false;
	}
	else
	{
		document.getElementById("req_cdate").style.display='none';
	
	}
	if(date.value=='')
	{
		document.getElementById("req_date").style.display='';
		date.focus();
		return false;
	}
	else
	{
		document.getElementById("req_date").style.display='none';
	
	}
	if(pass.value=='')
	{
		document.getElementById("req_pass").style.display='';
		document.getElementById("valid_pass").style.display='none';
		pass.focus();
		return false;
	}
	else if(pass.value.length<6)
	{
		document.getElementById("req_pass").style.display='none';
		document.getElementById("valid_pass").style.display='';
		pass.focus();
		return false;
	
	}
	else
	{
		document.getElementById("req_pass").style.display='none';
		document.getElementById("valid_pass").style.display='none';
		
	}
	if(addr.value=='')
	{
		document.getElementById("req_add").style.display='';
		addr.focus();
		return false;

	}
	else
	{
		document.getElementById("req_add").style.display='none';

	}
	if(gen_male.checked==false && gen_female.checked==false)
	{
		document.getElementById("req_gender").style.display='';
		gen_male.focus();
		return false;
	}
	else
	{
		document.getElementById("req_gender").style.display='none';
	}
	
	return true;
}
function feedback_validate()
{
	var mail=document.getElementById("email_id");	
	var mob_num=document.getElementById("c_number");
	var msg=document.getElementById("message");
	if(mail.value=='')
	{
		document.getElementById("req_mail").style.display='';
		document.getElementById("valid_mail").style.display='none';
		mail.focus();	
		return false;
	}
	else if(mail.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
	{
		document.getElementById("valid_mail").style.display='';
		document.getElementById("req_mail").style.display='none';
		mail.focus();
		return false;

	}
	else
	{
		document.getElementById("req_mail").style.display='none';
		document.getElementById("valid_mail").style.display='none';
	}
	if(mob_num.value=='')
	{
		document.getElementById("req_num").style.display='';
		document.getElementById("valid_num").style.display='none';
		mob_num.focus();
		return false;
	}
	else if(mob_num.value.search(/^\d{10}$/))
	{
		document.getElementById("req_num").style.display='none';
		document.getElementById("valid_num").style.display='';
		mob_num.focus();
		return false;
	}
	else
	{
		document.getElementById("req_num").style.display='none';
		document.getElementById("valid_num").style.display='none';
		
	}
	if(msg.value=="")
	{
		document.getElementById("req_msg").style.display='';
		msg.focus();
		return false;
	}
	else
	{

		document.getElementById("req_msg").style.display='none';
	}
	return true;

}
function contact_validate()
{
	var name1=document.getElementById("name");
	var mail=document.getElementById("email_id");
	var mob_num=document.getElementById("c_number");
	var msg=document.getElementById("message");
	if(name1.value=="")
	{
		document.getElementById("req_name").style.display='';
		document.getElementById("valid_name").style.display='none';
		name1.focus();
		return false;
	
	}
	else if(name1.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById("req_name").style.display='none';
		document.getElementById("valid_name").style.display='';
		name1.focus();
		return false;
	
	}
	else
	{
		document.getElementById("req_name").style.display='none';
		document.getElementById("valid_name").style.display='none';
	}
	if(mail.value=='')
	{
		document.getElementById("req_mail").style.display='';
		document.getElementById("valid_mail").style.display='none';
		mail.focus();	
		return false;
	}
	else if(mail.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
	{
		document.getElementById("valid_mail").style.display='';
		document.getElementById("req_mail").style.display='none';
		mail.focus();
		return false;

	}
	else
	{
		document.getElementById("req_mail").style.display='none';
		document.getElementById("valid_mail").style.display='none';
	}
	if(mob_num.value=='')
	{
		document.getElementById("req_num").style.display='';
		document.getElementById("valid_num").style.display='none';
		mob_num.focus();
		return false;
	}
	else if(mob_num.value.search(/^\d{10}$/))
	{
		document.getElementById("req_num").style.display='none';
		document.getElementById("valid_num").style.display='';
		mob_num.focus();
		return false;
	}
	else
	{
		document.getElementById("req_num").style.display='none';
		document.getElementById("valid_num").style.display='none';
		
	}
	if(msg.value=="")
	{
		document.getElementById("req_msg").style.display='';
		msg.focus();
		return false;
	}
	else
	{
		document.getElementById("req_msg").style.display='none';
	}
		
	return true;
}