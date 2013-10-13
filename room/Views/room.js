function insertMessage(){
    //var message = document.message.value;
    
    var display_element = document.getElementById("display");
    var message_element = document.getElementById("message");
    var message = message_element.value;

    if(display_element){
	display_element.innerHTML="<b>"+message+"</b>";
    }
    
}