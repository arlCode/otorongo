var $j = jQuery.noConflict();
var classes = ['bgimg1','bgimg2', 'bgimg3']; //add as many classes as u want
var randomnumber = Math.floor(Math.random()*classes.length);

$j(function(){

   $j('#header-img').addClass(classes[randomnumber]);

});