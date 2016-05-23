<?php require_once('Connections/Greenhouse.php'); ?>
<?php
 $msg = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="Images/favicon.ico"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="CSS/mainIndex.css"/>
<script type="text/javascript" src="Resources/ahahLib.js"></script>
<script type="text/javascript" src="Resources/jquery-2.0.2.js"></script>
<script type="text/javascript" src="JavaScript/scroll.js"></script>
<script type="text/javascript" src="JavaScript/mainIndex.js"></script>
<script>
	function subscribe() {
		var emailAddress = document.getElementById('txtEmailAddress').value;	
		var randNum = parseInt(Math.random()*2647923);
		var url = '../Resources/save_forms/saveForm_mainIndex.php?emailAddress=' + emailAddress + '&rand='+ randNum + "&save=save";
	callAHAH(url, 'msg', '', 'Error: Saving subscription information...');
	}
</script>
<title>Welcome To Greenhouse Inc.</title>
</head>
<body>
	<div id="header">
    	<div id="nav">
        <ul>
		<li class="phOptHeader"><a id="optHome" class="optHeader" href="#home">Home</a></li>
    	<li class="phOptHeader"><a id="optAboutUs" class="optHeader" href="#aboutUs">About Us</a></li>
    	<li class="phOptHeader"><a id="optTheTeam" class="optHeader" href="#theTeam">The Team</a></li>
    	<li class="phOptHeader" id="phServices"><a class="optHeader" id="services" href="javascript:void();">Services</a>
        	<ul class="dropMenu">
            	<!--<li class="phDropMenuItem"><a class="dropMenuItem" href="#">Order Online</a>
                	<ul class="subMenu">
                    	<li class="synopsis"><p>Place orders online for convienience with recieving them the next day.</p></li>
                    </ul>
                </li>-->
                <li class="phDropMenuItem"><a class="dropMenuItem" href="#">Newsletter</a></li>
                <li class="phDropMenuItem"><a class="dropMenuItem" href="#">Our Blog</a></li>
                <li class="phDropMenuItem"><a class="dropMenuItem" href="#">Help Center</a></li>
            </ul>
        </li>
    	<li class="phOptHeader" id="phLogin"><a class="optHeader" id="login" href="login.php">Login/Sign Up</a></li>
        </ul>
        </div>
        <div id="phMsgBrowser">
        	<p id="msgBrowser">This website is best viewed in 
            	<a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Google Chrome</a> or 
            	<a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">Mozilla Firefox</a>
            	<div id="close">X</div>
            </p>
        </div>
        </div>
    	
    
    <div id="pageWrap">
    
    	<div id="homePage">
        	<a id="home"></a>
            <div class="pagePadding"></div>
            <h1 class="heading">Greenhouse Inc.</h1>
            <h2 class="sub_heading">Welcome to our website</h2>
            <!--<div id="phNewsletter"><p class="infoText">Get all the latest information about what we are doing to serve the community, and our customers, better. <br/><br/> Subscribe to our Newsletter below.</p>
   		    <form id="newsletter">
            		<input class="txtField" name="txtEmailAddress" id="txtEmailAddress" type="text" placeholder="Enter Email Address"/>
                	<input class="newsButton" name="newsSignUp" id="newsSignUp" type="button" onclick="subscribe();" value="Subscribe" />
       		  </form>
              <p><?php echo $msg ?></p>-->
            </div>
        </div>
