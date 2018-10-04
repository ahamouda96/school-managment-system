$(document).ready(function () {
    
    // to make the page tr1.html 
    /*
    ** when hover on the right side category show the image which equal to the opposite staduim  
    */
    $("#bestavailable,#category3").on('mouseover',function (event) {
        $("#playground").attr('src','images/best_available.PNG');
    });
    
    $("#category3, #bestavailable,#category2,#away,#category1,#premiumgold").on('mouseleave',function (event) {
            $("#playground").attr('src','images/empty.png');
    });
    
    $("#category2").on('mouseover',function (event) {
        $("#playground").attr('src','images/category2.png');
    });
    
    $("#away").on('mouseover',function (event) {
        $("#playground").attr('src','images/away.png');
    });
    
    $("#category1").on('mouseover',function (event) {
        $("#playground").attr('src','images/category1.png');
    });
    
    $("#premiumgold").on('mouseover',function (event) {
        $("#playground").attr('src', 'images/premium_gold.png');
    });
});
