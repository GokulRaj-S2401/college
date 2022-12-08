
var adminSignUp = { 
    user_name:'',
    user_email:'',
    user_password:'',
    secret_key:''
 }

 function adminSignUpFormValidation (){
    if(adminSignUp.user_name.length>0 && adminSignUp.user_email.length>0 && adminSignUp.user_password.length>0 && adminSignUp.secret_key >0  ){
        $('#superAdminAuth').css("display","flex")
    }
    else{
        $('#superAdminAuth').css("display","none")
    }
 }
 adminSignUpFormValidation()
$('#asname').focusout(function(){
    let userName = $('#asname').val()
    let exp = /^[A-Za-z\s]*$/ 
    console.log(userName.match(exp));
    if(userName.match(exp) == null){
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