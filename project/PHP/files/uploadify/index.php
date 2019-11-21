<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="../file/jquery.js" type="text/javascript"></script>
<script src="jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
	<form>
		用户： <input type="text" id="username">
		<input id="file_upload" name="file_upload" type="file" multiple="true">
	</form>
    <div id="content">

    </div>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
                    'userId' : '10001'
				},
                'fileObjName': 'file',
                'buttonText' : '上传文件',
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify.php',
                onUploadSuccess: function (file, data, response) {
                    data = eval("("+data+")");
                    if (data.statusCode == 200) {
                        $("#content").append("<img src='"+data.data+"' class='loadimg'>");
                    }
                }
            });

            $("#content").on('click', 'img.loadimg', function () {

                let src = $(this).attr('src'),
                    $_this = $(this);
                $.get('delete.php?src='+src, function (data) {

                    if (data.statusCode == 200) {
                        $_this.remove();
                    }

                }, 'json');

            })
		});
	</script>
</body>
</html>