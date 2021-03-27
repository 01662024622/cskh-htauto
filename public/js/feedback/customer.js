function changeLv(type,lv){
    console.log('.emoji-'+type+'-'+lv)
    console.log('.check-emoji-'+type+'-'+lv)
    $('.checked-emoji-'+type).addClass('hidden')
    $('.emoji-'+type).addClass('opacity-7').removeClass('emoji-active')
    $('.emoji-'+type+'-'+lv).removeClass('opacity-7').addClass('emoji-active')
    $('.check-emoji-'+type+'-'+lv).removeClass('hidden')
    $('#submit').addClass('opacity-7')
    // $('input[name="improve[]"]:checked').attr('checked',false)
}
