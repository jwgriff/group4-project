/**
 * Created by weford on 11/30/2015.
 */

function init(){
    $(document).ready( function () {
       //alert("Hello from Main");
        carousel();

    } );
}
var campaigns = null;

carousel = function(){

    $.ajax({
        url: 'ajax/carousel',
        success: function(data) {

        }
    }).done(function( data ) {
        campaigns = data;
        console.log(data);
        var i = 0;
        campaignDivs = '';
        data.forEach(function(cmpgn){
            if(i < 6) {
                console.log(cmpgn);
                campaignDivs += campaignDiv(cmpgn, i);
                i++;
            }
        })
        console.log(campaignDivs);
        $('.carousel-inner').empty().append(campaignDivs);

    });

    $('#myCarousel');
}

campaignDiv = function(data, i){
    var slideNum = ['first','second','third','fourth', 'fifth', 'sixth'];
    var photoType = ['technics', '', '','', '', '', ''];
    var randomTime = Math.random();// Date().getTime();
    var divTemp = '';
    if(i == 0){
        divTemp = '<div class="item active">';
    }else{
        divTemp = '<div class="item">';
    }
        divTemp+= '<img class="'+slideNum[i]+'-slide" src="http://lorempixel.com/800/600/technics?rndm='+randomTime+'"'+' alt="'+slideNum[i]+' slide">';
            divTemp+= '<div class="container">';
                divTemp+= '<div class="carousel-caption">';
                    divTemp+= '<h1><b>'+data.campaign_name+'</b></h1>';
                    divTemp+= '<p>'+ data.description +'</p>';
                    divTemp+= '<p><h2 style="color:red">Target: $'+ numberWithCommas(data.target_goal) +'</h2></p>';
                    divTemp+= '<p><h3>Current: $'+ numberWithCommas(data.target_current) +'</h3></p>';
                    divTemp+= '<p><h3>   End Date: '+data.end_date +'</h3></p>';

                divTemp+= '</div>';
            divTemp+= '</div>';
        divTemp+='</div>';
    return divTemp;
};

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}