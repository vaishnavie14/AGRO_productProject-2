//theme toggle function for index folder pages



function toggleTheme() {
		
            var theme = document.getElementsByTagName('link')[1];
  
            if (theme.getAttribute('href') == 'style.css') {
                theme.setAttribute('href', 'style1.css');
            } else {
                theme.setAttribute('href', 'style.css');
            }
        }