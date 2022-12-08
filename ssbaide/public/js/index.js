//SignUp Validation

var signup = {
    user_name:'',
    user_email:'',
    user_password:'',
}


function SignUpFormValidation (){
    if(signup.user_email.length>0 && signup.user_password.length>0 && signup.user_name.length >0 ){
        $('#signUpSubmission').css("disabled","false")
    }
    else{
        $('#signUpSubmission').prop("disabled","true")
    }
 }

 SignUpFormValidation()


 $('#siuname').focusout(function(){
    let userName = $('#siuname').val()
    let exp = /^[A-Za-z\s]*$/ 
    console.log(userName.match(exp));
    if(userName.match(exp) == null  || userName.length ==0 ){
        signup.user_name = ""
        $('.sinameerr').css("display","flex") 
        SignUpFormValidation()  
    }
    else{
        $('.sinameerr').css("display","none")
        signup.user_name = userName
        SignUpFormValidation()
    }
})


 $('#siuemail').focusout(function(){
    console.log('hello');
    let userEmail = $('#siuemail').val()
    let exp = /\S+@\S+\.\S+/ 
    console.log(userEmail.match(exp));
    if(userEmail.match(exp) == null  || userEmail.length ==0 ){
        signup.user_email = ""
        $('.siemailErr').css("display","flex") 
        SignUpFormValidation()  
    }
    else{
        $('.siemailErr').css("display","none")
        signup.user_email = userEmail
        SignUpFormValidation()
    }
})
$('#siupassword').focusout(function(){
    let userPassword = $('#siupassword').val()

    if(userPassword.length ==0  || userPassword.length <6 || userPassword.indexOf(' ')>=0 ){
        signup.user_password = ""
        $('.sipassErr').css("display","flex") 
        console.log('ig');
        SignUpFormValidation()  
    }
    else{
        $('.sipassErr').css("display","none")
        console.log('h');
        SignUpFormValidation()
    }
})

$('#scpassword').focusout(function(){
    let usercPassword = $('#scpassword').val()
    console.log(usercPassword);
    if(usercPassword.length ==0  || $('#siupassword').val() != usercPassword ){
        signup.user_password = ""
        $('.cpassErr').css("display","flex") 
        SignUpFormValidation()  
    }
    else{
        $('.cpassErr').css("display","none")
        signup.user_password = usercPassword
        SignUpFormValidation()
    }
})





//Signin Validation
var signIn = {
    user_email:'',
    user_password:''
}

function SignInFormValidation (){
    if(signIn.user_email.length>0 && signIn.user_password.length>0 ){
        $('#signinSubmission').css("disabled","false")
    }
    else{
        $('#signinSubmission').prop("disabled","true")
    }
 }

 SignInFormValidation()


 $('#email').focusout(function(){
    console.log('hello');
    let userEmail = $('#email').val()
    let exp = /\S+@\S+\.\S+/ 
    console.log(userEmail.match(exp));
    if(userEmail.match(exp) == null  || userEmail.length ==0 ){
        signIn.user_email = ""
        $('.emailErr').css("display","flex") 
        SignInFormValidation()  
    }
    else{
        $('.emailErr').css("display","none")
        signIn.user_email = userEmail
        SignInFormValidation()
    }
})
$('#password').focusout(function(){
    let userPassword = $('#password').val()
    if(userPassword.length ==0  || userPassword.length <6 || userPassword.indexOf(' ')>=0 ){
        signIn.user_password = ""
        $('.passerr').css("display","flex") 
        SignInFormValidation()  
    }
    else{
        $('.passerr').css("display","none")
        console.log('h');
        signIn.user_password = userPassword
        SignInFormValidation()
    }
})



//Admin SignIn Validation
var adminSignIn = { 
    user_email:'',
    user_password:'',
 }

 function adminSignInFormValidation (){
    if(adminSignIn.user_email.length>0 && adminSignUp.user_password.length>0 ){
        $('#AsigninSubmission').css("disabled","false")
    }
    else{
        $('#AsigninSubmission').prop("disabled","true")
    }
 }
 adminSignInFormValidation()


 $('#aemail').focusout(function(){
    console.log('hello');
    let userEmail = $('#aemail').val()
    let exp = /\S+@\S+\.\S+/ 
    console.log(userEmail.match(exp));
    if(userEmail.match(exp) == null  || userEmail.length ==0 ){
        adminSignIn.user_email = ""
        $('.asiemailerr').css("display","flex") 
        adminSignUpFormValidation()  
    }
    else{
        $('.asiemailerr').css("display","none")
        adminSignIn.user_email = userEmail
        adminSignUpFormValidation()
    }
})
$('#apassword').focusout(function(){
    let userPassword = $('#apassword').val()
    if(userPassword.length ==0  || userPassword.length <6 || userPassword.indexOf(' ')>=0 ){
        adminSignIn.user_password = ""
        $('.asipasserr').css("display","flex") 
        adminSignInFormValidation()  
    }
    else{
        $('.asipasserr').css("display","none")
        console.log('h');
        adminSignIn.user_password = userPassword
        adminSignInFormValidation()
    }
})

