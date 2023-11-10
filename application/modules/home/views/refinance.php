

        <!-- start of form section -->
  <section id="formbackground">

<form id="regForm" action="<?php echo base_url();?>home/add_refinance" method="post">

 <?php 
             if($this->session->flashdata("error_msg") != ''){?>
             <div class="alert alert-danger">
                 <button class="close" data-dismiss="alert"></button>
                 <?php echo $this->session->flashdata("error_msg");?>
             </div>
          <?php
            }
          ?>
          <?php 
             if($this->session->flashdata("success") != ''){?>
             <div class="alert alert-success">
                 <button class="close" data-dismiss="alert"></button>
                 <?php echo $this->session->flashdata("success");?>
             </div>
          <?php
            }
          ?>
          <br>
<h1>Get a Professional Quote</h1>

<!-- One "tab" for each step in the form: -->


<div class="tab" id="address">
    <div class="row text-center">
        
        <div class="col-md-12 adrs">
        <h2>Zip Code</h2>
        <input placeholder="Zip Code*" oninput="this.className = ''" name="zip">
        <h2>street address</h2>
        <input placeholder="Street Address*" oninput="this.className = ''" name="address">
        <h2>City</h2>
        <input placeholder="City*" oninput="this.className = ''" name="city">
        </div>
        
    </div>    
</div>


<div class="tab" id="buttonclick">
    <div class="row">
        <div class="col-md-12">
        <h2>Start Here</h2>
        </div>
    </div>
    <div class="row text-center" id="imageform">
    <input type="hidden" id="val_field" name="house_type">
        
           <!--  <div class="col-md-3">
                <input type="image" src="images/singlefamily_hover.jpg" id="img1">
                
            </div>
            <div class="col-md-3">
                <input type="image" src="images/multifamily_hover.jpg" id="img1">
            </div>
            <div class="col-md-3">
                <input type="image" src="images/townhome_hover.jpg"  id="img1">
            </div>
            <div class="col-md-3">
                <a href="#"  onclick="clickme(4);"></a>
                <input type="image" src="images/condo_hover.jpg"  id="img1">
            </div> -->
                 

        <div class="col-md-3">
            <a onclick="clickme('singlefamily');"><img src="<?php echo base_url();?>frontfiles/assets/images/singlefamily_hover.jpg"  class="img-thumbnail highlight" alt=""></a>
        </div>
        <div class="col-md-3">
            <a onclick="clickme('multifamily');"><img src="<?php echo base_url();?>frontfiles/assets/images/multifamily_hover.jpg"  class="img-thumbnail highlight" alt=""></a>
        </div>
        <div class="col-md-3">
            <a onclick="clickme('townhome');"><img src="<?php echo base_url();?>frontfiles/assets/images/townhome_hover.jpg"  class="img-thumbnail highlight" alt=""></a>
        </div>
        <div class="col-md-3">
            <a onclick="clickme('condo');"><img src="<?php echo base_url();?>frontfiles/assets/images/condo_hover.jpg"  class="img-thumbnail highlight"alt=""></a>
        </div>
    </div>
    

</div>



<div class="tab" id="price">
    <div class="row">
        <div class="col-md-12">
            <h2>Balance on Mortgage</h2>

            <div class="col-md-12">
                <div>
                  <!-- <input type="post" id="html-input-range"> -->
                  <input type="number" oninput="this.className = ''" name="mortgage_bal">

                </div>
            </div>
            
            
        </div>
    </div>
</div>


