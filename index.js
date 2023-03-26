function ShowData(number){
   $.ajax({
    type: "POST",
    url: "index.php",
    data: {
        action: "ShowData",
        number: number
    },
    dataType: "json",
    success: function (response) {
        console.log(response);
    }
   });
}