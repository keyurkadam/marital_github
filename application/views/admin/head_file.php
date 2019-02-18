<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page_title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>template/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>template/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>template/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    


</head>


<!-- jQuery Version 1.11.0 -->
    <!--<script src="<?php echo base_url(); ?>template/js/jquery-1.11.0.js"></script>-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


    <!-- Date Time Picker -->
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <!-- Date Time Picker Ends -->
    


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>template/js/bootstrap.min.js"></script>


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
    <!-- Morris Charts JavaScript -->
    <!--<script src="<?php echo base_url(); ?>template/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>template/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>template/js/plugins/morris/morris-data.js"></script>-->
<!-- validation css -->

    <script language="JavaScript" src="<?php echo base_url(); ?>template/js/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
    
    <style type="text/css" xml:space="preserve">
      .error_strings{ font-family:Verdana; font-size:14px; /*color:#660000;*/color: red}
    </style>
<!-- validation css ends -->

<!-- date picker -->


<!-- date picker end -->

<style>
/* Tooltip container */
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
 <div class="tooltip">Right
                        <span class="tooltiptext tooltip-right">Tooltip text</span>
                    </div>