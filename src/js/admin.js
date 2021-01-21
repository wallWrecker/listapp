// Admin.js
// Set current time
(function () {
  setInterval(() => {
    const timeIndicator = document.getElementById("time-indicator");
    timeIndicator.classList.add("h3");
    const date = new Date();
    let hours = date.getHours() >= 12 ? date.getHours() - 12 : date.getHours();
    let minutes =
      date.getMinutes() < 10
        ? "0" + String(date.getMinutes())
        : date.getMinutes();

    timeIndicator.innerHTML = hours + ":" + minutes + ":pm";
    // console.log(date);
  }, 1000);
})();

const dashboardCount = document.querySelectorAll("#dashboard-count");
Array.from(dashboardCount)
  .reverse()
  .forEach((element) => {
    let randomInt = Math.floor(Math.random() * Math.floor(100));
    element.innerHTML = randomInt;
  });
// console.log(timeIndicator);

const searchHereLabel = document.getElementById("search-here");
const searchInput = document.getElementById("search-input");
const typeStatus = document.getElementById("type-select");
const submitButton = document.getElementById("button-submit");
const outputPane = document.querySelector(".records");

const record_component = {
  // array
  data: [],
  myTextNode: function (data) {
    const textData = document.createTextNode(data);
    return textData;
  },

  main_card_container_component: function () {
    const main_container = document.createElement("div");
    main_container.classList.add(
      "border",
      "border-secondary",
      "p-3",
      "mx-auto",
      "my-2",
      "shadow",
      "rounded"
    );

    const collection_of_subcomponents = [
      this.transaction_id(),
      this.date_pane_component(),
      this.information_pane(),
      this.update_button(),
    ];

    // Applying all the subcomponents that are present in that collection
    collection_of_subcomponents.forEach((item_component) => {
      main_container.appendChild(item_component);
    });
    return main_container;
  },

  transaction_id: function () {
    // Some random Math Generated
    const randomNumber = Math.floor(Math.random() * Math.floor(1000));

    const p = document.createElement("p");
    p.classList.add("lead", "py-1");
    const data = this.myTextNode(randomNumber);
    p.appendChild(data);
    return p;
  },

  date_pane_component: function () {
    const date_pane_container = document.createElement("div");
    // Add necessary classes to this main container
    date_pane_container.classList.add("d-flex", "justify-content-between");
    const divAquired = document.createElement("div");
    const divPaid = document.createElement("div");
    // Adding necessary classes to each container
    divAquired.classList.add("py-1", "bd-highlight");
    divPaid.classList.add("py-1", "bd-highlight");

    const labelAquired = this.element_production("label");
    const labelPaid = this.element_production("label");

    const labelAquiredText = this.myTextNode("Date Aquired: ");
    // This should contains real data from the backend soon
    const actualAquiredDate = this.myTextNode("12/12/2020");

    const labelPaidText = this.myTextNode("Date Paid: ");
    // This should contains real data from the backend soon
    const actualPaidDate = this.myTextNode("--/--/----");

    //appending textNodes to labelAquired and labelPaid variables
    labelAquired.appendChild(labelAquiredText);
    labelPaid.appendChild(labelPaidText);

    // appending labels to it's respected containers
    divAquired.appendChild(labelAquired);
    divAquired.appendChild(actualAquiredDate);

    divPaid.appendChild(labelPaid);
    divPaid.appendChild(actualPaidDate);

    date_pane_container.appendChild(divAquired);
    date_pane_container.appendChild(divPaid);

    // Finally Appending to the main date_pane_container container
    return date_pane_container;
  },

  information_pane: function () {
    const information_pane_container = this.element_production("div");
    information_pane_container.classList.add(
      "d-flex",
      "justify-content-between"
    );

    const name_container = this.element_production("p");
    name_container.classList.add("lead", "py-1");
    // You will replace this with real data.
    name_container.appendChild(this.myTextNode("Christian Paul"));

    const ammount_container = this.element_production("p");
    ammount_container.classList.add("lead", "py-1");

    const peso_sign_container = this.element_production("span");
    peso_sign_container.appendChild(this.myTextNode("₱"));

    ammount_container.appendChild(peso_sign_container);

    // You will replace this with real data.
    ammount_container.appendChild(this.myTextNode("50"));

    const status_container = this.element_production("p");
    status_container.classList.add("lead", "py-1");
    // You will replace this with real data.
    status_container.appendChild(this.myTextNode("Unpaid"));

    information_pane_container.appendChild(name_container);
    information_pane_container.appendChild(ammount_container);
    information_pane_container.appendChild(status_container);

    return information_pane_container;
  },

  update_button: function () {
    const the_update_button = this.element_production("button");
    the_update_button.classList.add("btn", "btn-outline-primary");
    // You will replace this with real data.
    the_update_button.appendChild(this.myTextNode("UpdateButton"));

    return the_update_button;
  },

  element_production: function (elementname) {
    elementname = this.string_sanitize(elementname);
    const myElement = document.createElement(elementname);
    return myElement;
  },

  // String sanitation function (additional functionalities)
  string_sanitize: function (string, allcaps = true) {
    string = string.split("");
    string = string.filter((ele) => typeof ele === "string");
    string = string.filter((ele) => ele != " ");
    string =
      allcaps == true
        ? string.join("").trim().toUpperCase()
        : string.join("").trim();
    return string;
  },
};

// testing record component -> transaction_id method
console.log(record_component.transaction_id());
const body = document.querySelector("body");

const allRecords = document.querySelector("#all-records");

// for (let i = 0; i <= 300; i++) {
//   allRecords.appendChild(record_component.main_card_container_component());
// }

console.log(record_component.string_sanitize("Christian paul", false));

submitButton.onclick = function () {
  if (searchInput.value == "" || typeStatus.value == "") {
    if (searchInput.value.length < 3) {
      alert("Please enter something!");
      return;
    }
    alert("Status cannot be empty!");
    return;
  }

  const xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      outputPane.innerHTML = this.responseText;
    }
  };

  xhttp.open(
    "GET",
    "../process/admin_function.php?keyword=" +
      searchInput.value +
      "&status=" +
      typeStatus.value,
    true
  );
  xhttp.send();
};

// submitButton.onmouseover = function () {
//   alert("Christian Paul is awesome!");
// };
