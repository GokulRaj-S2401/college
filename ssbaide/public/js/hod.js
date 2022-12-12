var isShrink = false
$('.isShrink').click(function(){
    $('.sideNav').toggleClass('shrink')
    if(isShrink){
        $('.isShrink').html('<ion-icon name="chevron-back-sharp"></ion-icon>')
        isShrink = false
    }
    else{
        $('.isShrink').html('<ion-icon name="chevron-forward-sharp"></ion-icon>')
        isShrink = true
    }
    setTimeout(()=>{
        $('#brand').toggleClass('shrink')
        $('.head').toggleClass('shrink')
        $('[id="link"]').toggleClass('shrink')
    },50)
})