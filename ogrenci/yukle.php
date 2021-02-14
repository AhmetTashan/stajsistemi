<script src="msj/jquery.msgBox.js" type="text/javascript"></script>
<link href="msj/msgBoxLight.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />


<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
  <script type="text/javascript">
	


		function ses()
	{
	var ses=$("input[name=tc_no]" ).val();
	if(!ses=="")
	{
	alert(ses);
	}
	}
	 
	 function listela()
	 {
		var bolum=$("Select[name=ogr_bolum]" ).val();
		var degerler="bolum="+bolum;
           
		$.ajax({	
		   type:"post",
	       url:"listele.php",
	       data:degerler,
	      success: function(sonuc)
	      {
		     $("#ogr_danisman").html(sonuc);
				
	      }
		
	 })
		
	 }
	
	</script>
    
     <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>