<div class="tab" id="percentage">
    <div class="row">
        <div class="col-md-12">
            <h2>Interest Rate Paying</h2>

            <div class="text-center mt-lg">
                <select id="" name="int_rate">
                    <option value="">Select Percentage*</option>
                    <option value="1.0">1.0%</option>
                    <option value="1.1">1.1%</option>
                    <option value="1.2">1.2%</option>
                    <option value="1.3">1.3%</option>
                    <option value="1.4">1.4%</option>
                    <option value="1.5">1.5%</option>
                    <option value="1.6">1.6%</option>
                    <option value="1.7">1.7%</option>
                    <option value="1.8">1.8%</option>
                    <option value="1.9">1.9%</option>
                    <option value="2.1">2.1%</option>
                    <option value="2.2">2.2%</option>
                    <option value="2.3">2.3%</option>
                    <option value="2.4">2.4%</option>
                    <option value="2.5">2.5%</option>
                    <option value="2.6">2.6%</option>
                    <option value="2.7">2.7%</option>
                    <option value="2.8">2.8%</option>
                    <option value="2.9">2.9%</option>
                    <option value="3.0">3.0%</option>
                    <option value="3.1">3.1%</option>
                    <option value="3.2">3.2%</option>
                    <option value="3.3">3.3%</option>
                    <option value="3.4">3.4%</option>
                    <option value="3.5">3.5%</option>
                    <option value="3.6">3.6%</option>
                    <option value="3.7">3.7%</option>
                    <option value="3.8">3.8%</option>
                    <option value="3.9">3.9%</option>
                    <option value="4.0">4.0%</option>
                    <option value="4.1">4.1%</option>
                    <option value="4.2">4.2%</option>
                    <option value="4.3">4.3%</option>
                    <option value="4.4">4.4%</option>
                    <option value="4.5">4.5%</option>
                    <option value="4.6">4.6%</option>
                    <option value="4.7">4.7%</option>
                    <option value="4.8">4.8%</option>
                    <option value="4.9">4.9%</option>
                    <option value="5.0">5.0%</option>
                    <option value="5.1">5.1%</option>
                    <option value="5.2">5.2%</option>
                    <option value="5.3">5.3%</option>
                    <option value="5.4">5.4%</option>
                    <option value="5.5">5.5%</option>
                    <option value="5.6">5.6%</option>
                    <option value="5.7">5.7%</option>
                    <option value="5.8">5.8%</option>
                    <option value="5.9">5.9%</option>
                    <option value="6.0">6.0%</option>
                    <option value="6.1">6.1%</option>
                    <option value="6.2">6.2%</option>
                    <option value="6.3">6.3%</option>
                    <option value="6.4">6.4%</option>
                    <option value="6.5">6.5%</option>
                    <option value="6.6">6.6%</option>
                    <option value="6.7">6.7%</option>
                    <option value="6.8">6.8%</option>
                    <option value="6.9">6.9%</option>
                    <option value="7.0">7.0%</option>
                    <option value="7.1">7.1%</option>
                    <option value="7.2">7.2%</option>
                    <option value="7.3">7.3%</option>
                    <option value="7.4">7.4%</option>
                    <option value="7.5">7.5%</option>
                    <option value="7.6">7.6%</option>
                    <option value="7.7">7.7%</option>
                    <option value="7.8">7.8%</option>
                    <option value="7.9">7.9%</option>
                    <option value="8.0">8.0%</option>
                    <option value="8.1">8.1%</option>
                    <option value="8.2">8.2%</option>
                    <option value="8.3">8.3%</option>
                    <option value="8.4">8.4%</option>
                    <option value="8.5">8.5%</option>
                    <option value="8.6">8.6%</option>
                    <option value="8.7">8.7%</option>
                    <option value="8.8">8.8%</option>
                    <option value="8.9">8.9%</option>
                    <option value="9.0">9.0%</option>
                    <option value="9.1">9.1%</option>
                    <option value="9.2">9.2%</option>
                    <option value="9.3">9.3%</option>
                    <option value="9.4">9.4%</option>
                    <option value="9.5">9.5%</option>
                    <option value="9.6">9.6%</option>
                    <option value="9.7">9.7%</option>
                    <option value="9.8">9.8%</option>
                    <option value="9.9">9.9%</option>
                    <option value="10.0">10.0%</option>
                </select>
            </div>
            
            
        </div>
    </div>
