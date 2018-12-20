$(document).ready(function(){
  $(".headbtn h5").on("click",function(e){
  	$(this).closest("nav").find(".headbtn h5").removeClass("btnred");
  	$(this).addClass("btnred");
  	$("#fieldarea .table").find("tr").addClass("none");
  	var index=$(this).closest(".headbtn").index();
  	$("#fieldarea .table tr:eq("+index+")").removeClass("none");
  });
});
/*function addUser(frm,name,email,address,password,phone,apps){
       $.ajax({
	        type : 'POST',
	        url  : './code/addUser.php',
	        data : {Name:name,Email:email,Address:address,Password:password,Phone:phone,Apps:apps},
	        beforeSend: function()
	        { 
	       
	        },
	        success: function(response) {
	            if(response == "error"){
	               frm.find(".errorMsg").text("Error Occured");
	            }
	            else{
	              resetFrm(frm);
	              frm.find(".cGreen").removeClass(".cGreen");
	              frm.find(".save").addClass("none");
	              frm.find(".errorMsg").text("saved successfully");
	            }
	        }
    });
}*/
