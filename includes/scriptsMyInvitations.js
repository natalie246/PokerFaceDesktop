 $('#timepicker').timepicker().on('show.timepicker', function(e) {
    console.log('The time is ' + e.time.value);
    console.log('The hour is ' + e.time.hour);
    console.log('The minute is ' + e.time.minute);
    console.log('The meridian is ' + e.time.meridian);
  });
  $this->widget(
    'booster.widgets.TbTimePicker',
    array(
        'name' => 'some_time',
    	'wrapperHtmlOptions' => array('class' => 'col-md-3'),
    )
);