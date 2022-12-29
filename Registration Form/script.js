
function validate() {
    form = document.getElementById('form')
    errorContainer = document.getElementById('error-container')
    
    let messages = []

    var username = form.username.value;
    var password1 = form.password1.value;
    var password2 = form.password2.value;
    var fname = form.fname.value;
    var lname = form.lname.value;
    var email = form.email.value;
    var course = form.course.value;
    var phone = form.phone.value;

    const emailRe = /^([a-zA-Z0-9\_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    const phoneRe = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/
    
    // Validating email
    if(!emailRe.test(email)){
        messages.push("Email is not valid!!!");
    }

    // Validating mobile number
    if(!phoneRe.test(phone)){
        messages.push("Mobile Number is not valid!!!");
    }

    // Password confirmation
    if (password1.length <= 6) {
        messages.push('Password must be longer than 6 characters')
    }
    else {
        if(password1 != password2) {
            messages.push("Password does not Match!!!")
        }
    }

    if(messages.length > 0) {
        e.preventDefault();

        errors = ""
        messages.forEach(msg => {
            errors += `<p class="bar error">${msg}</p>`
        })

        errorContainer.innerHTML = errors
        return false
    } 
    return true
}