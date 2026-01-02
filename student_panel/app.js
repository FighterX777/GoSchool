
const sideMenu = document.querySelector("aside");
const profileBtn = document.querySelector("#profile-btn");
const nextDay = document.getElementById('nextDay');
const prevDay = document.getElementById('prevDay');

if (profileBtn) {
  profileBtn.onclick = function () {
    sideMenu.classList.toggle('active');
  }
}
window.onscroll = () => {
  sideMenu.classList.remove('active');
  if (window.scrollY > 0) { document.querySelector('header').classList.add('active'); }
  else { document.querySelector('header').classList.remove('active'); }
}

let setData = (day) => {
  document.querySelector('table tbody').innerHTML = ' '; //To clear out previous table data;  
  let daylist = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
  document.querySelector('.timetable div h2').innerHTML = daylist[day];
  switch (day) {
    case (0): day = Sunday; break;
    case (1): day = Monday; break;
    case (2): day = Tuesday; break;
    case (3): day = Wednesday; break;
    case (4): day = Thursday; break;
    case (5): day = Friday; break;
    case (6): day = Saturday; break;
  }
  var count = 1;
  day.forEach(sub => {

    var tr = document.createElement('tr');

    var trContent = `
                            <td>${sub.start_time}</td>
                             <td>${sub.end_time}</td>
                             <td>${sub.subject}</td>
                            
                        `;

    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr)

    if (count == 5) {
      var tr = document.createElement('tr');
      var trContent = `
                            <td></td>
                            <td>LUNCH</td>
                             <td></td>
                            
                        `;
      tr.innerHTML = trContent;
      document.querySelector('table tbody').appendChild(tr)
    }
    count++;

  });
}

let now = new Date();
let today = now.getDay(); // Will return the present day in numerical value; 
let day = today; //To prevent the today value from changing;

function timeTableAll() {
  const timetableElement = document.getElementById('timetable');
  if (timetableElement) {
    timetableElement.classList.toggle('active');
    setData(today);
    const timetableHeader = document.querySelector('.timetable div h2');
    if (timetableHeader) {
      timetableHeader.innerHTML = "Today's Timetable";
    }
  }
}

if (nextDay) {
  nextDay.onclick = function () {
    day <= 5 ? day++ : day = 0;
    setData(day);
  }
}

if (prevDay) {
  prevDay.onclick = function () {
    day >= 1 ? day-- : day = 6;
    setData(day);
  }
}

//To set the data in the table on loading window.
const timetableHeader = document.querySelector('.timetable div h2');
if (timetableHeader) {
  timetableHeader.innerHTML = "Today's Timetable";
}

// Load saved theme and setup toggle
window.addEventListener('DOMContentLoaded', function () {
  const themeToggler = document.querySelector(".theme-toggler");
  
  if (themeToggler) {
    themeToggler.onclick = function () {
      document.body.classList.toggle('dark-theme');
      themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
      themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
      
      var theme = document.body.classList.contains('dark-theme') ? 'dark' : 'light';
      
      fetch('../assets/themeSet.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'theme=' + encodeURIComponent(theme),
      })
      .then(response => response.text())
      .then(data => {
        console.log('Theme saved:', data);
      })
      .catch(error => {
        console.error('Error:', error);
      });
    };
  }
  
  fetch('../assets/user_theme.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'value=' + encodeURIComponent('value'),
  })
  .then(response => response.text())
  .then(data => {
    var theme = data.trim();
    
    if (theme === 'dark' && themeToggler) {
      if (!document.body.classList.contains('dark-theme')) {
        document.body.classList.add('dark-theme');
      }
      themeToggler.querySelector('span:nth-child(1)').classList.remove('active');
      themeToggler.querySelector('span:nth-child(2)').classList.add('active');
    } else if (themeToggler) {
      if (document.body.classList.contains('dark-theme')) {
        document.body.classList.remove('dark-theme');
      }
      themeToggler.querySelector('span:nth-child(1)').classList.add('active');
      themeToggler.querySelector('span:nth-child(2)').classList.remove('active');
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
});
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}


function handleShowAllSubjectMarks(examId) {

  document.getElementById("allResultList").classList.add("hide");
  document.querySelector(".marks-table-search-box").classList.add("hide");

  fetch("../assets/fetchSubjectiveResults.php", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: "exam_id=" + encodeURIComponent(examId + ""),
  })
    .then(response => response.json())
    .then(data => {
      console.log(data);

      if(data['status'] === "success"){
        document.getElementById("subjectiveResultTable").innerHTML = data ['data'];
      }else{
        document.getElementById("subjectiveResultTable").innerHTML="<h2 style='margin-top : 2rem;width: 100%; text-align: center;'>❌ Something went wrong!</h2>";
      }
      

    })
    .catch(error => {
      console.error("Error" + error);
    });


}

function hideSubjectiveListShowFullList(){
  document.getElementById("subjectiveResultTable").value = "";
  document.getElementById("allResultList").classList.remove("hide");
  document.querySelector(".marks-table-search-box").classList.remove("hide");
}

(document.querySelectorAll("no-submit")).forEach(element => {
  element.addEventListener("click", (event) => {
    event.preventDefault();
    event.stopPropagation();
  })
});

