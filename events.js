$("document").ready(function () {

    $(".heading").hide().fadeIn(1800);

    fetch('https://gracestapkowski.github.io/cs20-gs/events.json')
        .then(response => response.json())
        .then(data => {
            var container = $(".event-container");
            data.events.forEach(event => {
                let accDate = new Date(event.date);
                var eventHolder = $("<div>").addClass("event");

                var eventLeft = $("<div>").addClass("event-left");

                var eventDate = $("<div>").addClass("event-date");
                var date = $("<div>").addClass("date");
                date.text(accDate.getDate());
                var month = $("<div>").addClass("month");
                month.text(accDate.toLocaleString('default', { month: 'short' }) + " " + accDate.getFullYear());

                eventDate.append(date);
                eventDate.append(month);
                eventLeft.append(eventDate);

                var eventRight = $("<div>").addClass("event-right");

                var eventTitle = $("<h3>").addClass("event-title");
                eventTitle.text(event.title);
                var description = $("<p>").addClass("event-description");
                description.text(event.description);


                eventHolder.on('click', function () {
                    window.open(event.url, "_blank");
                })


                var eventTime = $("<div>").addClass("event-timing");
                const options = { hour: 'numeric', minute: 'numeric', hour12: false };
                const localTime = accDate.toLocaleTimeString(undefined, options);
                eventTime.text(localTime);

                eventRight.append(eventTitle);
                eventRight.append(description);
                eventRight.append(eventTime);


                eventHolder.append(eventLeft);
                eventHolder.append(eventRight);
                container.append(eventHolder);
            });
        })

    

})
