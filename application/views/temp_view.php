<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url(); ?>template/user/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>template/user/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>template/user/js/bootstrap.min.js"></script>
	<!-- Include all Editor plugins JS files. -->
<script type="text/javascript" src="<?php echo base_url(); ?>template/user/js/froala_editor.pkgd.min.js"></script>
 
<!-- Include Code Mirror JS. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
 
<!-- Include PDF export JS lib. -->
<script type="text/javascript" src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
	<!-- Include all Editor plugins CSS style. -->
<link rel="stylesheet" href="<?php echo base_url(); ?>template/user/css/froala_editor.pkgd.min.css">
 
<!-- Include Code Mirror CSS. -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

<link href="<?php echo base_url(); ?>template/user/css/font-awesome.css" rel="stylesheet"> 
 
<script>

  $(function() {
    $('div#froala-editor').froalaEditor({
      toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', 'inlineStyle', 'inlineClass', 'clearFormatting', '|', 'emoticons', 'fontAwesome', 'specialCharacters', '-', 'paragraphFormat', 'lineHeight', 'paragraphStyle', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '-', 'insertHR', 'selectAll', 'getPDF', 'print', 'help', 'html', 'fullscreen', '|', 'undo', 'redo']
    })
  });
</script>

</head>
<body>
<div id="froala-editor"></div>	

</body>
</html>