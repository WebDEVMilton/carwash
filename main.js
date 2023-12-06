

        
 var today = new Date().toISOString().slice(0, 16);

 //document.getElementsByName("book")[0].min = today;
 
 document.querySelector('#from').min = today;
 
 
 $(function() {
 $('input[name="datetimes"]').daterangepicker({
 timePicker: true,
 startDate: moment().startOf('hour'),
 endDate: moment().startOf('hour').add(32, 'hour'),
 locale: {
 format: 'DD/M hh:mm A'
 }
 });
 });