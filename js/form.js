var email = document.querySelector("#inputEmail4");
var id = document.querySelector("#inputPID");

var firstname = document.querySelector("#fistName");
var lastname = document.querySelector("#lastName");

var inputAddress = document.querySelector("#inputAddress");
var inputAddress2 = document.querySelector("#inputAddress2");

var inputCity = document.querySelector("#inputCity");
var inputState = document.querySelector("#inputState");


var inputZip = document.querySelector("#inputZip");
var shipping = document.querySelector("#shipping");
var form = document.querySelector("#form");


var phoneNumber = document.querySelector("#phoneNumber");


console.log(`${email.value},${id.value}`)
// <a href="mailto:Eryka.Adams@Clickdimensions.com?bcc=julie.patrick@clickdimensions.com&subject=RSVP%20for%20New%20Year's%20Eve%20Party%20&body=Hi%20Bob,%0d%0dI%20would%20like%20to%20RSVP%20to%20your%20party%20invitation.%20Here%20are%20my%20details:%0d%0dName:%20Eryka%20Adams%0dNumber%20of%20Guest:%0d" rel="EMAIL">here</a>
function buildemail(){


    if (!form.checkValidity()){
       return
    }
    
    var head = `mailto:${email.value}?Subject=CONFRIM%20PRUCHASE%20for%20MOTHEREARTH&body=`


    var body = `hello ${firstname.value} ${lastname.value},
        Where are sending you a conformation email for your following purchases of ${id.value}

        Shipping Type:
        ${shipping.value}
        
        Shipping Address:
        ${inputAddress.value}  ${inputAddress2.value}
        ${inputCity.value}  ${inputState.value}
        ${inputCity.inputZip}

        `

        var encodedbody = encodeURI(body)

        window.open(head+encodedbody);

}