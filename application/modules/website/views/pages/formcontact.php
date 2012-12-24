<script type="text/javascript">
function kt(){ 
         if(document.contactform.namecontact.value==""){
            document.getElementById("tickfalse1").style.display="block";
            document.getElementById("ticktrue1").style.display="none";
            document.contactform.namecontact.style.border="solid 1px red";
            return false;
         }
         else{
            document.getElementById("ticktrue1").style.display="block";
            document.getElementById("tickfalse1").style.display="none";
            document.contactform.namecontact.style.border="none";
         }
         var checksdt=/^0[0-9]{9,11}$/;
         if(document.contactform.phone.value=="" || checksdt.test(document.contactform.phone.value)==false){
            document.getElementById("tickfalse2").style.display="block";
            document.getElementById("ticktrue2").style.display="none";
            document.contactform.phone.style.border="solid 1px red";
            return false;
         }
         else{
            document.getElementById("tickfalse2").style.display="none";
            document.getElementById("ticktrue2").style.display="block";
            document.contactform.phone.style.border="none";
         }
         if(document.contactform.adress.value==""){
            document.getElementById("tickfalse3").style.display="block";
            document.getElementById("ticktrue3").style.display="none";
            document.contactform.adress.style.border="solid 1px red";
            return false;
         }
         else{
            document.getElementById("ticktrue3").style.display="block";
            document.getElementById("tickfalse3").style.display="none";
            document.contactform.adress.style.border="none";
         }
         var checkmail=/^\w(\.?[\w-])*@\w(\.?[-\w])*\.[a-z]{2,4}$/i;
         if(document.contactform.email.value=="" || checkmail.test(document.contactform.email.value)==false){
            document.getElementById("tickfalse4").style.display="block";
            document.getElementById("ticktrue4").style.display="none";
            document.contactform.email.style.border="solid 1px red";
            return false;
         }
         else{
            document.getElementById("ticktrue4").style.display="block";
            document.getElementById("tickfalse4").style.display="none";
            document.contactform.email.style.border="none";
         }
         if(document.contactform.content.value==""){
            document.getElementById("tickfalse5").style.display="block";
            document.getElementById("ticktrue5").style.display="none";
            document.contactform.content.style.border="solid 1px red";
            return false;
         }
         else{
            document.getElementById("ticktrue5").style.display="block";
            document.getElementById("tickfalse5").style.display="none";
            document.contactform.content.style.border="none";
         }
         
         document.contactform.submit();
         return true;
      }
</script>
<div id="contactform">
	<form action="<?php echo base_url('send_contact'); ?>" method="post" name="contactform">
 	    <table border="0">
         <tr>
            <td style="width: 100px;">Tên</td>
            <td><input type="text" id="name" name="namecontact" class="inp" /><img style="display: none;" id="ticktrue1" src=" <?php echo base_url("public/css/images/icons/tick_circle.png") ?>" /><img style="display: none;" id="tickfalse1" src=" <?php echo base_url("public/css/images/icons/cross_circle.png") ?>" /></td>
            
         </tr>
         <tr>
            <td>Số điện thoại</td>
            <td><input type="text" value="" id="name" name="phone" class="inp" /><img style="display: none;" id="ticktrue2" src=" <?php echo base_url("public/css/images/icons/tick_circle.png") ?>" /><img style="display: none;" id="tickfalse2" src=" <?php echo base_url("public/css/images/icons/cross_circle.png") ?>" /></td>
            
         </tr>
         <tr>
            <td>Địa chỉ</td>
            <td><input type="text" value="" id="name" name="adress" class="inp" /><img style="display: none;" id="ticktrue3" src=" <?php echo base_url("public/css/images/icons/tick_circle.png") ?>" /><img style="display: none;" id="tickfalse3" src=" <?php echo base_url("public/css/images/icons/cross_circle.png") ?>" /></td>
            </tr>
         <tr>
            <td>Email</td>
            <td><input type="text" value="" id="name" name="email" class="inp" /><img style="display: none;" id="ticktrue4" src=" <?php echo base_url("public/css/images/icons/tick_circle.png") ?>" /><img style="display: none;" id="tickfalse4" src=" <?php echo base_url("public/css/images/icons/cross_circle.png") ?>" /></td>
            </tr>
         <tr>
            <td style="vertical-align: top;">Nội dung</td>
            <td><textarea name="content" class="text"></textarea><img style="display: none;" id="ticktrue5" src=" <?php echo base_url("public/css/images/icons/tick_circle.png") ?>" /><img style="display: none;" id="tickfalse5" src=" <?php echo base_url("public/css/images/icons/cross_circle.png") ?>" /></td>
         </tr>
         <tr>
            <td></td>
            <td><input type="button" value="Submit" onclick="kt()" /></td>
            
         </tr>
       </table>
   </form>
</div>