<!--End of Home page section-->
        
   	 	<div id="aboutUsPage">
        	<a id="aboutUs"></a>
            <div class="pagePadding"></div>
            <div id="aboutUsNav">
                <div id="optMission" class="optAboutUsNav-click">Mission</div>
                <div id="optRevenue" class="optAboutUsNav">Revenue</div>
                <div id="optInvestor" class="optAboutUsNav">Become An Investor</div>
                <div id="optFaq" class="optAboutUsNav">FAQs</div>                
                <!--<div id="optContact" class="optAboutUsNav">Contact Us</div>-->
            </div>
            <div id="contactAboutUsContent">
                	<h2 id="contactAboutUs-header">Contact Us</h2>
                    <p class="contactAboutUs-info">
                        Landline:</br> 020 349 0982</br></br>
                        Mobile Phone:</br> +254725987642</br></br>
                        Email Address:</br> greenhouse.isk@gmail.com</br>
                    </p>
                </div>
            <div id="aboutUsCard">
            	<div id="missionAboutUsContent" class="aboutUsContent">
                <h2 class="titleAboutUsContent">Mission</h2>Greenhouse Inc. was founded in April of 2013. It started </div>
                
                <div id="revenueAboutUsContent" class="aboutUsContent">
                <h2 class="titleAboutUsContent">Revenue</h2>Revenues will be used in the following manner:<br/><br/>
                <h4 class="sub-titleAboutUsContent">Operating Expenses</h4>
                The primary purpose of revenues will be to ensure the sustainable operations of the greenhouse project. The Board of Directors 				will set and approve all operating budgets.<br/><br/>
                
                <h4 class="sub-titleAboutUsContent">Funding ISK Service Projects</h4>
                Whenever the GHP operating account is deemed 'healthy', GHP will accept grant proposals from ISK service organizations in need 				of financial assistance to subsidize their projects. All grant proposals will be voted on by the Board of Directors. Only 						                revenues generate through sales may be used for this purpose.<br/><br/>
                
                <h4 class="sub-titleAboutUsContent">Stock Reimbursements</h4>
                At the end of each school year (around May 1st), GHP will offer to 'buy-back' stock shares at a rate to be determined by the 			                Board of Directors based on financial security of the GHP at that time. Shareholders may choose to be reimbursed at this rate,                or they may choose to retain their shares for an additional operating year.
                </div>
                
                <div id="investorAboutUsContent" class="aboutUsContent">
                <h2 class="titleAboutUsContent">Become An Investor</h2>
                All GHP operating expenses will be raised through the sale of stock shares. Investors are encouraged to treat all investments as a charitable contribution with the knowledge that shares will be reimbursed at some future date (see Stock Reimbursements). It is important to note that for GHP maintain its non-profit statues shares cannot be reimbursed at a profit to the shareholder.<br/><br/>

If you wish to make a charitable investment, you may purchase shares and donate them back to the GHP organization. Such 'charitable' shares would not qualify for any future reimbursement campaigns.

Investors may sponsor club members by purchasing shares in their name. This will allow club members to take 'ownership' of the GHP. Sponsorship shares remain eligible for reimbursement campaigns. Also consider sponsoring a member of the ISK staff.<br/><br/>

Transfer of shares will incur 5% administrative fee and may only be done through GHP.
				</div>

				<div id="faqAboutUsContent" class="aboutUsContent">
                <h2 class="titleAboutUsContent">Frequently Asked Questions</h2>
                <h4 class="sub-titleAboutUsContent">Will I get a profit on my investment?</h4>
                No. We cannot provide you with profit, we can only reimburse for your investment.
                </div>
            </div>
       	</div>