// Admin SignUp Validation

var adminSignUp = { 
    user_name:'',
    user_email:'',
    user_password:'',
    secret_key:''
 }


 

 function adminSignUpFormValidation (){
    if(adminSignUp.user_name.length>0 && adminSignUp.user_email.length>0 && adminSignUp.user_password.length>0 && adminSignUp.secret_key >0  ){
        $('#superAdminAuth').css("disabled","false")
    }
    else{
        $('#superAdminAuth').prop("disabled","true")
    }
 }
 adminSignUpFormValidation()


$('#asname').focusout(function(){
    let userName = $('#asname').val()
    let exp = /^[A-Za-z\s]*$/ 
    console.log(userName.match(exp));
    if(userName.match(exp) == null  || userName.length ==0 ){
        adminSignUp.user_name = ""
        $('.asnameerr').css("display","flex") 
        adminSignUpFormValidation()  
    }
    else{
        $('.asnameerr').css("display","none")
        adminSignUp.user_name = userName
        adminSignUpFormValidation()
    }
})

$('#asemail').focusout(function(){
    let userEmail = $('#asemail').val()
    let exp = /\S+@\S+\.\S+/ 
    console.log(userEmail.match(exp));
    if(userEmail.match(exp) == null  || userEmail.length ==0 ){
        adminSignUp.user_email = ""
        $('.asemailerr').css("display","flex") 
        adminSignUpFormValidation()  
    }
    else{
        $('.asemailerr').css("display","none")
        adminSignUp.user_email = userEmail
        adminSignUpFormValidation()
    }
})



$('#aspassword').focusout(function(){
    let userPassword = $('#aspassword').val()
    if(userPassword.length ==0  || userPassword.length <6 || userPassword.indexOf(' ')>=0 ){
        adminSignUp.user_password = ""
        $('.aspassworderr').css("display","flex") 
        adminSignUpFormValidation()  
    }
    else{
        $('.aspassworderr').css("display","none")
        adminSignUpFormValidation()
    }
})
$('#ascpassword').focusout(function(){
    let usercPassword = $('#ascpassword').val()
    if(usercPassword.length ==0  || $('#aspassword').val() != usercPassword ){
        adminSignUp.user_password = ""
        $('.ascpassworderr').css("display","flex") 
        adminSignUpFormValidation()  
    }
    else{
        $('.ascpassworderr').css("display","none")
        adminSignUp.user_password = usercPassword
        adminSignUpFormValidation()
    }
})

$('#assecret').focusout(function(){
    let secretKey = $('#assecret').val()
    if(secretKey.length ==0 ){
        adminSignUp.secret_key = ""
        $('.assecreterr').css("display","flex") 
        adminSignUpFormValidation()  
    }
    else{
        $('.assecreterr').css("display","none")
        adminSignUp.secret_key = secretKey
        adminSignUpFormValidation()
    }
})

//landing page design works
if( $(window).innerWidth() < 756 ){
    $('.icons').remove().insertAfter('.logo')
}
$('.close').click(function(){
    $('.signin').css({
        "left":"200%",
    })
    $('.signup').css({
        "left":"200%",
    })
    $('.overlay').css({
        "display":"none",
    })
    $('.superAdmin').css({
        "left":"200%",
    })
    $('.asignin').css({
        "left":"200%",
        "top":"-150%",
    })
});
                
$('.signIn').click(function(){
    $('.signin').css({
        "left":"50%",
    })
    $('.overlay').css({
        "display":"block",
    })
})

$('.signUp').click(function(){
    $('.signup').css({
        "left":"50%",
    })
    $('.overlay').css({
        "display":"block",
    })
})
$('.img').dblclick(function(){
    console.log($('.superAdmin'));
    $('.superAdmin').css({
        "left":"50%",
    })
    $('.overlay').css("display","block")
})
$('#asign').click(function(){
    $('.overlay').css("display","block")
    $('.superAdmin').css({
        "left":"200%",
    })
    $('.asignin').css({
        "left":"50%",
        "top":"50%",
    })
})