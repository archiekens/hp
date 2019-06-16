var navbarShown = false;
var mailShown = false;
var navbarMobile = false;

function displayNavbar(){
	var currentScroll = window.pageYOffset;
	var navbar = document.getElementById('navbar');

	if (currentScroll>0 && !navbarShown){
		navbar.className += ' shown';
		navbarShown = true;
	}else if (currentScroll === 0){
		navbar.className = navbar.className.replace(' shown','');
		navbarShown = false;
	}
	animateSection();
}

function displayAnchors(){
	var navbar = document.getElementById('navbar');
	if (navbarMobile) {
		navbar.className = navbar.className.replace(' mobile', '');
		navbarMobile = false;
	}else{
		navbar.className += ' mobile';
		navbarMobile = true;
	}
}

function displayMail(){
	if (!mailShown)
	document.getElementById('mail-container').className += ' shown';
}

function closePopup(){
	var popup = document.getElementById('popup-info');
	var blocker = document.getElementById('blocker');

 	blocker.className = blocker.className.replace(' shown','');
	popup.className = popup.className.replace(' shown','');

}

function showPopup(){
	var popup = document.getElementById('popup-info');
	var blocker = document.getElementById('blocker');

	blocker.className += ' shown'
	popup.className += ' shown';

}

function scrollToSection(id) {
  var elementY = document.getElementById(id).offsetTop-69; 
  var startingY = window.pageYOffset  
  var diff = elementY - startingY  
  var start
  var duration = 500;

  // Bootstrap our animation - it will get called right before next frame shall be rendered.
  window.requestAnimationFrame(function step(timestamp) {
    if (!start) start = timestamp
    // Elapsed miliseconds since start of scrolling.
    var time = timestamp - start
    // Get percent of completion in range [0, 1].
    var percent = Math.min(time / duration, 1)

    window.scrollTo(0, startingY + diff * percent)

    // Proceed with animation as long as we wanted it to.
    if (time < duration) {
      window.requestAnimationFrame(step)
    }
  })

  if (event.target.id == 'find-out-here') setTimeout(displayMail(),3000);
  setActiveAnchor(event.target);
}

function setActiveAnchor(obj){
	var anchors = document.getElementsByClassName('navbar-anchor');
	var navbar = document.getElementById('navbar');

	for (var i = anchors.length - 1; i >= 0; i--) {
		anchors[i].className = 'navbar-anchor';
	}
	obj.className += ' active';

	navbar.className = navbar.className.replace(' mobile', '');
	navbarMobile = false;
}

function animateSection(){
	var viewportHeight = document.documentElement.clientHeight;
	var allowance = document.documentElement.clientHeight/2.5;

	var home = document.getElementById('banner');
	var homeTrigger = home.getBoundingClientRect().top + allowance;

	var about = document.getElementById('about');
	var aboutTrigger = about.getBoundingClientRect().top + allowance;

	var skills = document.getElementById('skills');
	var skillsContainer = document.getElementById('skill-circles-container');
	var skillsTrigger = skillsContainer.getBoundingClientRect().bottom;

	var projects = document.getElementById('projects');
	var projectsTrigger = projects.getBoundingClientRect().top + allowance;

	var contact = document.getElementById('contact');
	var contactTrigger = contact.getBoundingClientRect().top + allowance;

	if (homeTrigger<=viewportHeight) {setActiveAnchor(document.getElementById('anchor-home'))}
	if (aboutTrigger<=viewportHeight) {
		if (!about.className.includes(' triggered')) {about.className += ' triggered'}
		setActiveAnchor(document.getElementById('anchor-about'));
	}
	if (skillsTrigger<=viewportHeight && !skills.className.includes(' triggered')) {skills.className += ' triggered'}
	if (projectsTrigger<=viewportHeight) {
		if (!projects.className.includes(' triggered')) {projects.className += ' triggered';}
		setActiveAnchor(document.getElementById('anchor-projects'));
	}
	if (contactTrigger<=viewportHeight) {setActiveAnchor(document.getElementById('anchor-contact'))}

	
}	

displayNavbar();