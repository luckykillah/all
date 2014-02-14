<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="" />
</head>

<body>
<script type="text/javascript">
    /* Inject any Pre-defined values in here */
    var structo_predefined_fields = {sample_field:'sample_value'};
    structo_engage('blog',{
    'record_id':false,
    'values':structo_predefined_fields,
'autoResize':true,
'height':'345'});
  function structo_engage(model_name,options)
  {
      var url_params = "";
      if(options.values)
          url_params = encodeURIComponent(JSON.stringify(options.values));
      document.write(unescape("%3Ciframe style=\"border:none;\" height=\""+options.height+"\" width=\"500\" src='http://christina.structoapp.com/form/"+model_name+"/"+(options.record_id ? options.record_id+"/edit":"new")+"?vals="+url_params+"' type='text/javascript'%3E%3C/iframe%3E"));
  }
  </script>
</body>

</html>