
//Whatsapp Function
function whatsapp(elementId, noteContent, noteDateId){
    var mobile = prompt("Enter Whatsapp Contact:");
    var noteDate = document.getElementById(noteDateId).innerText;
    var text = document.getElementById(noteContent).innerText;
    var msg = "https://wa.me/" + mobile + "?text=Note Date: " + noteDate + "%0D%0A" + text;       //%0D%0A is for line break
    if(mobile !== ""){
      document.getElementById(elementId).setAttribute('target', '_blank');
      document.getElementById(elementId).href = msg;
    }
}

//Mail Function
function mail(elementId, noteContent, noteDateId){
    var emailId = prompt("Enter Email ID:");
    var noteDate = document.getElementById(noteDateId).innerText;
    var text = document.getElementById(noteContent).innerText;
    var msg = "https://mail.google.com/mail/u/0/?view=cm&fs=1&to=" + emailId + "&tf=1&su=Note Date : " + noteDate +"&body=" + text;
    if(emailId != ""){
      document.getElementById(elementId).setAttribute('target', '_blank');
      document.getElementById(elementId).href = msg;
    }
}

//Print PDF Function
function printPDF(noteDate, printContentID) {
    var printContents = document.getElementById(printContentID).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = "Note Date : " + noteDate + "\n" + printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
