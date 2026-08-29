async function getGuests() {
  const response = await fetch("guests.json");
  const guests = await response.json();

  return guests;
}

//initial form to search guest name
const searchForm = document.querySelector(".search-form");
const searchButton = document.getElementById("search-guests");

//list of guest matches created
const guestMatches = document.getElementById("matches");
const getInviteBtn = document.querySelector(".find-invite");

async function searchGuests() {
  guestMatches.innerHTML = "";
  getInviteBtn.style = "display: none";
  const guests = await getGuests();

  const guestSearch = document.getElementById("find-name").value;

  guests.forEach((guest) => {
    const guestNames = guest.names.join(" & ");
    if (guestNames.toLowerCase().includes(guestSearch.toLowerCase())) {
      const li = document.createElement("li");
      const label = document.createElement("label");
      const input = document.createElement("input");

      label.htmlFor = `party${guest.id}`;

      input.id = `party${guest.id}`;
      input.type = "radio";
      input.name = "guest";
      input.value = `party${guest.id}`;

      label.append(input);
      label.append(guestNames);

      li.append(label);
      guestMatches.appendChild(li);
    }
  });
  if (guestMatches.innerHTML === "") {
    guestMatches.innerHTML = "No Matches Found";
  } else {
    getInviteBtn.style = "display: block";
  }
}

searchForm.addEventListener("submit", (event) => {
  event.preventDefault();
  searchGuests();
});

//search button has been clicked and list of users displays
//TODO: form should show and it should specifically ask if each individual guest in party is coming
