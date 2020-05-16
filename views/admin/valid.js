// function addFlight() {
//   var err_fid = "";
//   var fid = document.getElementById("flight_id");
//   if (fid.value == "") {
//     err_fid = "Write Your Flight ID ";
//     document.getElementById("err_flight_id").innerHTML = err_fid;
//     return false;
//   }

//   var err_ftime = "";
//   var ftime = document.getElementById("flight_time");
//   if (ftime.value == "") {
//     err_ftime = " Select Flight Time. ";
//     document.getElementById("err_flight_time").innerHTML = err_ftime;
//     return false;
//   }

//   var err_ffrom = "";
//   var from = document.getElementById("flight_from");
//   if (from.value == "") {
//     err_ffrom = " Select Flight. ";
//     document.getElementById("err_flight_from").innerHTML = err_ffrom;
//     return false;
//   }
//   var err_fto = "";
//   var err_wrong = "";
//   var to = document.getElementById("flight_to");
//   if (to.value == "") {
//     err_fto = " Select Flight. ";
//     document.getElementById("err_flight_to").innerHTML = err_fto;
//     return false;
//   } else {
//     if (from.value == to.value) {
//       err_wrong = "Wrong Select.";
//       document.getElementById("err_flight_wrong").innerHTML = err_wrong;
//       return false;
//     }
//   }
//   var err_seat = "";
//   var fseat = document.getElementById("flight_seat");
//   if (fseat.value == "") {
//     err_seat = " Write Flight Seat. ";
//     document.getElementById("err_flight_seat").innerHTML = err_seat;
//     return false;
//   }
//   var err_date = "";
//   var fdate = document.getElementById("flight_date");
//   if (fdate.value == "") {
//     err_seat = " Select Flight Date. ";
//     document.getElementById("err_flight_date").innerHTML = err_date;
//     return false;
//   }
//   var err_fare = "";
//   var ffare = document.getElementById("flight_fare");
//   if (ffare.value == "") {
//     err_fare = " Write Flight Fare. ";
//     document.getElementById("err_flight_fare").innerHTML = err_fare;
//     return false;
//   }
//   return true;
// }
