window.onload=window.onresize=function(){
	oLayout1 = document.getElementById("layout1")
	oLayout2 = document.getElementById("layout2")
	if (oLayout1.setHeight==1){
		setLayout = 1
	}
	else if (oLayout2.setHeight==1){
		setLayout = 2
	}
	else if (oLayout2.clientHeight<oLayout1.clientHeight){
		setLayout = 2
	}
	else{
		setLayout = 1
	}

    if(setLayout==2){
        oLayout2.style.blockSize=parseInt(getComputedStyle(oLayout1).blockSize) + parseInt(getComputedStyle(oLayout1).padding)*2 - parseInt(getComputedStyle(oLayout2).padding)*2 + "px";
		oLayout2.setHeight = 1
    }
    else{
        oLayout1.style.blockSize=parseInt(getComputedStyle(oLayout2).blockSize) + parseInt(getComputedStyle(oLayout2).padding)*2 - parseInt(getComputedStyle(oLayout1).padding)*2 + "px";
		oLayout1.setHeight = 1
    }
}
