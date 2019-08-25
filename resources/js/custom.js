/**
 * Created by rashu on 06-08-19.
 */

$(function () {
    var userType = $('.user-type');
    var userArea = $('.user-area');
    var moderatorArea = $('.moderator-area');
    if(userType.length>0){
        userType.change(function () {
            // console.log('changed');
            if(userType.val()=='user'){
                moderatorArea.hide('slow');
                userArea.show('slow');
            }else if(userType.val()=='selection'){
                moderatorArea.hide('slow');
                userArea.hide('slow');
            }else{
                userArea.hide('slow');
                moderatorArea.show('slow');
            }
        })
    }
});
