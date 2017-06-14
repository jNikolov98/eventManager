@extends('template')

        @section('additional-resources')

            <link href='fullcalendar/fullcalendar.min.css' rel='stylesheet' />
            <link href='fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
            <script src='lib/moment.min.js'></script>
            <script src='lib/jquery.min.js'></script>
            <script src='fullcalendar/fullcalendar.min.js'></script>
            <script>

                $(document).ready(function() {
                    $('#calendar').fullCalendar({
                        header: {
                            left: 'prev,next today addEvent',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay,listWeek'
                        },
                        defaultDate: moment().format('YYYY-MM-DD'),
                        navLinks: true, // can click day/week names to navigate views
                        editable: true,
                        eventLimit: true, // allow "more" link when too many events
                        events: '/eventFeed',
                        customButtons: {
                            addEvent: {
                                text: '+',
                                click: function() {
                                    window.location.href = "/add-event/"+moment().format();
                                }
                            },

                        },
                        dayClick: function(date, jsEvent, view) {

                            window.location.href = "/add-event/"+date.format();
                        },
                        eventClick: function(calEvent, jsEvent, view) {
                            window.location.href = "/view-event/"+calEvent.id;
                        },
                    });

                });

            </script>
            <style>

                body {
                    margin: 40px 10px;
                    padding: 0;
                    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                    font-size: 14px;
                }

                #calendar {
                    max-width: 900px;
                    margin: 0 auto;
                }

            </style>

        @endsection
        @section('content')
            <div id='calendar'></div>
        @endsection


