// JavaScript Document
$(document).ready(function () {
	$('#close').click(function() {
			$('#phMsgBrowser').slideUp('fast');
		});
	
	$(document).on('click', '#optAllofUs', function() {
			//This is the department title section
			$('#titleBodOpt').hide();
			$('#titleFinanceOpt').hide();
			$('#titleMarketingOpt').hide();
			$('#titleProductionOpt').hide();
			$('#titleHrOpt').hide();
			$('#titlePrOpt').hide();
			$('#titleAllOfUsOpt').fadeIn("slow");
			//This is the department information section.
			$('#defaultOpt').hide();
			$('#bodOpt').hide();
			$('#marketingOpt').hide();
			$('#productionOpt').hide();
			$('#hrOpt').hide();
			$('#prOpt').hide();
			$('#financeOpt').hide();
			$('#allOfUsOpt').fadeIn('slow');
			//This is the gallery photo section.
			$('#teamBod').hide();
			$('#teamMarketing').hide();
			$('#teamProduction').hide();
			$('#teamHr').hide();
			$('#teamPr').hide();
			$('#teamFinance').hide();
			$('#teamAllofUs').fadeIn('slow');
		});
		
	$(document).on('click', '#optBod', function() {
			//This is the department title section
			$('#titleAllOfUsOpt').hide();
			$('#titleFinanceOpt').hide();
			$('#titleMarketingOpt').hide();
			$('#titleProductionOpt').hide();
			$('#titleHrOpt').hide();
			$('#titlePrOpt').hide();
			$('#titleBodOpt').fadeIn("slow");
			//This is the department information section.
			$('#defaultOpt').hide();
			$('#allOfUsOpt').hide();
			$('#marketingOpt').hide();
			$('#productionOpt').hide();
			$('#hrOpt').hide();
			$('#prOpt').hide();
			$('#financeOpt').hide();
			$('#bodOpt').fadeIn('slow');
			//This is the gallery photo section.
			$('#teamAllofUs').hide();
			$('#teamMarketing').hide();
			$('#teamProduction').hide();
			$('#teamHr').hide();
			$('#teamPr').hide();
			$('#teamFinance').hide();
			$('#teamBod').fadeIn('slow');
		});

$(document).on('click', '#optFinance', function() {
			$('#titleAllOfUsOpt').hide();
			$('#titleBodOpt').hide();
			$('#titleMarketingOpt').hide();
			$('#titleProductionOpt').hide();
			$('#titleHrOpt').hide();
			$('#titlePrOpt').hide();
			$('#titleFinanceOpt').fadeIn("slow");
			//This is the department information section.
			$('#defaultOpt').hide();
			$('#allOfUsOpt').hide();
			$('#bodOpt').hide();
			$('#marketingOpt').hide();
			$('#productionOpt').hide();
			$('#hrOpt').hide();
			$('#prOpt').hide();
			$('#financeOpt').fadeIn('slow');
			//This is the gallery photo section.
			$('#teamAllofUs').hide();
			$('#teamBod').hide();
			$('#teamMarketing').hide();
			$('#teamProduction').hide();
			$('#teamHr').hide();
			$('#teamPr').hide();
			$('#teamFinance').fadeIn('slow');
		});
	
	$(document).on('click', '#optMarketing', function() {
			$('#titleAllOfUsOpt').hide();
			$('#titleBodOpt').hide();
			$('#titleFinanceOpt').hide();
			$('#titleProductionOpt').hide();
			$('#titleHrOpt').hide();
			$('#titlePrOpt').hide();
			$('#titleMarketingOpt').fadeIn('slow');
			//This is the department information section.
			$('#defaultOpt').hide();
			$('#allOfUsOpt').hide();
			$('#bodOpt').hide();
			$('#productionOpt').hide();
			$('#hrOpt').hide();
			$('#prOpt').hide();
			$('#financeOpt').hide();
			$('#marketingOpt').fadeIn('slow');
			//This is the gallery photo section.
			$('#teamAllofUs').hide();
			$('#teamBod').hide();;
			$('#teamFinance').hide();
			$('#teamProduction').hide();
			$('#teamHr').hide();
			$('#teamPr').hide();
			$('#teamMarketing').fadeIn('slow');
		});
	
	$(document).on('click', '#optProduction', function() {
			$('#titleAllOfUsOpt').hide();
			$('#titleBodOpt').hide();
			$('#titleFinanceOpt').hide();
			$('#titleMarketingOpt').hide();
			$('#titleHrOpt').hide();
			$('#titlePrOpt').hide();
			$('#titleProductionOpt').fadeIn('slow');
			//This is the department information section.
			$('#defaultOpt').hide();
			$('#allOfUsOpt').hide();
			$('#bodOpt').hide();
			$('#marketingOpt').hide();
			$('#hrOpt').hide();
			$('#prOpt').hide();
			$('#financeOpt').hide();
			$('#productionOpt').fadeIn('slow');
			//This is the gallery photo section.
			$('#teamAllofUs').hide();
			$('#teamBod').hide();
			$('#teamFinance').hide();
			$('#teamMarketing').hide();
			$('#teamHr').hide();
			$('#teamPr').hide();
			$('#teamProduction').fadeIn('slow');
		});
		
	$(document).on('click', '#optHr', function() {
			$('#titleAllOfUsOpt').hide();
			$('#titleBodOpt').hide();
			$('#titleFinanceOpt').hide();
			$('#titleMarketingOpt').hide();
			$('#titleProductionOpt').hide();
			$('#titlePrOpt').hide();
			$('#titleHrOpt').fadeIn('slow');
			//This is the department information section.
			$('#defaultOpt').hide();
			$('#allOfUsOpt').hide();
			$('#bodOpt').hide();
			$('#marketingOpt').hide();
			$('#productionOpt').hide();
			$('#financeOpt').hide();
			$('#prOpt').hide();
			$('#hrOpt').fadeIn('slow');
			//This is the gallery photo section.
			$('#teamAllofUs').hide();
			$('#teamBod').hide();
			$('#teamFinance').hide();
			$('#teamMarketing').hide();
			$('#teamProduction').hide();
			$('#teamPr').hide();
			$('#teamHr').fadeIn('slow');
		});
		
		$(document).on('click', '#optPr', function() {
			$('#titleAllOfUsOpt').hide();
			$('#titleBodOpt').hide();
			$('#titleFinanceOpt').hide();
			$('#titleMarketingOpt').hide();
			$('#titleProductionOpt').hide();
			$('#titleHrOpt').hide();
			$('#titlePrOpt').fadeIn('slow');
			//This is the department information section.
			$('#defaultOpt').hide();
			$('#allOfUsOpt').hide();
			$('#bodOpt').hide();
			$('#marketingOpt').hide();
			$('#productionOpt').hide();
			$('#financeOpt').hide();
			$('#hrOpt').hide();
			$('#prOpt').fadeIn('slow');
			//This is the gallery photo section.
			$('#teamAllofUs').hide();
			$('#teamBod').hide();
			$('#teamFinance').hide();
			$('#teamMarketing').hide();
			$('#teamProduction').hide();
			$('#teamHr').hide();
			$('#teamPr').fadeIn('slow');
		});
		
	$(document).on('focus', '.txtField', function() {
		$('.txtField').css('outline-color','#09C');
		
		});
	
	$(document).on('click', '#optRevenue', function() {
			/*Section to change highlight of selected option*/
			$('#optMission').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optInvestor').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optFaq').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optContact').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optRevenue').removeClass("optAboutUsNav").addClass("optAboutUsNav-click");
			/*Section to change display based on option selection*/
			$('#missionAboutUsContent').hide();
			$('#investorAboutUsContent').hide();
			$('#faqAboutUsContent').hide();
			$('#revenueAboutUsContent').fadeIn('fast');
		});
		
	$(document).on('click', '#optMission', function() {
			/*Section to change highlight of selected option*/
			$('#optRevenue').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optInvestor').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optFaq').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optContact').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optMission').removeClass("optAboutUsNav").addClass("optAboutUsNav-click");
			/*Section to change display based on option selection*/
			$('#revenueAboutUsContent').hide();
			$('#investorAboutUsContent').hide();
			$('#faqAboutUsContent').hide();
			$('#missionAboutUsContent').fadeIn('fast');
		});
	
	$(document).on('click', '#optInvestor', function() {
			/*Section to change highlight of selected option*/
			$('#optMission').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optRevenue').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optFaq').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optContact').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optInvestor').removeClass("optAboutUsNav").addClass("optAboutUsNav-click");
			/*Section to change display based on option selection*/
			$('#revenueAboutUsContent').hide();
			$('#missionAboutUsContent').hide();
			$('#faqAboutUsContent').hide();
			$('#investorAboutUsContent').fadeIn('fast');
		});
		
	$(document).on('click', '#optFaq', function() {
			/*Section to change highlight of selected option*/
			$('#optMission').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optRevenue').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optInvestor').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optContact').removeClass("optAboutUsNav-click").addClass("optAboutUsNav");
			$('#optFaq').removeClass("optAboutUsNav").addClass("optAboutUsNav-click");
			/*Section to change display based on option selection*/
			$('#revenueAboutUsContent').hide();
			$('#missionAboutUsContent').hide();
			$('#investorAboutUsContent').hide();
			$('#faqAboutUsContent').fadeIn('fast');
		});
		
	$(document).on('click', '#optHome', function() {
			/*Section to change highlight of selected option*/
			$('title').html("Welcome to Greenhouse Inc.")
	});
		
	$(document).on('click', '#optAboutUs', function() {
			/*Section to change highlight of selected option*/
			$('title').html("About Us")
	});
	
	$(document).on('click', '#optTheTeam', function() {
			/*Section to change highlight of selected option*/
			$('title').html("The Team")
	});
		
});