<!--End of About Us Section-->

   		<div id="theTeamPage">
        	<a id="theTeam"></a>
            <ul class="teamList">
            	<li id="team_optDefault"><h3>Select Department:</h3>
                <ul class="team_dropMenu">
                	<li class="team_dropMenuItem" id="optAllofUs"><h3>Uncategorized</h3></li>
                	<!--<li class="team_dropMenuItem" id="optAllofUs"><h3>All of Us</h3></li>-->
                	<!--<li class="team_dropMenuItem" id="optBod"><h3>Board of Directors</h3></li>-->
                	<li class="team_dropMenuItem" id="optFinance"><h3>Finance Department</h3></li>
                	<li class="team_dropMenuItem" id="optMarketing"><h3>Marketing Department</h3></li>
                	<li class="team_dropMenuItem" id="optProduction"><h3>Production Department</h3></li>
                	<li class="team_dropMenuItem" id="optHr"><h3>Human Resource Department</h3></li>
                    <li class="team_dropMenuItem" id="optPr"><h3>Public Relations Department</h3></li>
                </ul>
                </li>
            </ul>
            <!--Team Option Information-->
            <!--Department Title-->
            <div id="phOptTeamInfo">
            <h1 class="titleOptTeamInfo" id="titleAllOfUsOpt">Uncategorized</h1>
            <!--<h1 class="titleOptTeamInfo" id="titleAllOfUsOpt">All of Us</h1>-->
            <h1 class="titleOptTeamInfo" id="titleBodOpt">Board of Directors</h1>
            <h1 class="titleOptTeamInfo" id="titleFinanceOpt">Finance Department</h1>
            <h1 class="titleOptTeamInfo" id="titleMarketingOpt">Marketing Department</h1>
            <h1 class="titleOptTeamInfo" id="titleProductionOpt">Production Department</h1>
            <h1 class="titleOptTeamInfo" id="titleHrOpt">Human Resource Department</h1>
            <h1 class="titleOptTeamInfo" id="titlePrOpt">Public Relations Department</h1>
            <!--Department Description-->
            <p class="optTeamInfo" id="defaultOpt">Select a Department by hovering over the option above.</p>
            <p class="optTeamInfo" id="allOfUsOpt">Have them select their departments and update the information here.</p>
            <!--<p class="optTeamInfo" id="allOfUsOpt">We all work in collaboration to provide our customers with the best possible service		            </p>-->
            <p class="optTeamInfo" id="bodOpt">This is our outstanding leadership team!</p>
            <p class="optTeamInfo" id="financeOpt">This is our outstanding finance team!</p>
            <p class="optTeamInfo" id="marketingOpt">This is our outstanding marketing team!</p>
            <p class="optTeamInfo" id="productionOpt">This is our outstanding production team!<br/>Scroll Down to view all members.</p>
            <p class="optTeamInfo" id="hrOpt">This is our outstanding human resource team!</p>
            <p class="optTeamInfo" id="prOpt">This is our outstanding public relations team!</p>
            </div>
            <div id="phTeam">
            	<div id="teamAllofUs">
                	<div class="section_1">
                    	<!--Member Info Section-->
                    	<div id="memberInfo-Imran" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Unknown</h1>
                        	 <h1 class="memberInfoTitle">Name: Imran Gulam</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Get Imram's department.</p>
                        </div>
                        <!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Uncategorized/Imran Gulam.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                    	<div id="memberInfo-Louise" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Unknown</h1>
                        	 <h1 class="memberInfoTitle">Name: Louise Pech</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Get Louise's department.</p>
                        </div>
                        <!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Uncategorized/Louise Pech.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                    	<div id="memberInfo-Naman" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Unknown</h1>
                        	 <h1 class="memberInfoTitle">Name: Naman Tanwar</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Get Naman's department.</p>
                        </div>
                        <!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Uncategorized/Naman Tanwar.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                    	<div id="memberInfo-Nikhil" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Unknown</h1>
                        	 <h1 class="memberInfoTitle">Name: Nikhil Mathur</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Get Nikhil's department.</p>
                        </div>
                        <!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Uncategorized/Nikhil Mathur.jpg"/></div><br/><br/>   
                     </div>
                     <div class="section_2">
                     	<!--Member Info Section-->
                    	<div id="memberInfo-Pratik" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Unknown</h1>
                        	 <h1 class="memberInfoTitle">Name: Pratik Sarkar</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Get Pratik's department.</p>
                        </div>
                        <!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Uncategorized/Pratik Sarkar.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                    	<div id="memberInfo-Shivansh" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Unknown</h1>
                        	 <h1 class="memberInfoTitle">Name: Shivansh Chatuverdi</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Get Shivansh's department.</p>
                        </div>
                        <!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Uncategorized/Shivansh Chatuverdi.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                    	<div id="memberInfo-Lior" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Unknown</h1>
                        	 <h1 class="memberInfoTitle">Name: Lior Haskel</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Get Lior's department.</p>
                        </div>
                        <!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Uncategorized/Lior Haskel.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                    	<div id="memberInfo-Khalil" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Unknown</h1>
                        	 <h1 class="memberInfoTitle">Name: Khalil Dualeh</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Get Khalil's department.</p>
                        </div>
                        <!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Uncategorized/Khalil Dualeh.jpg"/></div><br/><br/>
                     
                     </div>
                </div>
                <!--End of All of Us Section-->
                <div id="teamBod">
                <div class="memberImage"><img src="Images/Departments/Production/Finote Gjisman.jpg"/>
            		<p class="memberInfo">We are the best at what we do. We aim to provide the finest services anyday anytime!</p>
 					<div class="memberTitle">Chief Executive Officer</div>
 					<!--<div class="msgInfo">Click To View More</div>-->
            	</div>
                </div>
                <div id="teamFinance">
                	<div class="section_1">
                	<!--Member Info Section-->
                    <div id="memberInfo-Lucian" class="memberInfoNew">
                    			<h1 class="memberInfoTitle">Head of Finance</h1>
                        		<h1 class="memberInfoTitle">Name: Lucian Ouma</h1>
                            	<h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                            	<p class="memberInfoDescription">Lucian is our esteemed Co-Head of Finance. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                    </div>
                     <!--Member Info Section Picture-->
                    <div class="memberImage"><img src="Images/Departments/Finance/Lucian Ouma.jpg"/></div><br/><br/>
                    <!--Member Info Sesction-->
                    </div>
                    <div class="section_2">
                    <div id="memberInfo-Karan" class="memberInfoNew">
                    			<h1 class="memberInfoTitle">Co-Head of Finance</h1>
                        		<h1 class="memberInfoTitle">Name: Karan Shah</h1>
                            	<h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                            	<p class="memberInfoDescription">Karan is our esteemed Co-Head of Finance. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                    </div>
                     <!--Member Info Section Picture-->
                    <div class="memberImage"><img src="Images/Departments/Financial/Karan Shah.jpg"/></div><br/><br/>
                    </div>
                </div>
                <!--End of Finance Section-->
                
                <div id="teamMarketing">
                	<div class="section_1">
                    	<!--Member Info Section-->
                	<div id="memberInfo-Andrew" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Head of Marketing</h1>
                        	<h1 class="memberInfoTitle">Name: Andrew T. Ochieng</h1>
                            <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                            <p class="memberInfoDescription">Andrew is our esteemed Head of Marketing. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                        </div>
                    <!--Member Info Section Picture-->
                    	<div class="memberImage"><img src="Images/Departments/Marketing/Me.jpg"/></div><br/><br/>
                    </div>
                    <div class="section_2">
                    	<div id="memberInfo-Ringo" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Co-Head of Marketing</h1>
                        	<h1 class="memberInfoTitle">Name: Ringo Groenewegen</h1>
                            <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                            <p class="memberInfoDescription">Ringo is our esteemed Co-Head of Marketing. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                        </div>
                     <!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Marketing/Ringo Groenewegen.jpg"/></div>
                    </div>
            	</div>
                <!--Production Team Section-->
                <div id="teamProduction">
                	<div class="section_1">
                    	 <!--Member Info Section-->
                		 <div id="memberInfo-Finote" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Head of Production</h1>
                        	 <h1 class="memberInfoTitle">Name: Finote Gijsman</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Finote is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Finote Gjisman.jpg"/></div><br/><br/>
                     	<!--Member Info Section-->
                        <div id="memberInfo-Paul" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: Paul Pech</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Paul is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Paul Pech.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                        <div id="memberInfo-Natasha" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: Natasha Mawjee</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Natasha is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Natasha Mawjee.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                        <div id="memberInfo-Omar" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: Omar Disselkoen</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Omar is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Omar Disselkoen.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                        <div id="memberInfo-David" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: David Onyango</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">David is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/David Onyango.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                        <div id="memberInfo-Alex" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: Alex Alverson</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Alex is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Alex Alverson.jpg"/></div><br/><br/>
                    </div>
                    <div class="section_2">
                    	<!--Member Info Section-->
                        <div id="memberInfo-Meer" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: Meer Shah</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Meer is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Meer Shah.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                        <div id="memberInfo-Snow" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: Snow Han</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Snow is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Snow Han.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                        <div id="memberInfo-Jacob" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: Jacob Von Der Heide</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Jacob is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Jacob Von Der Heide.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                        <div id="memberInfo-NatashaM" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: Natasha Matsaert</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Natasha is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Natasha Matsaert.jpg"/></div><br/><br/>
                        <!--Member Info Section-->
                        <div id="memberInfo-Gurraj" class="memberInfoNew">
                    		 <h1 class="memberInfoTitle">Member of Production Team</h1>
                        	 <h1 class="memberInfoTitle">Name: Gurraj Sagoo</h1>
                             <h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                             <p class="memberInfoDescription">Gurraj is our esteemed Head of Production. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                         </div>
                     	<!--Member Info Section Picture-->
                     	<div class="memberImage"><img src="Images/Departments/Production/Gurraj Sagoo.jpg"/></div><br/><br/>
                    </div>
            	</div>
                <!--End of Production Section-->
                
                <div id="teamHr">
                	<div class="section_1">
                    	 <!--Member Info Sesction-->
                    	 <div id="memberInfo-Avijit" class="memberInfoNew">
                    			<h1 class="memberInfoTitle">Head of Human Resource</h1>
                        		<h1 class="memberInfoTitle">Name: Avijit Minocha</h1>
                            	<h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                            	<p class="memberInfoDescription">Avijit is our esteemed Co-Head of Finance. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                    	</div>
                     <!--Member Info Section Picture-->
                    <div class="memberImage"><img src="Images/Departments/Human Reosurce/Avijit Minocha.jpg"/></div><br/><br/>
                    </div>
                    <div class="section_2">
                  		<!--Member Info Sesction-->
                    	 <div id="memberInfo-Tito" class="memberInfoNew">
                    			<h1 class="memberInfoTitle">Co-Head of Human Resource</h1>
                        		<h1 class="memberInfoTitle">Name: Tito Mbathi</h1>
                            	<h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                            	<p class="memberInfoDescription">Tito is our esteemed Co-Head of Finance. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                    	</div>
                     <!--Member Info Section Picture-->
                    <div class="memberImage"><img src="Images/Departments/Human Reosurce/Tito Mbathi.jpg"/></div><br/><br/>
                    </div>
            	</div>
                <!--End of Human Resource Section-->
                
                <div id="teamPr">
                	<div class="section_1">
                    	 <!--Member Info Sesction-->
                    	 <div id="memberInfo-Nora" class="memberInfoNew">
                    			<h1 class="memberInfoTitle">Head of Public Relations</h1>
                        		<h1 class="memberInfoTitle">Name: Nora Tuts</h1>
                            	<h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                            	<p class="memberInfoDescription">Nora is our esteemed Co-Head of Finance. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                    	</div>
                     <!--Member Info Section Picture-->
                    	<div class="memberImage"><img src="Images/Departments/Public Relations/Nora Tuts.jpg"/></div><br/><br/>
                    </div>	
                    <div class="section_2">
                    	 <!--Member Info Sesction-->
                    	 <div id="memberInfo-Sierra" class="memberInfoNew">
                    			<h1 class="memberInfoTitle">Co-Head of Public Relations</h1>
                        		<h1 class="memberInfoTitle">Name: Sierra Rostal</h1>
                            	<h1 class="memberInfoTitle">Joined: April 2013</h1><br/>
                            	<p class="memberInfoDescription">Sierra is our esteemed Co-Head of Finance. His Department stirves to provide our 			customers with the smoothest experience when they go to buy our goods.</p>
                    	</div>
                     <!--Member Info Section Picture-->
                    	<div class="memberImage"><img src="Images/Departments/Public Relations/Sierra Rostal.jpg"/></div><br/><br/>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>