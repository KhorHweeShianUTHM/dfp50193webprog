// variable declaration and initialization
var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
var weekdayShort = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"];
var monthDirection = 0;

function getNextMonth() { // function getNextMonth()
	monthDirection++;
	// variable
	var current; 
	var now = new Date();
	if (now.getMonth() == 11) { // if else select
		current = new Date(now.getFullYear() + monthDirection, 0, 1); 
	} else { // else
		current = new Date(now.getFullYear(), now.getMonth() + monthDirection, 1);
	}
	initCalender(getMonth(current)); // call function
} // end of function getNextMonth()

function getPrevMonth() { // function getPrevMonth()
	monthDirection--;
	// variable
	var current;
	var now = new Date();
	if (now.getMonth() == 11) { // if else select
		current = new Date(now.getFullYear() + monthDirection, 0, 1);
	} else { // else
		current = new Date(now.getFullYear(), now.getMonth() + monthDirection, 1);
	}
	initCalender(getMonth(current)); // call function
} // end of function getPrevMonth()
Date.prototype.isSameDateAs = function (pDate) { // get prototype date
	return (
		this.getFullYear() === pDate.getFullYear() &&
		this.getMonth() === pDate.getMonth() &&
		this.getDate() === pDate.getDate()
	);
};

function getMonth(currentDay) { // funtion getMonth(currentDay)
	// variable
	var now = new Date();
	var currentMonth = month[currentDay.getMonth()];
	var monthArr = [];
	for (i = 1 - currentDay.getDate(); i < 31; i++) { // for loop
		var tomorrow = new Date(currentDay); // variable
		tomorrow.setDate(currentDay.getDate() + i);
		if (currentMonth !== month[tomorrow.getMonth()]) { // if else select
			break;
		} else { // else
			monthArr.push({
				date: { // get date
					weekday: weekday[tomorrow.getDay()],
					weekday_short: weekdayShort[tomorrow.getDay()],
					day: tomorrow.getDate(),
					month: month[tomorrow.getMonth()],
					year: tomorrow.getFullYear(),
					current_day: now.isSameDateAs(tomorrow) ? true : false,
					date_info: tomorrow
				}
			});
		}
	}
	return monthArr; // return to monthArr
} // end of function getMonth

function clearCalender() { // function clearCalender()
	$("table tbody tr").each(function () { // remove class from each table-row 
		$(this).find("td").removeClass("active selectable currentDay between hover").html("");
	});
	$("td").each(function () { // when user's mouse enter or leave
		$(this).unbind('mouseenter').unbind('mouseleave');
	});
	$("td").each(function () { // when user click
		$(this).unbind('click');
	});
	clickCounter = 0; 
} // end of clearCalender()

function initCalender(monthData) { // function initCalender(monthData)
	// variable
	var row = 0;
	var classToAdd = "";
	var currentDay = "";
	var today = new Date();

	clearCalender(); // call function
	$.each(monthData,
		function (i, value) {
			// variable
			var weekday = value.date.weekday_short;
			var day = value.date.day;
			var column = 0;
			var index = i + 1;

			$(".sideb .header .month").html(value.date.month);
			$(".sideb .header .year").html(value.date.year);
			if (value.date.current_day) { // if select
				currentDay = "currentDay";
				classToAdd = "selectable";
			}
			if (today.getTime() < value.date.date_info.getTime()) { // if select
				classToAdd = "selectable";
			}
			$("tr.weedays th").each(function () {
				var row = $(this); // variable
				if (row.data("weekday") === weekday) { // if select
					column = row.data("column");
					return;
				}
			});
			$($($($("tr.days").get(row)).find("td").get(column)).addClass(classToAdd + " " + currentDay).html(day));
			currentDay = "";
			if (column == 6) {
				row++;
			}
		});
	$("td.selectable").click(function () {
		dateClickHandler($(this));
	});
}
initCalender(getMonth(new Date())); // call function

var clickCounter = 0; // variable

function dateClickHandler(elem) { // function dateClickHandler(elem)

	var day1 = parseInt($(elem).html()); // variable
	if (clickCounter === 0) { // if select
		$("td.selectable").each(function () {
			$(this).removeClass("active between hover");
		});
	}
	clickCounter++;
	if (clickCounter === 2) { // when user's mouse enter or leave
		$("td.selectable").each(function () {
			$(this).unbind('mouseenter').unbind('mouseleave');
		});
		clickCounter = 0;
		return;
	}
	$(elem).toggleClass("active");
	$("td.selectable").hover(function () { // function of td.selectable is hover

		var day2 = parseInt($(this).html()); // variable
		$(this).addClass("hover");
		$("td.selectable").each(function () {
			$(this).removeClass("between");

		});
		if (day1 > day2 + 1) { // if day 1 is more than day2+1
			$("td.selectable").each(function () {
				var dayBetween = parseInt($(this).html());
				if (dayBetween > day2 && dayBetween < day1) {
					$(this).addClass("between");
				}
			});
		} else if (day1 < day2 + 1) { // if day 1 is less than day2+1
			$("td.selectable").each(function () {
				var dayBetween = parseInt($(this).html());
				if (dayBetween > day1 && dayBetween < day2) {
					$(this).addClass("between");
				}
			});
		}
	}, function () {
		$(this).removeClass("hover");
	});
} // end of dateClickHandler(elem)
$(".fa-angle-left").click(function () { // function of left arrow 
	getPrevMonth(); // call function
});

$(".fa-angle-right").click(function () { // function of right arrow 
	getNextMonth(); // call function
});