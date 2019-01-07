
<!DOCTYPE html>
<html class="loading" lang="fr" data-textdirection="ltr">

<!-- pour les notification-->
<?php $toaster= isset($_GET['toast'])? $_GET['toast'] : "" ?>

<!-- fixed-top-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <title>Glazik</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <script>

    $(document).ready(function() {
     var calendar = $('#calendar').fullCalendar({
      lang: 'fr',
      editable:true,
      header:{
       left:'prev,next today',
       center:'title',
       right:'month,agendaWeek,agendaDay'
     },
     events: 'load.php',
     selectable:true,
     selectHelper:true,
     select: function(start, end, allDay)
     {
       var title = prompt("Entrez le titre");
       if(title)
       {

        var start = start/1000; //$.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = end/1000; //$.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

        $.ajax({
         url:"insert.php",
         type:"POST",
         data:{title:title, start:start, end:end},
         success:function()
         {
          calendar.fullCalendar('refetchEvents');
          //alert("Added Successfully");
        }
      })
      }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = event.start/1000;//$.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = event.end/1000;//$.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       //alert('Event Update');
     }
   })
   },

   eventDrop:function(event)
   {
    var start = event.start/1000;//$.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = event.start/1000;//$.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       //alert("Event Updated");
     }
   });
   },

   eventClick:function(event)
   {
    if(confirm("Voulez vous supprimer?"))
    {
      var id = event.id;
      $.ajax({
       url:"delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        //alert("Event Removed");
      }
    })
    }
  },

});
   });

 </script>

 <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="assetsDashboard/assets/toaster/src/jquery.toast.css">
 <link rel="stylesheet" href="assetsDashboard/assets/css/jquery.notify.css"/>
 <link rel="apple-touch-icon" href="assetsDashboard/assets/images/ico/apple-icon-120.png">
 <link rel="shortcut icon" type="image/x-icon" href="assetsDashboard/assets/images/ico/favicon.ico">
 <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

 <!-- BEGIN VENDOR CSS-->
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/vendors.min.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/extensions/unslider.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/weather-icons/climacons.min.css">

 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/fonts/meteocons/style.min.css">

 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/charts/morris.css">


 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/forms/icheck/icheck.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/forms/icheck/custom.css">


 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/pages/email-application.css">

 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/tables/datatable/datatables.min.css">

 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/tables/jsgrid/jsgrid.min.css">

 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/calendars/fullcalendar.min.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/plugins/calendars/fullcalendar.min.css">

 <!-- END VENDOR CSS-->

 <!-- BEGIN STACK CSS-->
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/app.min.css">
 <!-- END STACK CSS-->
 <!-- BEGIN Page Level CSS-->
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/core/menu/menu-types/vertical-menu-modern.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/core/colors/palette-gradient.min.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/fonts/simple-line-icons/style.min.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/core/colors/palette-gradient.min.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/pages/timeline.min.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/plugins/forms/validation/form-validation.css">
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/plugins/forms/switch.min.css">
 <!-- END Page Level CSS-->
 <!-- BEGIN Custom CSS-->
 <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/style.css">
 <!-- END Custom CSS-->


</head>




