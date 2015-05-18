<?php
echo '

    <link rel="stylesheet" href="http://www.tcbcommercialproperties.com/sandbox/css/formstyles.css" type="text/css" media="all" />
    
<form action="#" method="post" id="contact">
    <fieldset>
        <legend><h2><em>Gigs Form</em></h2></legend>
        
        <label><em>First Name</em></label>
            <input type="text" name="FirstName" id="FirstName" placeholder="First Name">
        
        <label><em>Last Name</em></label>
            <input type="text" name="LastName" id="LastName" placeholder="Last Name">
        
        <label><em>Email</em></label>
            <input type="email" name="Email" id="Email" placeholder="Email">
        
        <label><em>Coding Languages</em>&nbsp(Please select all that apply)</label>
            <p><input type="checkbox" name="Languages []" id="Language5" value="csharp">C#</p>
            <p><input type="checkbox" name="Languages []" id="Language6" value="c">C</p>
            <p><input type="checkbox" name="Languages []" id="Language7" value="cplus">C++</p>
            <p><input type="checkbox" name="Languages []" id="Language8" value="objectivec">Objective-C</p>
            <p><input type="checkbox" name="Languages []" id="Language1" value="html/css">Html/CSS</p>
            <p><input type="checkbox" name="Languages []" id="Language1" value="less">Less</p>
            <p><input type="checkbox" name="Languages []" id="Language1" value="sass">SASS</p>
            <p><input type="checkbox" name="Languages []" id="Language2" value="php">PHP</p>
            <p><input type="checkbox" name="Languages []" id="Language3" value="javascript">JavaScript</p>
            <p><input type="checkbox" name="Languages []" id="Language4" value="java">Java</p>
            <p><input type="checkbox" name="Languages []" id="Language9" value="python">Python</p>
            <p><input type="checkbox" name="Languages []" id="Language10" value="other">Other</p>
        
        <label><em>Date</em>&nbsp(mm/dd/yyyy)</label>
            <input type="date" name="Date" id="Date">
        
        <label><em>Interview Location</em></label>
            <select name="InterviewLocation">
                <option value="select">Select One</option>
                <option value="scc">Seattle Central Campus</option>
                <option value="ncc">North Central Campus</option>
                <option value="southcc">South Central Campus</option>
                <option value="comaddress">Company Address</option>
                <option value="other">Other</option>
            </select>
        
        <label><em>Preferred Appointment Time</em></label>
            <select name="AppointmentTime">
                <option value="select">Select One</option>
                    <option value="EightAm">8am</option>
                    
                    <option value="NineAm">9am</option>
                    
                    <option value="TenAm">10am</option>
                    
                    <option value="ElevenAm">11am</option>
                    
                    <option value="Noon">12am</option>
                    
                    <option value="OnePm">1pm</option>
                    
                    <option value="TwoPm">2pm</option>
                    
                    <option value="ThreePm">3pm</option>
                    
                    <option value="FourPm">4pm</option>
                    
                    <option value="FivePm">5pm</option>
                    
                    <option value="SixPm">6pm</option>
                    
                    <option value="SevenPm">7pm</option>
                    
                    <option value="EightPm">8pm</option>
                    
                    <option value="NinePm">9pm</option>
                    <option value="TenPm">10pm</option>
            </select>
        
        <label><em>Comments</em></label><br>
            <textarea rows="10" name="Comments" id="Comments"></textarea>
        
        <input type="submit" name="Submit" id="Submit" value="Send It">
        
    </fieldset>
</form> ';

?>