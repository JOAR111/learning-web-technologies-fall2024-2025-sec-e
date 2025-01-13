
function check_author_name(){
    let author_name = document.getElementById("new_author_name_id").value;
    if(author_name.trim() == ""){
        document.getElementById("author_name_val").style="display:block; color:red"
    }
    else{
        document.getElementById("author_name_val").style="display:none"
    }
}
function check_contact_no(){
    let contact_no = document.getElementById("new_contact_no_id").value;
    if(contact_no.trim() == ""){
        document.getElementById("contact_no_val").style="display:block; color:red"
    }
    else{
        document.getElementById("contact_no_val").style="display:none"

    }
}
function check_password(){
    let password = document.getElementById("new_password_id").value;
    if(password.trim() == ""){
        document.getElementById("password_val").style="display:block; color:red"
    }
    else{
        document.getElementById("password_val").style="display:none"

    }
}
