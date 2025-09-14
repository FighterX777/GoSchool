document.addEventListener('DOMContentLoaded',function(){


	fetch("fetchAttendence.php",{
		method:"POST",
	})
	.then(response=>response.text())
	.then(data=>{

		document.getElementById('attendence_table').innerHTML=data;
      
	})
	.catch(error=>{console.error("error"+error)})

	
})

document.addEventListener("DOMContentLoaded", function() {
    const themeToggler = document.querySelector('.theme-toggler');
    const body = document.body;

    // Check localStorage for theme preference
    const currentTheme = localStorage.getItem('theme');
    console.log("Current theme from localStorage:", currentTheme);
    if (currentTheme) {
        body.classList.add(currentTheme);
    }

    themeToggler.addEventListener('click', function() {
        // Toggle theme
        if (body.classList.contains('dark-theme')) {
            body.classList.remove('dark-theme');
            localStorage.setItem('theme', 'light-theme');
            console.log("Switched to light theme");
        } else {
            body.classList.add('dark-theme');
            localStorage.setItem('theme', 'dark-theme');
            console.log("Switched to dark theme");
        }
    });
});