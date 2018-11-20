
/*
	       $.ajax({
            type: 'GET',
            url : 'export',
            processData: false,  // indique à jQuery de ne pas traiter les données
            contentType: false,
            success: function (data) {
                              
               var imageNumber = data.length;
               while(imageNumber -1 >= 0){
                putImage(data[imageNumber-1]);
                imageNumber--;
               }
            },
            error: function (data) {
                console.log('An error occurred. 1');
                console.log(data);
            },
        });	 
	 

function putImage(data){
    
       $.ajax({
            type : 'GET',
            url  : 'showImage',
            data :  data,
           // processData: false,  // indique à jQuery de ne pas traiter les données
            contentType: false,
            success: function (data) {
            
           // $('#ImageUser').append('<img src='+data+' width=200 />'); 
               
            },
            error: function (data) {
                console.log('An error occurred. 3');
                console.log(data);
            },
        });
}
*/