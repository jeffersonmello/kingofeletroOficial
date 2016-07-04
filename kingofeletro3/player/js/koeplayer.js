$(document).ready(function(){
	  $('#formNewPlaylist').submit(function(){
		var playlist = document.getElementById('namePlaylist').value;

    if (palylist.length == 0){
      $("#namePlaylist").addClass("form-control-danger");
    } else {

      $.ajax({
  			url:"ajax/sistem_addplaylist.php",
  			type:"POST",
  			data: "nome="+playlist,
     			success: function (result){
                  	
              		}
  		})
  		return false;
  	})
    }

})
