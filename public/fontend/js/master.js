// Menu Section

function tabbtn(evt, btnName,btn) {
	var i, tabcontent, tabbtn, mbl_btn;
	tabcontent = document.getElementsByClassName("tabcontent");
	tabbtn = document.getElementsByClassName("tabbtn");
	mbl_btn = document.getElementsByClassName("mbl_btn");

	
	if(btnName!=home && window.innerWidth<=700){
		document.querySelector(".left_site").style.display="none";
	}

	  for (i = 0; i < tabcontent.length; i++) {
		  tabcontent[i].style.display = "none";
	  }
	  for (i = 0; i < tabbtn.length; i++) {
		tabbtn[i].style.background = "none";
	  }

	  for (i = 0; i < mbl_btn.length; i++) {
		mbl_btn[i].classList.remove("mbl_btn_active");
	  }
	  document.getElementById(btnName).style.display = "block";
	  
	  tabbtn[btn].style.background = "#defaff";
	  mbl_btn[btn].classList.add("mbl_btn_active");
	
  
	  localStorage.setItem("page",btnName);
	  localStorage.setItem("btn",btn);
  }


// Local Stroage Data Set

  if(localStorage.length>0){
	if(window.innerWidth<=700){
		document.querySelector(".left_site").style.display="none";
		tabbtn(event, localStorage.getItem("page"),localStorage.getItem("btn"));
	}else{

		tabbtn(event, localStorage.getItem("page"),localStorage.getItem("btn"));;
	}
	
  }else{
	if(window.innerWidth<=700){
		document.querySelector(".right_site").style.display="none";
		tabbtn(event,'home',0);
	}else{
		
		tabbtn(event,'about',0);
	}
  }


//   work Page Menu
 
 function work_menu(work_btn){
	var work_menu = document.getElementsByClassName("work_menu");
	for(i=0;i<work_menu.length;i++){
		work_menu[i].classList.remove("work_menu_active");
	 }

	 work_menu[work_btn].classList.add("work_menu_active");
 }
 work_menu(0);



 