const addForm = document.getElementById("add-user-form");
const showAlert = document.getElementById("showAlert");
const tbody = document.querySelector("tbody");


// Fetch All Users Ajax Request
const fetchAllUsers = async () => {
  const data = await fetch("../assets/php/crud_commande.php?readCandidature=1", 
  {
    method: "GET",
  });
  const response = await data.text();
  tbody.innerHTML = response;
};
fetchAllUsers();



// Delete User Ajax Request
tbody.addEventListener("click", (e) => {
  if (e.target && e.target.matches("a.deleteLink")) {
    e.preventDefault();
    let id = e.target.getAttribute("id");
    deleteUser(id);
  }
});

const deleteUser = async (id) => {
  const data = await fetch(`../assets/php/crud_commande.php?deleteCandidature=1&id=${id}`, {
    method: "GET",
  });
  const response = await data.text();
  showAlert.innerHTML = response;
  fetchAllUsers();
}; 