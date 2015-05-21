<?php
echo '

    <link rel="stylesheet" href="http://www.tcbcommercialproperties.com/sandbox/css/formstyles.css" type="text/css" media="all" />
    <h1>Gigs Form</h1>
    
<form class="form-horizontal" role="form">

    <fieldset>
        <legend><h2><strong>Gig Opportunity</strong></h2></legend>
        
    <div class="form-group">    
        <label ><em>Company Name</em></label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="CompanyName" name="CompanyName" placeholder="Company Name">   
            </div>
    </div>
<br>     
    <div class="form-group">
        <label><em>Company Address</em></label>
            <div class="col-md-6">        
                <input type="text" id="CompanyAddress" name="CompanyAddress" placeholder="Company Address">
            </div>
    </div>
<br>     
    <div class="form-group">        
        <label><em>City</em></label>
            <div class="col-md-6">        
                <input type="text" id="City" name="City" placeholder="City">
            </div>
    </div>
<br>     
    <div class="form-group">
        <label><em>State</em></label>
            <div class="col-md-6">        
                <input type="text" id="State" name="State" placeholder="State">
            </div>
    </div>
<br>     
    <div class="form-group">
        <label><em>Zip Code</em></label>
            <div class="col-md-6">        
                <input type="text" id="ZipCode" name="ZipCode" placeholder="Zip Code">
            </div>    
    </div>
<br>     
    <div class="form-group">
        <label><em>Company Phone</em></label>
            <div class="col-md-6">        
                <input type="text" id="CompanyPhone" name="CompanyPhone" placeholder="Phone Number">
            </div>    
     </div>
<br>      
    <div class="form-group">     
        <label><em>Company Website</em></label>
            <div class="col-md-6">        
                <input type="text" id="CompanyWebsite" name="CompanyWebsite" placeholder="Company Website">
            </div>    
    </div>
<br>     
    <div class="form-group">    
        <label><em>Gig Posting Date</em>&nbsp(mm/dd/yyyy)</label>
            <div class="col-md-6">        
                <input type="date" id="Date" name="Date" placeholder="Date Gig Posted">
            </div>
    </div> 
<br>             
        <fieldset>
        <legend><h3><strong>Company Contact</strong></h3></legend>
    
    <div class="form-group">         
        <label><em>First Name</em></label>
            <div class="col-md-6">        
                <input type="text" id="FirstName" name="FirstName" placeholder="First Name">
            </div>
    </div>        
<br> 
    <div class="form-group">         
        <label><em>Last Name</em></label>
            <div class="col-md-6">        
                <input type="text" id="LastName" name="LastName" placeholder="Last Name">
            </div>
    </div>
<br>         
    <div  class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label"><em>Email</em></label>
            <div class="col-md-6">        
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Gig Contact Email">
            </div>
    </div>
<br> 
    <div class="form-group">         
        <label><em>Phone</em></label>
            <div class="col-md-6">        
                <input type="text" id="Phone" name="Phone" placeholder="Gig Contact Phone">
            </div>
    </div>           
        </fieldset>
<br>
<br>  
        <fieldset>
        <legend><h3><strong>Work Experience</strong></h3></legend>
        
    <div class="form-group">   
        <label><em>Experience</em></label><br>
            <div class="col-md-6">        
                <textarea rows="25" id="experience" name="experience"></textarea>
            </div>    
    </div>
        </fieldset>
<br>
        <fieldset>
        <legend><h3><strong>Gig Interview Details</strong></h3></legend>
        
    <div class="form-group">         
        <label><em>Interview Location</em></label>
            <div class="col-md-6">         
                <select name="InterviewLocation">
                    <option value="select">Select One</option>
                    <option value="scc">Seattle Central Campus</option>
                    <option value="ncc">North Central Campus</option>
                    <option value="southcc">South Central Campus</option>
                    <option value="comaddress">Company Address</option>
                    <option value="other">Other</option>
                </select>
            </div>
    </div>        
<br>
<br>
    <div class="form-group"> 
        <label><em>Preferred Appointment Time</em></label>
            <div class="col-md-6">         
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
            </div>
    </div>        
        </fieldset>    
<br>
<br>
        <fieldset>
        <legend><h3><strong>Project/Gig Description</strong></h3></legend>
        
    <div class="form-group">         
        <label><em>Gig Outline</em></label><br>
            <div class="col-md-6">         
                <textarea class="form-control" rows="3" name="gigoutline"></textarea>
            </div>
    </div>        
	</fieldset>   
<br>
        <fieldset>
        <legend><h3><strong>Project Special Instructions</strong></h3></legend>
    <div class="form-group">         
        <label><em>Special Instructions</em></label><br>
            <div class="col-md-6">         
                <textarea rows="15" id="specialinst" name="specialinst"></textarea>
            </div>
    </div>	
        </fieldset>
<br>
        <fieldset>
    <div class="form-group">         
        <label><em>Pay rate</em></label>
            <div class="col-md-6">         
                <input type="text" id="payRate" name="Pay rate" placeholder="Pay rate">
            </div>
    </div>        
        </fieldset>
<br>
    <div class="form-group">         
        <label><em></em></label><br>
            <div class="col-md-6">         
                <input type="submit" value="Submit">
            </div>
    </div>
        </fieldset>
</form> ';

?>