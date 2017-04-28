<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(function(){
    $.ajax({
      url: 'data.php',                  //the script to call to get data
      data: "", //5778 is a sample data to pass to list.php
      dataType: 'json',                //data format
      success: function(data)          //on recieve of reply
      {
      alert(JSON.stringify(data));
 }
});
});

</script>
