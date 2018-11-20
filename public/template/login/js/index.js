
 $("#login-button-Facebook").click(function(event){
 	
		 event.preventDefault();
	 
	 // $('form').fadeOut(500);
	 //$('.wrapper').addClass('form-success');
	 document.location.href="redirect";
});


 $('#upload-form').submit(function (e) {
 var formData = new FormData($('#upload-form')[0]);
        e.preventDefault();

        $.ajax({
            type: $('#upload-form').attr('method'),
            url : $('#upload-form').attr('action'),
            data: formData,
            processData: false,  // indique à jQuery de ne pas traiter les données
            contentType: false,
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
                 var $imageupload = $('#espaceUploadImage');
                 var $fileTab = $imageupload.find('.file-tab');
                 $fileTab.find('.alert').remove();
                 $fileTab.find('img').remove();
                 $fileTab.find('.btn span').text('Browse');
                 $fileTab.find('.btn:eq(1)').hide();
                 $fileTab.find('input').val('');
                 $('textarea').val('');
                //resetUrlTab($urlTab);
                //resetFileTab($fileTab);
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
    });


$('.like').click(function(e){
  $.ajax({
            type: 'get',
            url : 'like',
            data: 'user-id='+$(this).attr('data-user-id')+'ph-id='+$(this).attr('data-ph-id')+'&like='+1,
           // processData: false,  // indique à jQuery de ne pas traiter les données
           // contentType: false,
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
                 ;
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
});

$('.unlike').click(function(e){
    
  $.ajax({
            type: 'get',
            url : 'unlike',
            data: 'user_id='+$(this).attr('data-user-id')+'ph_id='+$(this).attr('data-ph-id')+'&unlike='+1,
           // processData: false,  // indique à jQuery de ne pas traiter les données
           // contentType: false,
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
                 ;
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
});
