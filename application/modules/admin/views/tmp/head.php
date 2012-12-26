<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin | Vuhaik3 - Webstars</title>
<meta name="robots" content="nofollow" />
<link rel="stylesheet" href="<?php echo base_url('public/css/reset.css'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('public/css/invalid.css'); ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/facebox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.datePicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.date.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/fck/fckeditor.js'); ?>"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>

<script type="text/javascript">
    window.onload = function()
{
	// Automatically calculates the editor base path based on the _samples directory.
	// This is usefull only for these samples. A real application should use something like this:
	// oFCKeditor.BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
	var oFCKeditor = new FCKeditor( 'MyTextarea' ) ;
	oFCKeditor.BasePath	= 'http://localhost/shopci/public/js/fck/' ;
	oFCKeditor.ReplaceTextarea() ;
}
    function comfirm_delete(){
        var ok=confirm("Bạn chắc chắn muốn xóa?");
        if(ok==true){
            return true;
        }
        else{
            return false;
        }
    }

    function formaddcat(){
        if(document.f_addnew.name.value==''){
            alert("Your name!");
            document.f_addnew.name.focus();
            return false;
        }
        if(document.f_addnew.order.value!=""){
            var check=/[0-9]/;
            if(check.test(document.f_addnew.order.value)==false){
               alert("Order is a number!");
               document.f_addnew.order.focus();
               return false;
            }
            if(document.f_addnew.order.value<0){
               alert("Order is a number >= 0");
               document.f_addnew.order.focus();
               return false;
            }
        }
      
        
        document.f_addnew.submit();
        return true;
    }
    function changepass(){
        if(document.f_addnew.o_pass.value==''){
            alert("your password?");
            document.f_addnew.o_pass.focus();
            return false;
        }
        if(document.f_addnew.n_pass.value==''){
            alert("your new password?");
            document.f_addnew.n_pass.focus();
            return false;
        }
        if(document.f_addnew.r_pass.value==''){
            alert("Confirm password?");
            document.f_addnew.r_pass.focus();
            return false;
        }
        if(document.f_addnew.n_pass.value!=document.f_addnew.r_pass.value)
        {
            alert("Confirm password wrong!");
            document.f_addnew.n_pass.focus();
            return false;
        }
        document.f_addnew.submit();
        return true;
    }
    function formaddadmin(){
        if(document.f_addnew.name.value==''){
            alert("Vui lòng nhập tên người dùng!");
            document.f_addnew.name.focus();
            return false;
        }
        if(document.f_addnew.username.value==''){
            alert("Vui lòng nhập tên đăng nhập!");
            document.f_addnew.username.focus();
            return false;
        }
        document.f_addnew.submit();
        return true;
    }
    function adduser(){
        if(document.f_addnew.name.value==''){
            alert("Vui lòng nhập tên người dùng!");
            document.f_addnew.name.focus();
            return false;
        }
        if(document.f_addnew.username.value==''){
            alert("Vui lòng nhập tên đăng nhập!");
            document.f_addnew.username.focus();
            return false;
        }
        if(document.f_addnew.password.value==''){
            alert("Vui lòng nhập mật khẩu!");
            document.f_addnew.password.focus();
            return false;
        }
        document.f_addnew.submit();
        return true;
    }
    function support(){
      if(document.f_addnew.name.value==''){
            alert("Your Name!");
            document.f_addnew.name.focus();
            return false;
        }
        if(document.f_addnew.nickname.value==''){
            alert("Nick name or Phone?");
            document.f_addnew.nickname.focus();
            return false;
        }
        document.f_addnew.submit();
        return true;
    }
</script>
</head>