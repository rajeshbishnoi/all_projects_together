var cont = 0;

function register(){

     cont++;
		
		if(cont==1){
		 	$('.box').animate({height:'695px'}, 550);
			$('.show').css('display','block');
			$('#logintoregister').text('Register');
			$('#buttonlogintoregister').text('Register');
			$('#plogintoregister').text("Have an account?");
			$('#textchange').text('Login');
		}
		else
		{
			$('.show').css('display','none');
			$('.box').animate({height:'365px'}, 550);
			$('#logintoregister').text('Login');
			$('#buttonlogintoregister').text('Login');
			$('#plogintoregister').text("Don't have a account?");
			$('#textchange').text('Register');
			cont = 0;
		}
}