</div>


<div class="tab" id="address">
    <div class="row text-center">
        
        <div class="col-md-12 valuee">
        <h2>Current Market Value of House</h2>
        <input placeholder="Value*" oninput="this.className = ''" name="current_value"><br>
        </div>
        
    </div>    
</div>


<!-- <div class="tab" id="percent">
    <div class="row">
        <div class="col-md-12">
            <h2>Interest Rate Paying</h2>

            <div class="col-md-12 text-center">
                <input id="txtF" type="number" placeholder="Percentage*" onKeyPress="return check(event,value)" onInput="checkLength()" />
                <p id="s"></p>
            </div>
            
            
        </div>
    </div>
</div> -->



<div class="tab" id="buttonclick">
    <div class="row">
        <div class="col-md-12">
            <h2>Military Veteran</h2>
        </div>
    </div>
    <div class="row text-center" id="imageform">
        <input type="hidden" id="val_field2" name="military_vetran">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-3">
            <a onclick="morenext('Yes');"><img src="<?php echo base_url();?>frontfiles/assets/images/yes_hover.jpg" class="img-thumbnail highlight" alt=""></a>
        </div>
        <div class="col-md-3">
            <a onclick="morenext('No');"><img src="<?php echo base_url();?>frontfiles/assets/images/no_hover.jpg" class="img-thumbnail highlight" alt=""></a>
        </div>
        <div class="col-md-3">
           
        </div>
    </div>
</div>



<div class="tab" id="buttonclick">

    <div class="row">
        <div class="col-md-12">
            <h2>Estimated Credit Score</h2>
        </div>
    </div>

    <div class="row text-center" id="imageform">
        <input type="hidden" id="val_field1" name="credit_score">

        <div class="col-md-3">
            <a onclick="nextclick('Excellent');"><img src="<?php echo base_url();?>frontfiles/assets/images/excellent_hover.jpg" class="img-thumbnail highlight" alt=""></a>
        </div>
        <div class="col-md-3">
            <a onclick="nextclick('Good');"><img src="<?php echo base_url();?>frontfiles/assets/images/good_hover.jpg" class="img-thumbnail highlight" alt=""></a>
        </div>
        <div class="col-md-3">
            <a onclick="nextclick('Fair');"><img src="<?php echo base_url();?>frontfiles/assets/images/fair_hover.jpg" class="img-thumbnail highlight" alt=""></a>
        </div>
        <div class="col-md-3">
            <a onclick="nextclick('Poor');"><img src="<?php echo base_url();?>frontfiles/assets/images/poor_hover.jpg" class="img-thumbnail highlight"alt=""></a>
        </div>
    </div>
</div>

<div class="tab" id="address">
    <div class="row text-center">
        
        <div class="col-md-12">
        <h2>What is Your Contact Information?</h2>
        <input type="hidden" name="property_type" value="Refinance">
        <input placeholder="First Name*" oninput="this.className = ''" name="first_name"><br>
        <input placeholder="Last Name*" oninput="this.className = ''" name="last_name"><br>
        <input type="email" placeholder="Email*" oninput="this.className = ''" name="email"><br>
        <input placeholder="Phone*" oninput="this.className = ''" name="phone"><br>
        

        <div class="row" id="checkmarkcss">
            <div class="col-md-12">
                <h6>Terms and Condition's</h6>
                <input type="checkbox" name="terms_check" value="Accept" required="">
                 <span>Check Home Equity RatesCheck Jumbo RatesCheck Mortgage Rates. </span>
            </div>
        </div>

    </div>


       <!--  <label class="container" id="checkmarkcss">
          <input type="checkbox" checked="checked">
          <span class="checkmark">Check Home Equity RatesCheck Jumbo RatesCheck Mortgage Rates.</span>
        </label> -->
        
    </div>    
</div>



<div style="overflow:auto;">
  <div style="text-align: center;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>

</section>

        <!-- End of form section -->