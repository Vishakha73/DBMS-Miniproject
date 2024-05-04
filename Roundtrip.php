<html>
    <head>
    <meta charset="utf-8">
    <title>Roundtrip Booking</title>
    <style>
        body{
            margin:0;
            padding:0;
            font-family:sans-serif;
            background:url(./images/photo.jpg)no-repeat;
            background-size:cover;
        } 
        .middle{
            text-align: center;
        }
    </style>
    </head>
    <body>
    <h2 style="background-color:palevioletred" class="middle">Roundtrip Booking</h2>
    <img src="./images/Purple-Ticket-Rakhi.jpg" alt=""height="" width="1700"/>
    <marquee direction="right" bgcolor="violet">Welcome to Vistara Airlines</marquee>
    <center>
        <form method="post" action="process.php">
        <table border="1">
        <tr><td><h4>Passenger name:<input type="text" name="name" value=""></h4></td></tr>
        <br>
        <br>
        <tr><td><h4>Contact:<input type="text" name="contact" value=""></h4></td></tr>
        <tr><td><h4>Origin:<select type="combo" name="origin">
        <option>Port Blair </option>
        <option>Vishakhapatnam </option>
        <option>Hyderabad </option>
        <option>Guhwati </option>
        <option>New Delhi </option>
        <option>Dabolim(village)he </option>
        <option>Ahemdabad </option>
        <option>Bengaluru </option>
        <option>Mangalore </option>
        <option>Kochi </option>
        <option>Kozhikade </option>
        <option>Thriuvanathapuram </option>
        <option>Mumbai </option>
        <option>Nagpur </option>
        <option>Impal </option>
        <option>Bhubaneswar </option>
        <option>Amritsar </option>
        <option>Jaipur </option>
        <option>Chennai </option>
        <option>Coimbatore </option>
        <option>Tiruchirapali </option>
        <option>Lucknow </option>
        <option>Varanasi </option>
        <option>Kolkata </option>
        <option>Gaya </option>
        <option>Surat </option>
        <option>Vadodara </option>
        <option>Srinagar </option>
        <option>Kannur</option>
        <option>Pune </option>
        <option>Ranchi </option>
        <option>Siliguri </option>
    </select></h4></td></tr>
    <br>
        <tr><td><h4> Destination:<select type="combo" name="destination">
        <option>Port Blair </option>
        <option>Vishakhapatnam </option>
        <option>Hyderabad </option>
        <option>Guhwati </option>
        <option>New Delhi </option>
        <option>Dabolim(village)he </option>
        <option>Ahemdabad </option>
        <option>Bengaluru </option>
        <option>Mangalore </option>
        <option>Kochi </option>
        <option>Kozhikade </option>
        <option>Thriuvanathapuram </option>
        <option>Mumbai </option>
        <option>Nagpur </option>
        <option>Impal </option>
        <option>Bhubaneswar </option>
        <option>Amritsar </option>
        <option>Jaipur </option>
        <option>Chennai </option>
        <option>Coimbatore </option>
        <option>Tiruchirapali </option>
        <option>Lucknow </option>
        <option>Varanasi </option>
        <option>Kolkata </option>
        <option>Gaya </option>
        <option>Surat </option>
        <option>Vadodara </option>
        <option>Srinagar </option>
        <option>Kannur</option>
        <option>Pune </option>
        <option>Ranchi </option>
        <option>Siliguri </option>
                    </select></h4></td></tr>
    <br>
                <tr><td><h4>Depart:<label for="Depart"></label>
                    <input type="date" value="" name="depart"></h4></td></tr>
                <br><tr><td><h4>Return:<label for="Return"></label>
                    <input type="date" value="" name="return"></h4></td></tr>
                <br>
                <tr><td><h4>Seat:<br>
        <input type="radio" name="seat" value="Economy">Economy
        <input type="radio" name="seat" value="Economy">Premium
         <input type="radio" name="seat" value="Business">Business</h4></td></tr>
        <br>
                <tr><td><h4>PayBy:<br>
        <input type="radio" name="payby" value="Cash">Cash
        <input type="radio" name="payby" value="CV points">CV points
        <input type="radio" name="payby" value="Cash+points">Cash+points </h4></td></tr>  
        <br>
           <tr><td><center><input type="submit" name="book" value="Book"></center></td></tr>     
            </table>
            <br>
            <marquee direction="right" bgcolor="violet">Happy Journey</marquee>
    </form>
    </center>                   
    </body>
</html>