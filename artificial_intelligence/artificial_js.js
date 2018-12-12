// this to open the door by click on it
let door_right = document.getElementById("door_right"),
    door_left = document.getElementById("door_left"),
    open_door = document.getElementById("open_door");



open_door.onclick = function(){
	open_door.classList.add('rotate_class');
	door_right.classList.add('to_open_right_door');
	door_left.classList.add('to_open_left_door');
	
	
}    
// this for appear and hidden placeholder that belong for input 
let input_contain_value = document.getElementById('get_value'),
    value_of_placeholder = document.getElementById('get_value').placeholder;
input_contain_value.onfocus = function (){
	document.getElementById('get_value').placeholder= '';
}
input_contain_value.onblur= function(){
	if(input_contain_value.value ===""){
		document.getElementById('get_value').placeholder= value_of_placeholder;
	}
	
}
// this for send value to php file to check it 
let div_to_stor_result = document.getElementById("result");
let button_send_value = document.getElementById("send_value");
button_send_value.onclick = function(){
  ajax_request = new XMLHttpRequest();
ajax_request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("result").innerHTML =
            this.responseText;
       }
    };
    
  ajax_request.open('POST','/artificial_intelligence/aritifcial_php.php');
  ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax_request.send('equation='+encodeURIComponent(input_contain_value.value));
}
