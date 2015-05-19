<?php
echo '

    <link rel="stylesheet" href="http://www.tcbcommercialproperties.com/sandbox/css/formstyles.css" type="text/css" media="all" />
    <h1>Gigs Form</h1>
    
<form action="#" method="post" id="contact">
    <fieldset>
        <legend><h2><strong>Gig Opportunity</strong></h2></legend>     
        <label><em>Company Name</em></label>
            <input type="text" name="CompanyName" id="CompanyName" placeholder="Company Name">    <br>    
        
        <label><em>Company Address</em></label>
            <input type="text" name="CompanyAddress" id="CompanyAddress" placeholder="Company Address">    <br> 
            
        <label><em>City</em></label>
            <input type="text" name="City" id="City" placeholder="City">    <br> 
            
        <label><em>State</em></label>
            <input type="text" name="State" id="State" placeholder="State">    <br>             
            
        <label><em>Zip Code</em></label>
            <input type="text" name="ZipCode" id="ZipCode" placeholder="Zip Code">    <br> 
         
        <label><em>Company Phone</em></label>
            <input type="text" name="CompanyPhone" id="CompanyPhone" placeholder="Phone Number">    <br>            
            
        <label><em>Company Website</em></label>
            <input type="text" name="CompanyWebsite" id="CompanyWebsite" placeholder="Company Website">    <br>   
            
        <label><em>Gig Posting Date</em>&nbsp(mm/dd/yyyy)</label>
            <input type="date" name="Date" id="Date" placeholder="Date Gig Posted">            
<br>             
        <fieldset>
        <legend><h3><strong>Company Contact</strong></h3></legend>     
        <label><em>First Name</em></label>
            <input type="text" name="FirstName" id="FirstName" placeholder="First Name">    <br> 
        
        <label><em>Last Name</em></label>
            <input type="text" name="LastName" id="LastName" placeholder="Last Name">    <br> 
        
        <label><em>Email</em></label>
            <input type="email" name="Email" id="Email" placeholder="Gig Contact Email">    <br> 
            
        <label><em>Phone</em></label>
            <input type="text" name="Phone" id="Phone" placeholder="Gig Contact Phone">    <br>             
        </fieldset>
        
<br>
        <fieldset>
        <legend><h3><strong>Work Experience</strong></h3></legend>    
        <label><em>Experience</em></label><br>
            <textarea rows="25" name="experience" id="experience"></textarea>
        </fieldset>
<br>
        <fieldset>
        <legend><h3><strong>Gig Interview Details</strong></h3></legend>             
        <label><em>Interview Location</em></label>
            <select name="InterviewLocation">
                <option value="select">Select One</option>
                <option value="scc">Seattle Central Campus</option>
                <option value="ncc">North Central Campus</option>
                <option value="southcc">South Central Campus</option>
                <option value="comaddress">Company Address</option>
                <option value="other">Other</option>
            </select>
<br>
<br>
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
        </fieldset>    
<br>
<br>
        <fieldset>
        <legend><h3><strong>Project/Gig Description</strong></h3></legend>    
        <label><em>Gig Outline</em></label><br>
            <textarea rows="25" name="gigoutline" id="gigoutline"></textarea>
	</fieldset>   
<br>
        <fieldset>
        <legend><h3><strong>Project Special Instructions</strong></h3></legend>    
        <label><em>Special Instructions</em></label><br>
            <textarea rows="15" name="specialinst" id="specialinst"></textarea>
	</fieldset>
<br>
        <fieldset>
        <label><em>Pay rate</em></label>
            <input type="text" name="Pay rate" id="payRate" placeholder="Pay rate">    <br>  
        </fieldset>

        <label><em></em></label><br>       
        <input type="submit" value="Submit">
        </fieldset>
</form> ';

?>